@extends('layouts.main')

@section('content')

    <div class="container-fluid">
    	
    	<div class="row justify-content-center">

    		<div class="col-12 d-flex justify-content-between my-3">
    			<h3>Crud Operation</h3>
    			<a href="{{ route('crud.create') }}" class="btn btn-primary">Create</a>
    		</div>

    		<div class="col-12 px-3">
	    		<table class="table table-responsive">
	    			
	    			<thead>
	    				<th>S.No</th>
	    				<th>Name</th>
	    				<th>DOB</th>
	    				<th>Age</th>
	    				<th>Image</th>
	    				<th>Action</th>
	    			</thead>

	    			<tbody>
	    				@foreach($data as $value)

	    					<tr>
	    						<td>{{ $loop->iteration }}</td>
	    						<td>{{ ucfirst($value['name']) }}</td>
	    						<td>{{ $value['dob'] }}</td>
	    						<td>{{ $value['age'] }}</td>
	    						<td>
	    							<img src="{{ Storage::url($value['image']); }}" />
	    						</td>
	    						<td>
	    							<a href="{{ route('crud.edit', $value['id']) }}" class="btn btn-warning">Edit</a>
	    							<form action="{{ route('crud.delete', $value['id']) }}" method="post" onsubmit="return confirm('Are you sure want to delete?');">
	    								@method('DELETE')
	    								@csrf

	    								<button type="submit" class="btn btn-danger">Delete</button>
	    							</form>
	    						</td>
	    					</tr>

	    				@endforeach
	    			</tbody>

	    		</table>
	    	</div>
	    	
    	</div>

    </div>

@endsection