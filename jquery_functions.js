$(document).ready(function(){
			$("#click").click(function(){
				$("p").slideToggle();
				$("[href='#']").css("background-color", "teal");
				$("[href='#']").css("text-decoration", "none");
				});
			});
