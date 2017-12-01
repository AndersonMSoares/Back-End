$( document ).ready(function(){

	var Url = document.location.origin + '/FrontEnd/back-end/App/Models/';

	$('#enviarCon').on('click', function(e){
		e.preventDefault(); 
		var dadosDoPost = {
			name : $('#name').val(),
			email : $('#email').val(),
			subjectmatter : $('#subjectmatter').val(),
			message : $('#message').val()
		};
			
	
		$.ajax({
			url : Url + 'contato.php',
			method : 'post',
			data : dadosDoPost,
			dataType : 'html',	
			beforeSend: function(){
				$('#enviarCon').prop('disabled','true');
			},	
			success : function (data){
				$('#enviarCon').prop('disabled','');
				$(".msg").html('<p>Enviado com sucesso!<p>').slideDown(1000);
			}
		});
	
	});

 });