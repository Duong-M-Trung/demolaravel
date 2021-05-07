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
	<div class="container" style="width: 50%; border: solid 1px black; margin-top: 20px; padding: 10px; border-radius: 5px;">
		<form method="post" action="/demolaravel/public/addusertask">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="idtask" value="{{ $id }}">
			  <div class="form-group">
			    <label for="exampleFormControlSelect2">Người làm</label>
			    <select class="form-control" name="user">
			    	@foreach($users as $items)
			    	<option value="{{$items->id}}">
			    		{{$items->name}}
			    	</option>
			    	@endforeach
			    </select>
			  </div>
			  <button type="submit" name="btnSubmit" class="btn btn-primary">Add</button>
		</form>
	</div>
	
	<div class="container" style="width: 50%; border: solid 1px black; margin-top: 20px; padding: 10px; border-radius: 5px;">
		<form method="post" action="../configtask">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			@foreach($task as $item)
			<input type="hidden" name="id" value="{{$item->id}}">
			
			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Việc cần làm</label>
			     <input type="text" required="true" class="form-control" name ="todo" value="{{$item->todo}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlSelect2">Ngày hoàn thành</label>
			    <input type="date" required="true" class="form-control" name="finishday"value="{{$item->finishday}}">
			  </div>
			@endforeach
			  <button type="submit" name="btnSubmit" class="btn btn-primary">Update</button>
		</form>
	</div>
	
	<div>
		<ul class="list-group">
		  <li class="list-group-item active" aria-current="true">Người thực hiện</li>
		  @foreach($taskdetail as $itemt)
		  <li class="list-group-item">{{$itemt->username}}</li>
		  @endforeach
		</ul>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>