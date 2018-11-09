(( function ( w, d) {
	'use strict';

	var $submit = document.querySelector("[data-js='submit']"); //
	var $input = document.querySelectorAll("[data-js='input']"); //
	var $tipo = document.querySelectorAll("[data-js='tipo']"); //
	var $periodo = document.querySelectorAll("[data-js='periodo']"); //
	var $confirmacao = document.querySelectorAll("[data-js='confirmacao']"); //
	var $check = document.querySelectorAll("[data-js='check']"); //
	var $radio = document.querySelectorAll("[data-js='radio']");
	var $comite = document.querySelectorAll("[data-js='existe']");

	var cont = 0;

	$submit.addEventListener( 'submit', function (s) {

		if (!$tipo[0].checked && !$tipo[1].checked) {
			s.preventDefault();
			alert("Informe Se O Tipo De Cadastro É Afiliação Ou Reafiliação!");
		}

		if ($periodo[0].checked === false && $periodo[1].checked === false) {
			s.preventDefault();
			alert("Informe A Peridiocidade Da Feira!");
		}

		if ($confirmacao[0].checked === false && $confirmacao[1].checked === false) {
			s.preventDefault();
			alert("Informe Se A Data Da Feira Já Está Confirmada!");
		}

		for (var i = 0; i <= ($check.length)-2; i++) {
			if ($check[i].checked) {
				cont += 1;
			}
		}

		if (cont == 0) {
			s.preventDefault();
			alert("Informe A Area De Pesquisa Da Feira");
		}

		if ($comite[0].checked === false && $comite[1].checked === false) {
			s.preventDefault();
			alert("Informe Se Existe Comite De Revisão Ciêntifica!");
		}							

		for (var i = 0; i <= $input.length; i++) {
			if (!$input[i].value) {
				s.preventDefault();
				alert("Informe " + $input[i].id);
				break;
			}

			if ($input[i].type === 'radio' && $input[i].checked && $input[i+1].type === 'text' && !$input[i+1].value) {
				s.preventDefault();
				alert("Informe " + $input[i+1].id);
			}

			if ($input[i].type === 'checkbox' && $input[i].checked && $input[i+1].type === 'number' && !$input[i+1].value && $input[i+2].type === 'number' && !$input[i+2].value) {
				s.preventDefault();
				alert("Informe " + $input[i+1].id + " Do Nível De Ensino " + $input[i].id);
				alert("Informe " + $input[i+2].id + " Do Nível De Ensino " + $input[i].id);
			}
		}


	},false);

})( window, document));