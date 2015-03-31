$(document).ready(function(){

	//Expansion Handler
	$(document).on('click', '.compose textarea', function() {
		$(this).parents('.compose').toggleClass("expand");
	})

	//Templates
	var makeCompose = function() {
		var source = $('#template-compose').html();
		var template = Handlebars.compile(source);
		return template();
	}

	//Composing Comments
	$('header form').on('submit', function(event) {
		event.preventDefault();
		var message = $('form textarea').val();
		if(message.length > 0){
			var threadHTML = makeThread(message);
			$('.comments').prepend(threadHTML);
			$('form textarea').val('');
			$(this).parents('.compose').toggleClass("expand");
		}
	})
})