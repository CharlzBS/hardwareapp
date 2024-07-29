
@extends('layouts.admin')

@section('title', 'edit categories page')

@section('content')

 <div class="content-header">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Edit Category</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('category') }}">Product categories</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">BACK</a>
                        </div>

                        <div class="card-body">

                            <div class="mb-4">
                                @session('status')
                                    <div class="alert alert-success"> {{ session('status') }}</div>
                                @endsession
                            </div>

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
        </div>
    </section>
@endsection 