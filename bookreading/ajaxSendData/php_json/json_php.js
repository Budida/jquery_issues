$(document).ready(function() {
	$('#members_link').click(function() {
		$('#members tbody').html("");
		$.getJSON(
			"json_php.php",
			function(data){
					$.each(data.members, function(i, member) {
					var tblRow = 
							"<tr>"
							+"<td>"+member.first_name+"</td>"
							+"<td>"+member.surname+"</td>"
							+"<td>"+member.email+"</td>"
							+"</tr>";
							$(tblRow).appendTo("#members tbody");		
		
		});
		}
		);
		return false;
		});
		
	}); 
