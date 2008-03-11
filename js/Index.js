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
		var oForm = document.forms['pesquisa'];
		var oEmail = document.getElementById('email');		

		oForm.onsubmit = function() {
			var bResult = false;
			
			//bResult = Form.validate(oForm);
			
			if(oEmail.value && !Form.isMail(oEmail.value)) {
				alert("Informe um endereço de e-mail válido.");
				bResult = false;
			}
			
			return bResult;
		};
		
	},//fim setForm
	
};

//inicializacao
window.onload = Index.init;