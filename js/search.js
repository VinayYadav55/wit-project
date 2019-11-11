$(document).ready(function() {
  $('.search-key')
    .on('input', function() {
      var el = $(this);
      // get entered string
      var searchKey = el.val();

      // set current focus
      currentFocus = -1;

      if (searchKey.length < 2) {
        emptySuggestionList();
        $(this)
          .next()
          .hide();
        return;
      }

      $(this)
        .next()
        .show()
        .click(function() {
          el.val('').focus();
          emptySuggestionList();
          $(this).hide();
        });

      $.ajax({
        url: 'index.php?job_portal=true',
        type: 'post',
        dataType: 'json',
        data: { jobKeywordSearch: true, searchKey: searchKey },
        success: function(result) {
          generateSuggestionList(el, result);
        },
        error: function(err) {}
      });
    })
    .on('keydown', function(e) {
      var suggestionList = $('.list-item');

      switch (e.which) {
        case 38:
          currentFocus--;
          addActive(suggestionList);
          break;
        case 40:
          currentFocus++;
          addActive(suggestionList);
          break;
        case 13:
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (suggestionList) {
              suggestionList.eq(currentFocus).click();
              $(e.target)
                .parent()
                .trigger('submit');
            }
          }
          break;
        default:
          break;
      }
    });

  $('.search-company-key')
    .on('input', function() {
      var el = $(this);
      // get entered string
      var searchKey = el.val();

      // set current focus
      currentFocus = -1;

      if (searchKey.length < 2) {
        emptySuggestionList();
        $(this)
          .next()
          .hide();
        return;
      }

      $(this)
        .next()
        .show()
        .click(function() {
          el.val('').focus();
          emptySuggestionList();
          $(this).hide();
        });

      $.ajax({
        url: 'index.php?job_portal=true',
        type: 'post',
        dataType: 'json',
        data: { companyKeywordSearch: true, searchKey: searchKey },
        success: function(result) {
          generateCompanySuggestionList(el, result);
        },
        error: function(err) {}
      });
    })
    .on('keydown', function(e) {
      var suggestionList = $('.list-item');

      switch (e.which) {
        case 38:
          currentFocus--;
          addActive(suggestionList);
          break;
        case 40:
          currentFocus++;
          addActive(suggestionList);
          break;
        case 13:
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (suggestionList) {
              suggestionList.eq(currentFocus).click();
              $(e.target)
                .parent()
                .trigger('submit');
            }
          }
          break;
        default:
          break;
      }
    });

  checkAllFilter();

  // sticky filter box handling
  $(window).on('scroll', stickyBrandFilter);

  // Brand filter box on scroll sticky function
  function stickyBrandFilter() {
    if (window.pageYOffset > 114) {
      $('.leftside').addClass('fixed');
    } else {
      $('.leftside').removeClass('fixed');
    }
  }

  // search box filter function start here
  $('.search').on('keyup', brandSearchBox);

  // Brand search function
  function brandSearchBox() {
    var parent = $(this).parent();
    var listItem = parent.find('#brands li');
    var searchkey = $(this).val();

    listItem.each(function() {
      var listText = $(this).text();

      if (
        listText.substr(0, searchkey.length).toLowerCase() !==
          searchkey.toLowerCase() &&
        searchkey.trim() !== ''
      ) {
        $(this).css('display', 'none');
      } else {
        $(this).css('display', 'list-item');
      }
    });
  }

  // brand filter functionality
  $('.filter').on('change', function() {
    // regular expression to replace page
    var regx =
      '(\\?|\\&)(page=' +
      getQueryParams('page') +
      '|search_product=' +
      getQueryParams('search_product') +
      ')';
    var regex = new RegExp(regx);

    var url = window.location.href.replace(regex, '');

    var name = $(this).attr('name');
    var value = $(this).val();

    var checked = $(this).prop('checked');
    if (checked) {
      if (url.indexOf(name + '=' + value) == -1) {
        if (url.indexOf('?') > -1) {
          var regex = /[?&]([^=#]+)=([^&#]*)/g,
            params = {},
            match,
            flag = 0,
            flag1 = 0;
          while ((match = regex.exec(url))) {
            params[match[1]] = match[2];
            if (match[1] == name) {
              if (match[2] == value) flag = 1;
            }
          }
          if (flag == 0) window.location.href = url + '&' + name + '=' + value;
        } else {
          if (url[url.length - 1] == '/')
            window.location.href = url + '?' + name + '=' + value;
          else if (url.slice(url.length - 3) == 'php')
            window.location.href = url + '?' + name + '=' + value;
          else window.location.href = url + '?' + name + '=' + value;
        }
      }
    } else {
      value = value.replace(/ \b/g, '%20');
      value = value.trim();
          value = value.replace(/ /g, '%20');
      //For Filter Unchecked functionality
      var str = name + '=' + value;
      str = str.trim();
      var i = url.indexOf(str);
      var j = url.indexOf(str) + str.length - 1;
      if (url[i - 1] == '&' && url[j + 1] == '&') {
        var first = url.slice(0, i - 1);
        var second = url.slice(j + 1, url.length);
        url = first + second;
      } else if (url[i - 1] == '?' && url[j + 1] == '&') {
        var first = url.slice(0, i);
        var second = url.slice(j + 2, url.length);
        url = first + second;
      } else if (
        (url[i - 1] == '&' && !url[j + 1]) ||
        (url[i - 1] == '?' && !url[j + 1])
      ) {
        var first = url.slice(0, i - 1);
        url = first;
      }
      window.location.href = url;
    }
  });

  // pagination functionality for listing page products start here
  $(document).on('click', '.productpagetab', pageFilter);
});

