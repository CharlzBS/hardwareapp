
@extends('layouts.admin')

@section('title', 'categories page')

@section('content')

 <div class="content-header">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Category</h1>
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
              <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <a href="{{ url('/product/create') }}" class="btn btn-success float-end">Add New Product</a>
                        </div>

                        <div class="card-body">

                            <div class="mb-4">
                                @session('status')
                                    <div class="alert alert-success"> {{ session('status') }}</div>
                                @endsession
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Id</th>
                                        <th>Product Name</th>
                                        <th>Product Code</th>
                                        <th>Barcode Symbology</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Price</th>
                                        <th>Unit Used</th>
                                        <th>Stock Alert</th>
                                        <th>Tax Type</th>
                                        <th>Product Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_code }}</td>
                                        <td>{{ $product->product_barcode_symbology }}</td>
                                        <td>{{ $product->product_quantity }}</td>
                                        <td>{{ $product->product_cost }}</td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>{{ $product->product_unit }}</td>
                                        <td>{{ $product->product_stock_alert }}</td>
                                        <td>{{ $product->product_tax_type }}</td>
                                        <td>{{ $product->product_note }}</td>
                                        <td>
                                            <center>
                                               <a href="{{ route('product.edit', $product->id) }}"  class="btn btn-success"><i class="fas fa-edit"></i></a>
                                               <a href="{{ route('product.show', $product->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>                                            
                                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </center>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links()}}
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </section>
@endsection 


@push('scripts')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush
