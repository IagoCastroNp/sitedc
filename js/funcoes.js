$(function(){		
	// inicio funções menu responsivo		
	$('.toggle').click(function(){
		$('.menu-responsivo').toggleClass('ativo');
		$toglefont = $(".toggle i").hasClass("fa-bars");
		if($toglefont == true) {
			$('.toggle i').removeClass('fa-bars');
			$('.toggle i').addClass('fa-times');
		} else {
			$('.toggle i').removeClass('fa-times');
			$('.toggle i').addClass('fa-bars');
		}
	});
	$('.toggle-fechar').click(function(){
		$('.menu-responsivo').toggleClass('ativo');
		$toglefont = $(".toggle i").hasClass("fa-bars");
		if($toglefont == true) {
			$('.toggle i').removeClass('fa-bars');
			$('.toggle i').addClass('fa-times');
		} else {
			$('.toggle i').removeClass('fa-times');
			$('.toggle i').addClass('fa-bars');
		}
	});
	// fim funções menu responsivo

	// inicia evento wow
	new WOW().init();
});

var host = "dcstudios.com.br"
if (window.location.host == host && window.location.protocol != "https:") {
	window.location.protocol = "https:"
}

// enveto esconder e mostrar botão scrolltop
$(window).scroll(function(){
	if($(document).scrollTop() > 200){
		$('.scrollTop').fadeIn('slow');
	} else { 
		$('.scrollTop').fadeOut('slow');
	} 
});

// evento ir para o top
var body = $("html, body");
$('.scrollSuave').click(function() {
	body.animate({
		scrollTop: $( $.attr(this, 'href') ).offset().top
	}, 800);
	return false;
});


// etapas de pagamento
var form = $("#etapa-pagamento").show();
var current_bar = $(".current-bar");
var done_bar = $(".done-bar");
form.validate({
	errorPlacement: function errorPlacement(error, element) { 
		element.before(error); },
		rules: {
			modoPagto: {
				required: ".modoPagto"
			}
		},
		messages:{
			confirmRules: {
				required: "Campo requerido para prosseguir!"
			},
			price: {
				required: "Algum erro ocorreu com este botão, por favor, contacte nossos administradores!"
			},
			modoPagto: {
				required: "Escolha uma forma de pagamento antes de prosseguir!"
			}
		}
	});
form.children(".content").steps({
	labels: {
		cancel: "Cancelar",
		current: "current step:",
		pagination: "Pagination",
		finish: "Concluir",
		next: "Continuar",
		previous: "Voltar",
		loading: "Carregando ..."
	},
	titleTemplate: "#title#",
	headerTag: "span",
	bodyTag: "section",
	saveState: false,
	transitionEffect: "fade",
	onStepChanging: function (event, currentIndex, newIndex)
	{
		if(newIndex === 1 ){
			current_bar.animate({
				width: "28%"
			}, 400, function() {
				done_bar.animate({width: "0"}, 500);
			});
		}else if(newIndex === 2){
			// valores do input modo pagamento
			var modo = $( "input[type=radio][name=modoPagto]:checked" ).val();
			if(modo === 'workana'){
				$("li.confirmModo").css({"display":"none"});
				$("img.confirmModo").attr({src: "images/modal/"+ modo +".png", alt: "Pagamento confirmado para Workana"});
				$("span.confirmModo").text("Aumento de +/- 15%");
				$("span[data-modo='tt']").text("Workana");
				$("span[data-modo='descvalor']").text("Aumento no valor do serviço de +/- 15%.");
			}else if(modo === 'bancodobrasil'){
				$("li.confirmModo").css({"display":"block"});
				$("img.confirmModo").attr({src: "images/modal/"+ modo +".png", alt: "Pagamento confirmado para Banco do Brasil"});
				$("span.confirmModo").text("desconto -10%");
				$("span[data-modo='tt']").text("Banco do Brasil");
				$("span[data-modo='descvalor']").text("10% com pagamento por depósito bancário.");
			}else{
				$("li.confirmModo").css({"display":"none"});
				$("img.confirmModo").attr({src: "images/modal/"+ modo +".png", alt: "Pagamento confirmado para PagSeguro"});
				$("span.confirmModo").text("desconto -5,7% (boleto)");
				$("span[data-modo='tt']").text("Pagseguro");
				$("span[data-modo='descvalor']").text("5,7% com pagamento pelo boleto.");
			}
			done_bar.animate({
				width: "28%"
			}, 400, function() {
				current_bar.animate({width: "67%"}, 500);
			});
		}else if(newIndex === 3){
			done_bar.animate({
				width: "67%"
			}, 400, function() {
				current_bar.animate({width: "100%"}, 500);
			});
		}
		
		if(currentIndex === 0){
			form.validate().settings.ignore = ":disabled,:hidden";
			return form.valid();
		}else{
			form.validate().settings.ignore = ":disabled";
			return form.valid();
		}
	},
	onFinishing: function (event, currentIndex)
	{
		done_bar.animate({
			width: "100%"
		}, 500, function() {
    		current_bar.animate({width: "100%"}, 500);
    	});
		form.validate().settings.ignore = ":disabled";
		return form.valid();
	},
	onFinished: function (event, currentIndex)
	{

	}
});
// pegando valores de botões

$(function(){
	$('.btnPagto').click(function() {
		novoValor = $(this).val();
		$ (".wizard").steps('reset'),
		$('#etapa-pagamento')[0].reset();
		current_bar.css({"width":"0"});
		done_bar.css({"width":"0"});
		$("#price").val(novoValor);
	})
})