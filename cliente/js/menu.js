$(document).ready(function(){
	// Menu Responsive
	$(".boton-menu span").click(function(e){
		e.preventDefault();
		if($(".boton-menu span").attr('class') == 'icon icon-menu'){
			$(".boton-menu span").removeClass('icon icon-menu').addClass('icon icon-cancel');
			$(".navegacion nav").animate({left:'0'})
		} else {
			$(".boton-menu span").removeClass('icon icon-cancel').addClass('icon icon-menu');
			$(".navegacion nav").animate({left:'-100%'})
		}
	});
});