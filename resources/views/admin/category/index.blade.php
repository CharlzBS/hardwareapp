
@extends('layouts.admin')

@section('content')

<h1 class="mt-4">Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ url('admin/category') }}">Category</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>

<div class="mb-4">
    @session('status')
        <div class="alert alert-success"> {{ session('status') }}</div>
    @endsession
</div>

<div class="card mb-4">    
    <div class="card-header"><a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Add Category</a></div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_code }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->category_description }}</td>
                    <td>{{ $category->status == 1 ? 'Visible':'Hidden' }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">show</a>
                       
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links()}}
    </div>
</div>


@endsection 
