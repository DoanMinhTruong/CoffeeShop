$(document).ready(function(){
	$(".login-form").submit(function(e){
		e.preventDefault();
		var user = $("#login-username").val();
		var pass = $("#login-password").val();
		if(user == '' || pass == '')
		{
			$(".error").html("<div class='alert alert-danger'>Vui lòng điền đầy đủ thông tin !</div>");
		}else{
			$.ajax({
				url : 'backend/login.php',
				type: 'post',
				dataType: 'text',
				data :{
					user  : user,
					pass  : pass,
				} ,
				success : function(res){
					if(res==1){
						location.reload();
					}else {
						$(".error").html("<div class='alert alert-danger'>Đăng nhập thất bại !</div>");
					}
				}
			});
		}
	});
})