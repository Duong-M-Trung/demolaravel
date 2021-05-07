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
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">To Do</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a href="../public/demo/viewadd" class="nav-item nav-link" class="btn btn-primary">Thêm task</a>
	      <a href="../public/demo/listuser" class="nav-item nav-link" class="btn btn-primary">Danh sách user</a>
	      <a href="../demo/viewadd" class="nav-item nav-link" class="btn btn-primary">Danh sách task</a>
	      <a href="#" class="nav-item nav-link" class="btn btn-primary">{{$user->name}}</a>
	      <a href="../public/demo/logout" class="nav-item nav-link" class="btn btn-primary">Đăng xuất</a>
	    </div>
	  </div>
	</nav>
	<div class="list-group">
	  @foreach($list as $item)
	  	<a href="../public/demo/task/{{$item->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1">{{$item->todo}}</h5>
		      <small class="text-muted">Kết thúc: {{$item->finishday}}</small>
		    </div>
		    <a style="width: 100px;" class="btn btn-danger" href="../public/demo/delete/{{$item->id}}">Xoá</a>
	  	</a>
	  @endforeach
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>