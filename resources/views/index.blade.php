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

				<form class="form-vertical" role="form" method="post" action="/post">
					@csrf
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Title Post</label>
						<input type="text" name="title" class="form-control" placeholder="Title">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Content Post</label>
						<textarea rows="5" name="content" class="form-control" placeholder="Content"></textarea>
					</fieldset>
					<fieldset class="form-group">
						<button type="submit" class="btn btn-info">Submit Post</button>
					</fieldset>
				</form>

				<table class = "table table-bordered">
					<caption>Show All Post</caption>
					<thead>
						<tr>
							<th>Title</th>
							<th>Content</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					@foreach ($posts as $post)
					<tbody>
						<tr>
							<td>{{$post->title}}</td>
							<td>{{$post->content}}</td>
							<form action="{{route('edit.post',$post->id)}}" method="get">
								<td>
									<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success btn-xs"><span class="fa fa-pencil fa-fw"></span></button></p>
								</td>
							</form>
							<form action="{{route('destroy.post',$post->id)}}" method="post">
								@csrf
								@method('DELETE')
								<td>
									<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs"><span class="fa fa-fw fa-trash"></span></button></p>
								</td>
							</form>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</body>
</html>