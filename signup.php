<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="includes/index.css">
	<title>Coffee</title>
</head>
<div class="container-signup">
	<form class="signup-form card bg-light">
		<div class="card-body">
			<h3 class="card-title text-center">Đăng Ký</h3>
		</div>
		<div class="form-label-group">
			<input type="text" id="signup-username" name="username" class="form-control" placeholder="Tài khoản" required autofocus>
		</div>
		<div class="form-label-group">
			<input type="password" id="signup-password" name="password" class="form-control" placeholder="Mật khẩu" required>
		</div>
		<div class="form-label-group">
			<input type="text" id="signup-email" name="email" class="form-control" placeholder="Email" required autofocus>
		</div>
		<div class="form-label-group">
			<input type="text" id="signup-phone" name="phone" class="form-control" placeholder="Số điện thoại" required autofocus>
		</div>
		<button class="btn btn-info my-3" id="signup" type="submit">Đăng Ký</button>
		<a href="../index.php" class="text-decoration-none">Bạn đã có tài khoản ?</a>
		<div class="error"></div>
	</form>
</div>
<script src="js/signup.js"></script>