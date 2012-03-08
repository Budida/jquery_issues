$(document).ready(function() {
	$('#products').hide();
	$('#products_link').click(function() {
	$('#products').show();
	$('#products tbody').html("");
	$.getJSON(
		"products.php",
		function(data) {
			$.each(data.products, function(i, product) {
				
				var tblRw = 
				 "<tr>"
				 +"<td>"+product.product_name+"</td>"
				 +"<td>"+product.product_price+"</td>"
				 +"</tr>";
				 $(tblRw).appendTo("#products tbody");
				
				});
			}).error(function() {
				$('#products').hide(),
				alert("Sorry no products found at the moment!");
				});
		return false;
		});
		
		$('table').resizable();
		$('table').draggable();
		$('button').button();
	});
