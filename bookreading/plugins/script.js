$(document).ready(function() {
	$('#books').cycle({
		timeout: 2000,
		speed: 2000,
		pause: true,
                before: function() {
                $('#slider')
                .slider('value', $('#books li').index(this));
                }

		});
		
                $('<div id="books-controls"></div>').insertAfter('#books');
		$('<button>Pause</button>').click(function() {
		$('#books').cycle('pause');
		$.cookie('cyclePaused', 'y');
		return false;
		}).appendTo('#books-controls');
		$('<button>Resume</button>').click(function() {
		var $paused = $('ul:paused');
			if ($paused.length) {
			$paused.cycle('resume');
			$.cookie('cyclePaused', null);
			}
			else {
			$(this).effect('shake', {
			distance: 10,
			duration: 80
			});
			}
			return false;
			}).appendTo('#books-controls');


		$('#books').hover(function() {
		$('#books .title').animate({
		backgroundColor: '#eee',
		color: '#000'
		}, 1000);
		}, function() {
		$('#books .title').animate({
		backgroundColor: '#000',
		color: '#fff'
		}, 1000);
		});
		$('#books .title').resizable({
		handles: 's'
		});

	$('h3').click(function() {
		$(this).toggleClass('highlighted', 'slow', 'easeInExpo');
		});
	$('#books').draggable();
	$('#books img').draggable();
	$('#books-controls').draggable();
        
        $('#accordion_list').accordion({
            autoHeight: true,
            alwaysOpen: false,
            fillSpace: true, 
            animated: 'bounceslide' 
        });
       $('#_datepicker').datepicker();
       $('#books').resizable();
       
       $('#tabs-div').tabs({
           ajaxOptions: {
            error: function( xhr, status, index, anchor ) {
                    $( anchor.contents ).html(
                            "Couldn't load this tab. We'll try to fix this as soon as possible. ");
            }
    }
   });
   $(document).ready(function() {
    $('<div id="slider"></div>').slider({
    min: 0,
    max: $('#books li').length - 1,
    slide: function(event, ui) {
    $('#books').cycle(ui.value);
    }
    }).appendTo('#books-controls');
});
    $('button').button();
});
