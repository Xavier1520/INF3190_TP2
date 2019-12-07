$(document).ready(function(){
	$(#organigramme).click(function(){
		$(#afficher).jstree({
			'core':{
				'data':{
					'url': function(node) {
					return node.id === ”#”?
					'../js/organigramme.php':
					'../js/organigramme.php';
					},
					'data': function(node) {
						return { 'id': node.id };
					},
					'dataType': 'json';
				}
			}
		});
	});
	$(#resetorg).click(function(){
		$(#afficher).empty();
	});
});
