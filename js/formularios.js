$(function() {
	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			beforeSend: function(){
				$('.overlay-loading').fadeIn();
			},
			url: 'http://localhost/php/ProjetosPraticos/projeto_landing-page/ajax/formularios.php',
			method: 'post',
			dataType: 'json',
			data: form.serialize()
		}).done(function(data){
			if(data.sucesso) {
				$('.overlay-loading').fadeOut();
				$('.sucesso').fadeIn();
				setTimeout(function(){
					$('.sucesso').fadeOut();
				}, 3000)
			} else {
				$('.overlay-loading').fadeOut();
				$('.erro').fadeIn();
				setTimeout(function(){
					$('.erro').fadeOut();
				}, 3000)
			}
		})
		return false;
	})
})