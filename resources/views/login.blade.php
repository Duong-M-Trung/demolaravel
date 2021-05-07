<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	@if(isset($error))
		<p style="color: red;">
			{{$error}}
		</p>
	@endif
	<div class="container" style="width: 40%; border-radius: 10px; box-shadow: 1px 3px 5px gray; padding: 10px; margin-top: 30px;">
		<form method="POST" action="/tasklaravel/public/demo/login">
			<h2>Login</h2>
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="text" required="true" class="form-control" name='txtemail' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="@if(isset($email)) {{$email}} @endif">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" required="true" class="form-control" name='txtpassword' id="exampleInputPassword1" placeholder="Password" value="@if(isset($pass)) {{$pass}} @endif">
		  </div>
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
		<div class="row" style="justify-content: center;">
			<a href="../public/demo/formsignup" class="nav-item nav-link" class="btn btn-primary">Đăng ký</a>
		</div>
	</div> 


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>