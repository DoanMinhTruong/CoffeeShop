$(document).ready(function(){
	$(".del-item").click(function(e){
		e.preventDefault();
		$.ajax({
			type : "POST",
			url : 'backend/xoamon.php',
			data : {
				id : $(this).parent().parent().parent().children(".item-id").text()
			},
			success: function(res){
				// alert(res);
				location.reload();
			}
		});
	});
});