// page filter
function pageFilter() {
  var page = $(this).attr('id');
  var url = window.location.href;

  if (url.indexOf('?') > -1) {
    if (getQueryParams('page')) {
      window.location.href = url.replace(
        'page=' + getQueryParams('page'),
        'page=' + page
      );
    } else {
      window.location.href = url + '&page=' + page;
    }
  } else {
    window.location.href = url + '?page=' + page;
  }
}

function getQueryParams(key) {
  // get query string from url
  var queryParams = window.location.search
    .toLowerCase()
    .substring(1)
    .split('&');
  // create object for storing query params
  var params = {};

  queryParams.forEach(function(item) {
    var query = item.split('=');
    params[query[0]] = query[1];
  });

  return params[key.toLowerCase()];
}

function checkAllFilter() {
  var url = window.location.href;
  var regex = /[?&]([^=#]+)=([^&#]*)/g,
    params = {},
    match;
  while ((match = regex.exec(url))) {
    params[match[1]] = match[2];
    if (match[1] == 'job_type[]') {
      var string = match[2].replace(/%20/g, '');
      $('#' + string).prop('checked', true);
    }
    if (match[1] == 'city[]') {
      var string = match[2].replace(/%20/g, '');
      $('#' + string).prop('checked', true);
    }
    if (match[1] == 'functional_area[]') {
      var string = match[2].replace(/%20/g, '');
      var string = string.replace(/\//g, '');
      $('#' + string).prop('checked', true);
    }
    if (match[1] == 'industry_type[]') {
      var string = match[2].replace(/%20/g, '');
      var string = string.replace(/\//g, '');
      $('#' + string).prop('checked', true);
    }
    if (match[1] == 'experience[]') {
      var string = match[2].replace(/%20/g, '');
      var string = string.replace(/\//g, '');
      var string = string.replace(/\,/g, '');
      var string = string.replace('+', '-');
    
      $('#' + string).prop('checked', true);
    }
    if (match[1] == 'company_name[]') {
      var string = match[2].replace(/%20/g, '');
      var string = string.replace(/\//g, '');
      var string = string.replace(/\,/g, '');
      var string = string.replace(/\./g, '');
      $('#' + string).prop('checked', true);
    }
  }
}

// funaction used in app
function generateSuggestionList(element, data) {
  // empty already present list from list
  emptySuggestionList();

  var searchList = $('<div/>', { class: 'searchSuggestion' });

  $('.product_search').append(searchList);

  // loop through each array and update in list
  data.forEach(function(item) {
    searchList.append(
      $('<div/>', {
        class: 'list-item filter',
        id: item.id
      }).text(item.job_title)
    );
  });

  //update input box on search suggestion click
  searchList.children().on('click', function() {
    element.val($(this).text());
    element.attr('name', $(this).attr('id'));
    element.parent().trigger('submit');
    emptySuggestionList();
  });
}

function addActive(list) {
  if (!list) {
    return;
  }
  removeActive(list);
  // remove all active list
  if (currentFocus >= list.length) currentFocus = 0;
  if (currentFocus < 0) currentFocus = list.length - 1;
  /*add class "autocomplete-active":*/
  list.eq(currentFocus).addClass('active-list');
}

function removeActive(list) {
  list.removeClass('active-list');
}

function emptySuggestionList() {
  $('.searchSuggestion').each(function() {
    $(this).remove();
  });
}

// funaction used in app
function generateCompanySuggestionList(element, data) {
  // empty already present list from list
  emptySuggestionList();

  var searchList = $('<div/>', { class: 'searchSuggestion' });

  $('.company_search').append(searchList);

  // loop through each array and update in list
  data.forEach(function(item) {
    searchList.append(
      $('<div/>', {
        class: 'list-item filter',
        id: item.id
      }).text(item.company_name)
    );
  });

  //update input box on search suggestion click
  searchList.children().on('click', function() {
    element.val($(this).text());
    element.attr('name', $(this).attr('id'));
    element.parent().trigger('submit');
    emptySuggestionList();
  });
}
