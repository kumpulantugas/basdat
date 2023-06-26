(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);

(function() {
	'use strict';
	window.addEventListener('load', function() {
	  // Fetch all the forms we want to apply custom Bootstrap validation styles to
	  var forms = document.getElementsByClassName('needs-validation');
	  // Loop over them and prevent submission
	  var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		  if (form.checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
		  } 
		  else if (form.checkValidity() === true) {
			document.querySelector(btn-primary) .addEventListener("click", redirectFunction);
			function redirectFunction() {
				location.href("submit.html");
			}
			// stop form submit only for demo
			event.preventDefault();
		 }
		  form.classList.add('was-validated');
		}, false);
	  });
	}, false);
  })();
