$(document).ready(function(){
	$('.requests').on('click', function(){
		$.ajax({
			url: 'index.php?mentee_list=true',
			type:'GET',
			datatype:'html',
			data:{
				'newRequest':true,
			},
			success:function(response){
				
				$('body').html(response);
				$('.requests').addClass('active');
				$('.followers').removeClass('active');
			}

		})
	})

	$('.followers').on('click', function(){
		
		$.ajax({
			url: 'index.php?mentee_list=true',
			type:'GET',
			datatype:'html',
			data:{
				'followers':true,
			},
			success:function(response){
				
				$('body').html(response);
				$('.requests').removeClass('active');
				$('.followers').addClass('active');
				$('.acceptrequest').fadeOut();
			}

		});
	});
	$('.acceptrequest').on('click',function(){
		  var acceptedDiv = $(this);
    var mentor_id = $(this).attr('id');
		var requestid = $(this).attr('requestid');
		
    $.ajax({
      url: 'index.php?mentee_list=true',
      type: 'post',
      dataType: 'json',
      data: {
				mentor_id: mentor_id,
				requestid:requestid,
        acceptRequest: true
      },
      success: function(response) {

       if(response.success==='true'){
				 alert(response.message);
				 var parent = acceptedDiv.parent();
				 var firstparent = parent.parent();
				 var secondparent = firstparent.parent();
				 var thirdParent = secondparent.parent();
				 thirdParent.fadeOut();

			 }
      }
    });
  });
});