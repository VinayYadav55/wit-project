$(document).ready(function(){
	$('.approveButton').on('click', function(){
		var mentorId = $(this).attr('id');
		$.ajax({
			url: 'index.php?mentors=true',
			type:'post',
			datatype:'json',
			data:{
				'approveButton':true,
				'mentorId':mentorId,
			},
			success:function(response){
				$('.alertmessage').html(response.message).fadeIn();
			}

		})
	})
})