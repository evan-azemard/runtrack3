$("#button").click(function(){
	   $.ajax({
		   type: "POST", url: "users.php", dataType: "text",
		   success:function(data) {
		   	$('table').append("<td>"+data+"</td>");
		   }
	   });
});


