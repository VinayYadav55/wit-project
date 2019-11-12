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
				$('body').replaceWith(response);
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
				$('body').replaceWith(response);
			}

		})
	})
})