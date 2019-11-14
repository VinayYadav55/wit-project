$(document).ready(function(){
	$('a[data-toggle="pill"]').on('show.bs.tab', function(e) {
		localStorage.setItem('activeTab', $(e.target).attr('href'));
	});
	var activeTab = localStorage.getItem('activeTab');
	if(activeTab){
		$('#pills-tab a[href="' + activeTab + '"]').tab('show');
	}
	$('.approveByWit').on('click', function(){
		var thisDiv = $(this);
		var mentorId = $(this).attr('id');
		$.ajax({
			url: 'index.php?mentors=true',
			type:'post',
			datatype:'json',
			data:{
				mentorId:mentorId,
				approveButton:true,
			},
			success:function(response){
				// $('.alertmessage').html(response.message).fadeIn();
					thisDiv.html('').append('<i class="fas fa-spinner fa-spin checkIt"></i>');
					thisDiv.addClass('px-4 py-1');
					setTimeout(function(){
							$('.checkIt').hide();
							thisDiv.html('').append('<i class="far fa-check-circle text-white" style="font-size:18px;"></i>');
							thisDiv.addClass('bg-success');
					},3000);
				setTimeout(function(){
					var parent = thisDiv.parent();
					var firstparent = parent.parent();
					var secondparent = firstparent.parent();
					var thirdParent = secondparent.parent();
					thirdParent.fadeOut();
				},5000)
			}
		});
	});
	$('.viewprofile').on('click',function(){
		var mentorId = $(this).attr('id');
		$.ajax({
			url: 'mentors_detailed_profile/mentors_id='+mentorId,
			type:'get',
			datatype:'json',
			data:{
				"wit_mentor_flag":true
			},
			success:function(response){		 
				response.forEach(function(xyz) {
					$('div.modal-body').append(
						$('<div/>').text(xyz.first_name));
				
				});
			
        $('#myModal').modal('show');
			}
		}); 
	});
});