/**
 * 
 * Objeto Literal Index
 * @author Edy Segura, edy@segura.eti.br
 * 
 */

var Index = {
	
	init: function() {
		Index.setInputMask();
		Index.setForm();
	},

	
	setInputMask: function() {
		var aInputTelefone = document.getElementById('telefone');
		MaskInput(aInputTelefone, "(99)9999-9999");
	},
	
	
	setForm: function() {
		var form = document.forms['pesquisa'];

		form.onsubmit = function() {
			var result = false;
			var reEmail = /^[a-zA-Z0-9_\.-]{2,}@([A-Za-z0-9_-]{2,}\.)+[A-Za-z]{2,4}$/;
			
			if(reEmail.test(form.email.value)) {
				result = true;
			}
			else {
				alert("Por favor informe um e-mail válido.");
				form.email.focus();
			}
			
			return result;
		};
		
	},//fim setForm
	
};

//inicializacao
window.onload = Index.init;