<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FlexErp Chat Room</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row" id="app">
			<div class="col-md-6 col-md-offset-3">
				<div class="list-group">
				  <a href="#" class="list-group-item active">Chat Room</a>
				  <a href="#" class="list-group-item">Ajit Das</a>
				  <a href="#" class="list-group-item">Abhi Das</a>
					<input type="text" class="form-control" placeholder="Type your text">
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('js/app.js') }}"></script>
</body>
</html>