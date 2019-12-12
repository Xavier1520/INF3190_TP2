$(document).ready(function(){
	$('#organigramme').click(function(){
		$('#afficher').jstree({
			'core':{
				'data':{
					'url': function(node){
					return node.id === '#'?
					'../php/organigramme.php':
					'../php/organigramme.php';
					},
					'data': function(node){
					return{ 'id': node.id}
					},
					'dataType': 'json'
				}
			}
		});
	});
	$('#resetorg').click(function(){
		$('#afficher').empty();
	});
});
