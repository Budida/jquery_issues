$(document).ready(function() {
	$('#tabs_div').tabs(); 
	$('form').css({backgroundColor: '#EFE320'});
		//~ $('#_draggable').draggable({
			//~ helper: myHelper,
			//~ cursor: 'move',
			//~ containment: 'document',
			//~stop: handleDraggable
			//~ });	
		//~ function myHelper() {
			//~ return '<div id="helper_div">Am the One to drag not that one!</div>';
			//~ }
		//~ function handleDraggable(event, ui) {
			//~ alert("Oooh! You dropped me here..!");
			//~ }
		//~ $('#_droppable').droppable({
			//~ drop: handleDrop,
			//~ out: deactivateHandle,
			//~ accept: '#_draggable'
			//~ });	
		//~ function handleDrop(event, ui) {
			//~ $('#_droppable')
			//~ .css({backgroundColor: '#4D4D4D'}, {Color: '#FFFFFF'})
			//~ .html("Element dopped!");
			//~ }
		//~ function deactivateHandle(event, i) {
			//~ $('#_droppable')
			//~ .css({backgroundColor: '#F7F18C'})
			//~ .html("You would have dropped that here..");
			//~ }
		
	}); 
