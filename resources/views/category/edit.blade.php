 @extends('template')
 @section('content')
 <div class="container" style="margin-top: 100px">
 	<div class="row">
 	<div class="col-lg-8 col-md-10 mx-auto">
 		<h2>Category Create Form</h2>
 		<form method="post" action="{{route('category.update',$post->id)}}" enctype="multipart/form-data">
 			@csrf
 			@method('PUT')
 			<div class="form-group">
 				<label>Category</label>
 				<input type="text" name="name" class="form-control" value="{{$post->name}}">
 			</div>
 			<div class="form-group">
 				<input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
 			</div>
 		</form>
 		
 	</div>

 </div></div>

 @endsection
