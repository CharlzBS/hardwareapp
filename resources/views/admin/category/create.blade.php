
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
                Add New Category
                <a href="{{ url('admin/category') }}" class="btn btn-danger float-end">BACK</a>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST">
                  @csrf

                  <div class="form-group mb-3">
                    <label for="category_code">Code</label>
                    <input type="text" name="category_code" class="form-control" id="category_code">
                    @error('category_code')  <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                    <div class="form-group mb-3">
                      <label for="category_name">Name</label>
                      <input type="text" name="category_name" class="form-control" id="category_name">
                      @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                      <label for="category_description">Description</label>
                      <input type="text" name="category_description" class="form-control" id="category_description">
                      @error('category_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                      <label for="status">Status</label> <br />
                      <input type="checkbox" name="status" style="width:30px;height:30px;" checked id="status" />Checked=visible,unchecked=Hidden
                      @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>


@endsection 
