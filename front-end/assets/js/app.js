 $( document ).ready(function(){

 	//URL
 	var Url = document.location.origin + '/FrontEnd/back-end/';
 	//Acoes
 	var dataAction = $('#data-action').val();

 	//Loader dinamico
 	function ajaxLoader(){
 		var div = $('<div></div>').addClass('text-center').html('<i class="fa fa-spinner fa-4x fa-spin"></i>');
 		$('.price-list').html(div);
 	}
 	

      
    $('.search-price #submiteBtn').on('click', function(){
			
      		var priceVal = $("#precoSugerido").val();

			$.ajax({
				url : Url + 'ajaxProcess.php',
				method : 'post',
				data : {price : priceVal, 'dataAction' : dataAction},
				dataType : 'html',

				beforeSend: function(){
					ajaxLoader();
				},			
				success : function (data){
					$('.price-list').html(data);
				}
			}) ;    		
      });
});