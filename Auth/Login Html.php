<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="form.css" rel="stylesheet"/>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div class="login-form">
				<form id="loginform" method="POST" action="login.php">
					<div id ="error" class="alert alert-danger d-none"></div>
					<h2 class="text-center">Log in</h2>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email" required>
						<i class="fa fa-envelope"></i>
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
						<i class="fa fa-lock"></i>
					</div>
					<div class="form-group">
						<button type="submit">Log in</button>
					</div>
					<div class="clearfix">
						<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
						<a href="#" class="float-right">Forgot Password?</a>
					</div>        
				</form>
			<p class="text-center"><a href="#">Create an Account</a></p>
		</div>
	<script>
		$(function() {
			$('#loginform').on('submit', function(e){
				e.preventDefault();
				
				let $error = $('#error');
				
				$.ajax({
					type: 'POST',
					url: 'login.php',
					data: $(this).serialize()
				}).then(function(res){
					let data = JSON.parse(res);
					
					if(data.error){
						$error.removeClass('d-none').html(data.error);
						return;
					}
					
					localStorage.setItem('token', data.token);
					location.href = 'profile.php';
				}).fail(function(res){
					$error.removeClass('d-none').html('Error attempting to sign in.');
					
				})
			});
		});
	</script>
	
</body>
</html>
