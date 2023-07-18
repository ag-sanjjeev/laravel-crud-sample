@extends('layouts.main')

@php

	$date = date('Y-m-d');

@endphp

@section('content')

    <div class="container-fluid">
    	
    	<div class="row justify-content-center">

    		<div class="col-12 d-flex justify-content-between my-3">
    			<h3>Crud Operation</h3>
    			<a href="{{ route('crud') }}" class="btn btn-primary">Go Back</a>
    		</div>

    		<form action="{{ route('crud.store') }}" method="post" enctype="multipart/form-data" class="col-12 row">
    			@csrf

    			<div class="col-12 my-3">
    				<label for="personName" class="form-label">Name</label>
    				<input type="text" name="personName" id="personName" class="form-control" required autofocus />
    			</div>

    			<div class="col-12 my-3">
    				<label for="dob" class="form-label">DOB</label>
    				<input type="date" name="dob" id="dob" class="form-control" value="{{ $date }}" required />
    			</div>

    			<div class="col-12 my-3">
    				<label for="image" class="form-label">Image</label>
    				<input type="file" name="image" id="image" class="form-control" required />
    			</div>

    			<div class="col-12 my-3 text-center">
    				<button type="submit" class="btn btn-success">Create</button>
    			</div>
    		</form>

    		<hr />

    	</div>

    </div>

@endsection