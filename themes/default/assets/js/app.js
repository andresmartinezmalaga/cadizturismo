$( document ).ready(function() {

	$('#modalMailExperience').on('submit', function(){
	    $('#modal-exp').iziModal('close');
	    $('#modal-success').iziModal('open');
	})


	$('.btnNumPag').on('click', function(e){
		
		$('.btnNumPag').each(function(){

			$(this).removeClass("active");

		});

	  	var btn = $('#'+e.target.id);
	  	btn.addClass('active');
	  	
	})
});


