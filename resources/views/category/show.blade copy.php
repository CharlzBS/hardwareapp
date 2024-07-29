
@extends('layouts.admin')

@section('content')

<h1 class="mt-4">Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ url('admin/category') }}">Category</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>

<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Show Category Details
                <a href="{{ url('admin/category') }}" class="btn btn-danger float-end">BACK</a>
            </div>
            <div class="card-body">
               
                  <div class="form-group mb-3">
                    <label for="category_code"><b>Code</b></label>
                    <p>{{ $category->category_code }}</p>
                  </div>

                    <div class="form-group mb-3">
                      <label for="category_name"><b>Category Name</b></label>
                      <p>{{ $category->category_name }}</p>
                    </div>
                    
                    <div class="form-group mb-3">
                      <label for="category_description"><b>Category Description</b></label>
                      <p>{{ $category->category_description }}</p>
                    </div>

                    <div class="form-group mb-3">
                      <label for="status"><b>Category Status</b></label> <br />
                      <p>{{ $category->status == 1 ? 'Visible':'' }} </p>
                    </div>

            </div>
        </div>
    </div>
</div>


@endsection 
