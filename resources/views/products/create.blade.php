@extends ('layouts.master')

@section ('content')

<form method="POST" action="/api/products">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Product Name</label>
		<input type="text" class="form-control" name="name" placeholder="" required>
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<textarea class="form-control" name="description" rows="3" required></textarea>
	</div>
	<div class="form-group">
		<label for="price">Price</label>
		<input type="number" class="form-control" name="price" placeholder="" required>
	</div>
		<button type="submit" class="btn btn-primary">Submit</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection