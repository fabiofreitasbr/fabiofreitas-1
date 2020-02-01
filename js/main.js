
$(document).ready(function () {

    /* Ativar e Desativar Menu */
    $(".hamburger").click(function () {
		$(this).toggleClass('is-active');
		$("nav").toggleClass('active');
    });

    /* Header Nav Rolagem */
    var scrollTop = 0;
	$(window).scroll(function () {
		if (scrollTop == 0) {
			scrollTop = 1;
			var positionCurrent = $(window).scrollTop();
			var headerArea = $('.header-area');
			var headerBar = $('.header-bar');
			if (positionCurrent > 50) { headerArea.addClass('fixed'); headerBar.addClass('fixed'); }
			else { headerArea.removeClass('fixed'); headerBar.removeClass('fixed'); }
			scrollTop = 0;
		}
    });
    
    /* Sair do Menu ao Clicar */
    var $doc = $('html, body');
	$('nav a').click(function() {
		var tamanhoHeader = $("header").height();
	    $doc.stop().animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - 80
	    }, 500);
		$('.hamburger').removeClass('is-active');
		$("nav").removeClass('active');
	    return false;
	});
});