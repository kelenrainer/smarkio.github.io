$(function(){
	$('.form').submit(function(){
		$.ajax({
			url: 'envia.php',
			type: 'POST',
			data: $('.form').serialize(),
			success: function(data){
				$('comentarios').html(data);
			}
		});
		return false;
	});
});