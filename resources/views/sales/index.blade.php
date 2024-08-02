
@extends('layouts.admin')

@section('title', 'Sales page')

@section('content')

 <div class="content-header">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Sales</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('sales') }}">Sales</a></li>
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
                            <a href="{{ url('/sales/create') }}" class="btn btn-success float-end">Add New Sale</a>
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
                                        <th>Customer Name</th>
                                        <th>Tax(%)</th>
                                        <th>Tax Amount</th>
                                        <th>Discount(%)</th>
                                        <th>Discount Amount</th>
                                        <th>Shipping cost</th>
                                        <th>Total Amount</th>
                                        <th>Paid Amount</th>
                                        <th>Due Amount</th>
                                        <th>Status</th>
                                        <th>Payment status</th>
                                        <th>Payment method</th>
                                        {{-- <th>Note</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                    <tr>
                                        <td>{{ $sale->id }}</td>
                                        <td>{{ $sale->customer_name }}</td>
                                        <td>{{ $sale->tax_percentage }}</td>
                                        <td>{{ $sale->tax_amount }}</td>
                                        <td>{{ $sale->discount_percentage }}</td>
                                        <td>{{ $sale->discount_amount }}</td>
                                        <td>{{ $sale->shipping_amount }}</td>
                                        <td>{{ $sale->total_amount }}</td>
                                        <td>{{ $sale->paid_amount }}</td>
                                        <td>{{ $sale->due_amount }}</td>
                                        <td>{{ $sale->status }}</td>
                                        <td>{{ $sale->payment_status }}</td>
                                        <td>{{ $sale->payment_method }}</td>
                                        {{-- <td>{{ $sale->note }}</td> --}}
                                        <td>
                                            <center>
                                               <a href="{{ route('sales.edit', $sale->id) }}"  class="btn btn-success"><i class="fas fa-edit"></i></a>
                                               <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>                                            
                                                <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" class="d-inline">
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
                            {{ $sales->links()}}
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
