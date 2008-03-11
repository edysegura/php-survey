/**
 * 
 * Objeto Literal Index
 * @author Edy Segura, edy@segura.eti.br
 * 
 */

var Index = {
	
	init: function() {
		Index.setInputMask();
	},

	setInputMask: function() {
		var aInputTelefone = document.getElementById('telefone');
		
		MaskInput(aInputTelefone, "(99)9999-9999");
	}
	
};

//inicializacao
window.onload = Index.init;