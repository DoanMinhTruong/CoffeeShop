$(document).ready(function(){
	$("#signup").click(function(e){
		e.preventDefault();
		var user = $("#signup-username").val();
		var pass = $("#signup-password").val();
		var email = $("#signup-email").val();
		var phone = $("#signup-phone").val();
		if(user == '' || pass == '' || email=='' || phone=='')
		{
			$(".error").html("<div class='alert alert-danger'>Vui lòng điền đầy đủ thông tin !</div>");
		}else{
			$.ajax({
				url : 'backend/signup.php',
				type: 'post',
				dataType: 'text',
				data :{
					user  : user,
					pass  : pass,
					phone : phone,
					email: email,
				} ,
				success : function(res){
					if(res==1){
						window.location.href = "../index.php";
						alert("Đăng ký thành công");
					}else{
						$(".error").html("<div class='alert alert-danger'>Lỗi đăng ký !</div>");
					}
				}
			});
		}
	});
})