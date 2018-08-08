<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel Repository Pattern</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
   </head>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="padding-top: 30px;">
				<h4 class="page_header">Laravel Repository Pattern</h4>
				@foreach ($errors->all() as $error)
					<p class="alert alert-danger">{{ $error }}</p>
				@endforeach

				@if(session('status'))
					<div class="alert alert-success alert-dismissable">
						<a href="#" class="close" data-dismiss= "alert" aria-label="close">x</a>
						{{session('status')}}
					</div>
				@endif

				<form class="form-vertical" role="form" method="post" action="">
					@csrf
					@method('PUT')
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Title Post</label>
						<input type="text" name="title" class="form-control" placeholder="Title" value="{{$post->title}}">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Content Post</label>
						<textarea rows="5" name="content" class="form-control" placeholder="Content">{{$post->content}}</textarea>
					</fieldset>
					<fieldset class="form-group">
						<button type="submit" class="btn btn-info">Submit Post</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>