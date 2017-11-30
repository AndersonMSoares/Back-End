$( document ).ready(function(){

	var Url = document.location.origin + '/FrontEnd/back-end/';


	$('.contactFor #enviarCon').on('click', function(e){
		e.preventDefault(); 
		var dadosDoPost = {
			name : $('#name').val(),
			email : $('#email').val(),
			subjectmatter : $('#subjectmatter').val(),
			message : $('#message').val()
		};
		

		console.debug(dadosDoPost);
	
		$.ajax({
			url : Url + 'contato.php',
			method : 'post',
			data : dadosDoPost,
			dataType : 'html',

			success : function (data){
				$().html(data);
			}
		});
	});

 });