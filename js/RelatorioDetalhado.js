/**
 * 
 * Objeto Literal Index
 * @author Edy Segura, edy@segura.eti.br
 * 
 */

var RelatorioDetalhado = {
	
	init: function() {
		RelatorioDetalhado.setCombos();
	},

	
	setCombos: function() {
		var form   = document.getElementById("filter");
		var combos = form.getElementsByTagName("select");
		
		for(var i=0; i<combos.length; i++) {
			combos[i].onchange = function() {
				RelatorioDetalhado.setUniqueCombo(this);
			}
		}
	},
	
	setUniqueCombo: function(combo) {
		var comboValue = combo.value;
		var form       = document.getElementById("filter");
		var combos     = form.getElementsByTagName("select");
		
		
		for(var i=0; i<combos.length; i++) {
			combos[i].options[0].selected = true;
		}
		
		for(var i=0; i<combo.options.length; i++) {
			if(comboValue == combo.options[i].value) {
				combo.options[i].selected = true;
				break;
			}
		}
	}
	
};

//inicializacao
window.onload = RelatorioDetalhado.init;