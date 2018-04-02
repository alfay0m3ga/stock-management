@extends ('layouts.master')
	
@section ('content')
		<h1>Products</h1>
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Description</th>
		      <th scope="col">Price</th>
		      <th scope="col">Edit</th>
		      <th scope="col">Delete</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($products as $product)
		    <tr>
	        	<td>{{ $product->id }}</td>
	        	<td>{{ $product->name }}</td>
	        	<td>{{ $product->description }}</td>
	        	<td>{{ $product->price }}</td>
	        	<td><a href="/api/products/{{ $product->id }}" class="btn btn-primary">Edit</a></td>
	        	<td>
	        		<form method="POST" action="/api/products/{{ $product->id }}">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="delete">
		        		<button type="submit" class="btn btn-danger">Delete</button>
	        		</form>
	        	</td>
	        </tr>
	    	@endforeach
		  </tbody>
		</table>
	   

	{{ $products->links() }}

@endsection