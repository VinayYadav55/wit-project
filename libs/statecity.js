var countryStateInfo = {
  // USA: {
  //   California: {
  //     'Los Angeles': ['90001', '90002', '90003', '90004'],
  //     'San Diego': ['92093', '92101']
  //   },
  //   Texas: {
  //     Dallas: ['75201', '75202'],
  //     Austin: ['73301', '73344']
  //   }
  // },
  India: {
    Haryana: {
      Gurgaon: ['122001', '122002', '122006']
    },
    MadhyaPradesh: {
      Indore: ['452001', '452002', '452003', '452004'],
      Bhopal: ['462001', '462002']
    },
    AndhraPradesh: {
      Hyderabad: [
        '500001',
        '500002',
        '500003',
        '500004',
        '500005',
        '500006',
        '500007',
        '500008',
        '500009',
        '500010',
        '500011',
        '500012',
        '500013',
        '500014',
        '500015',
        '500016',
        '500017'
      ]
    },
    Karnataka: {
      Bengaluru: [
        '560001',
        '560002',
        '560003',
        '560004',
        '560005',
        '560006',
        '560007',
        '560008',
        '560009',
        '560010',
        '560011',
        '560012',
        '560013',
        '560014',
        '560015',
        '560016',
        '560017',
        '560018',
        '560019',
        '560020',
        '560021',
        '560022',
        '560023',
        '560024',
        '560025'
      ]
    }
  }
};

window.onload = function() {
  //Get html elements
  var countySel = document.getElementById('countySel');
  var stateSel = document.getElementById('stateSel');
  var citySel = document.getElementById('citySel');
  var zipSel = document.getElementById('zipSel');

  //Load countries
  for (var country in countryStateInfo) {
    countySel.options[countySel.options.length] = new Option(country, country);
  }

  //County Changed
  countySel.onchange = function() {
    stateSel.length = 1; // remove all options bar first
    citySel.length = 1; // remove all options bar first
    zipSel.length = 1; // remove all options bar first

    if (this.selectedIndex < 1) return; // done

    for (var state in countryStateInfo[this.value]) {
      stateSel.options[stateSel.options.length] = new Option(state, state);
    }
  };

  //State Changed
  stateSel.onchange = function() {
    citySel.length = 1; // remove all options bar first
    zipSel.length = 1; // remove all options bar first

    if (this.selectedIndex < 1) return; // done

    for (var city in countryStateInfo[countySel.value][this.value]) {
      citySel.options[citySel.options.length] = new Option(city, city);
    }
  };

  //City Changed
  citySel.onchange = function() {
    zipSel.length = 1; // remove all options bar first

    if (this.selectedIndex < 1) return; // done

    var zips = countryStateInfo[countySel.value][stateSel.value][this.value];
    for (var i = 0; i < zips.length; i++) {
      zipSel.options[zipSel.options.length] = new Option(zips[i], zips[i]);
    }
  };
};
