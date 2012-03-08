jQuery(document).ready(function($) {
    $('div.label').click(function() {
        var paraWidth = $('div.speech p').outerWidth();
        var $switcher = $(this).parent();
        var switcherWidth = $switcher.outerWidth();
     /*  $switcher.css({position: 'relative'})
                .animate({left: paraWidth - switcherWidth}, 'slow')
                .animate({height: '+=20px'}, 'slow')
                .animate({borderWidth: '5px'}, 'slow');
                
      $switcher
        .css({position: 'relative'})
        .fadeTo('fast', 0.2)
        .animate({left: paraWidth + switcherWidth}, 'slow')
        .animate({left: paraWidth - switcherWidth}, 'slow')
        .fadeTo('slow', 1.0)
        .slideUp('slow')
        .css({backgroundColor: '#f00'})
        .slideDown('slow');
             
     */
    
    $switcher
           .css({position: 'relative'})
           .fadeTo('fast', 0.5)
           .animate({
            left: paraWidth - switcherWidth
            }, {
            duration: 'slow',
            queue: false
            })
            .fadeTo('slow', 1.0)
            .slideUp('slow')
            .queue(function(next) {
            $switcher.css({backgroundColor: '#f00'});
            next();
            })
            .slideDown('slow');
   });


    
       var $speech = $('div.speech');
       var defaultSize = $speech.css('fontSize');
        $('#switcher button').click(function() {
         var num = parseFloat($speech.css('fontSize'));
         if(this.id == 'switcher-large') {
         num *= 1.4;
         } else if(this.id == 'switcher-small'){
             num /= 1.4;
         } else if(this.id == 'switcher-default') {
             num = parseFloat(defaultSize);
         }
         $speech.css('fontSize', num + 'px');
    });
    
    //$('p').eq(1).hide();
   // $('a.more').click(function() {
       // $('p').eq(1).show('slow');
       //$('p').eq(1).fadeIn('slow');
       //$('p').eq(1).slideDown('slow');
       // $(this).hide();
       // return false;
   // })
   
   var $firstPara = $('p').eq(1);
    $firstPara.hide();
    $('a.more').click(function() {
        /*if ($firstPara.is(':hidden')) {
            $firstPara.fadeIn('slow');
            $(this).text('read less');
        } else {
            $firstPara.fadeOut('slow');
            $(this).text('read more');
        }
            return false;*/
        $firstPara.animate({
            height: 'toggle',
            opacity: 'toggle' }, 'slow');
            var $link = $(this);
            if ($link.text() == 'read more') {
            $link.text('read less');
            } else {
            $link.text('read more');
            }
            return false;
            });
          var loop = function(){
			var featlay = 0;
			$('body').each(function(){
					$(this).delay(featlay).animate({opacity: 1,  leaveTransforms:true}, {'background-color': '#3A3AD7'},{duration:2000, queue:true});
					featlay += 6000;
					$(this).delay(featlay).animate({opacity: 0.4,  leaveTransforms:true}, {'background-color': '#FFFF00'}, {duration:2000, queue:true});
				});

			setTimeout(loop, 0);
		};

		loop();
    });
