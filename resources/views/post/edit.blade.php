@extends('template')
@section('content')
<div class="container m-5">
<div class="row">
	<div class="col-lg-8">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

			<form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
		
			@csrf
			@method('PUT')
		<div class="form-group">
			<label>Title:</label>
			<input type="text" name="title" class="form-control" value="{{$post->title}}" >
			
		</div>
		<div class="form-group">
			<label>Content:</label>
			<textarea class="form-control" name="content" class="form-control" value>
				{{$post->body}}</textarea>

		</div>
		<div class="form-group">

			<label>photo:</label><span class="text-danger">[suppoted file types:jpeg,png]</span>
			<input type="file" name="photo" class="form-control">
			<img src="{{asset($post->image)}}" class="imd-fluid- w-25">
			<input type="hidden" name="oldphoto" value="{{$post->image}}">
		</div>
			<div>
				<div class="form-group">
					<label>Categories</label>
					<select name="category" class="form-control">
						<option value="">Choose Category</option>
						{--accept data and loop--}

						@foreach($categories as $row)
						<option value="{{$row->id}}"
							@if($row->id==$post->category_id){{'selected'}}>
							{{$row->name}}
						@endif 
						</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
			<input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
			</div>
		</div>
	</form>
	</div>
</div>
</div>

@endsection