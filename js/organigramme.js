$(document).ready(function(){
	$.ajax({
	url: '../php/organigramme.php',
	datatype: 'json',
	succes: function(json) {
		alert('Succes!');
	},
	error: function() {
        	alert('Erreur: Le fichier JSON est introuvable.');
        }
	});
	$('#reset').click(function(){
		$('#afficher').empty();
	});
});
