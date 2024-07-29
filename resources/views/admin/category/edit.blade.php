
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
                Edit Category
                <a href="{{ url('admin/category') }}" class="btn btn-danger float-end">BACK</a>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="form-group mb-3">
                    <label for="category_code">Code</label>
                    <input type="text" name="category_code" class="form-control" id="category_code" value="{{ $category->category_code }}">
                    @error('category_code')  <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                    <div class="form-group mb-3">
                      <label for="category_name">Name</label>
                      <input type="text" name="category_name" class="form-control" id="category_name" value="{{ $category->category_name }}">
                      @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                      <label for="category_description">Description</label>
                      <input type="text" name="category_description" class="form-control" id="category_description" value="{{ $category->category_description }}">
                      @error('category_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                      <label for="status">Status</label> <br />
                      <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked':'' }}  style="width:30px;height:30px;" checked id="status" />Checked=visible,unchecked=Hidden
                      @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
</div>


@endsection 
