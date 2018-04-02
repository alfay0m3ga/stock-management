@extends ('layouts.master')

@section ('content')


<form method="POST" action="/api/products/{{ $product->id }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label for="name">Product Name</label>
		<input type="text" class="form-control" name="name" placeholder="" value="{{ $product->name }}" required>
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<textarea class="form-control" name="description" rows="3" required>{{ $product->description }}</textarea>
	</div>
	<div class="form-group">
		<label for="price">Price</label>
		<input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="" required>
	</div>
		<button type="submit" class="btn btn-primary">Edit</button>
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