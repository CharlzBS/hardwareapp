
@extends('layouts.admin')

@section('title', 'create categories page')


@push('csss')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@section('content')

<div class="content-header">
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
              <h1 class="m-0">Sale</h1>
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

  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Product Name</label>
              <select class="form-control select2 select2-danger search_product_name" id="search_product_name" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                  @endforeach
              </select>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
              <div class="card-body">

                <div class="card-header">
                    <a href="{{ url('sales') }}" class="btn btn-danger float-end">BACK</a>
                </div>

                  <div class="card-body">
                    <div class="mb-4">
                      @session('status')
                            <div class="alert alert-success"> {{ session('status') }}</div>
                        @endsession
                    </div>

                    <form action="{{ url('sales') }}" method="POST">
                      @csrf

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Reference No:</label>
                            <input type="text" name="reference" class="form-control" id="reference" value="{{  $salesRefNumber }}" readonly>
                            @error('reference')  <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                      </div>

                      <div class="col-sm-4">
                          <div class="form-group">
                            <label>Customer Name</label>
                            <select class="form-control select2 select2-danger" name="customer_id" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                @foreach ($customers as $customer)
                                  <option value="{{ $customer->id }}">{{ $customer->first_name .' '.$customer->last_name }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Sales Date</label>
                            <input type="date" name="sale_date" class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12" >
                          <table border="1" id="table_items" width="100%" class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Stock</th>
                                    <th>Quantity</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_items_body">
                            </tbody>
                        </table>
                        </div>
                      </div>
                  
                      <div class="row">
                         
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Tax %:</label>
                            <input type="text" name="tax_percentage" class="form-control" id="tax_percentage" value="{{  old('tax_percentage') }}">
                            @error('tax_percentage')  <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Tax Amount:</label>
                            <input type="text" name="tax_amount" class="form-control" id="tax_amount" value="{{  old('tax_amount') }}">
                            @error('tax_amount')  <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Discount ercentage:</label>
                              <input type="text" name="discount_percentage" class="form-control" id="discount_percentage" value="{{  old('discount_percentage') }}">
                              @error('discount_percentage')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Discount amount:</label>
                              <input type="text" name="discount_amount" class="form-control" id="discount_amount" value="{{  old('discount_amount') }}">
                              @error('discount_amount')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Shipping Amount:</label>
                              <input type="text" name="shipping_amount" class="form-control" id="shipping_amount" value="{{  old('shipping_amount') }}">
                              @error('shipping_amount')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Total Amount:</label>
                              <input type="text" name="total_amount" class="form-control" id="total_amount" value="{{  old('total_amount') }}">
                              @error('total_amount')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Discount amount:</label>
                              <input type="text" name="paid_amount" class="form-control" id="paid_amount" value="{{  old('paid_amount') }}">
                              @error('paid_amount')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Due amount:</label>
                              <input type="text" name="due_amount" class="form-control" id="due_amount" value="{{  old('due_amount') }}">
                              @error('due_amount')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Status:</label>
                              <input type="text" name="status" class="form-control" id="status" value="{{  old('status') }}">
                              @error('status')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>payment_status:</label>
                              <input type="text" name="payment_status" class="form-control" id="payment_status" value="{{  old('payment_status') }}">
                              @error('payment_status')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>payment method:</label>
                              <input type="text" name="payment_method" class="form-control" id="payment_method" value="{{  old('payment_method') }}">
                              @error('payment_method')  <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-6">
                              <div class="form-group">
                                <label>Note</label>
                                <textarea class="form-control" name="note" id="note"></textarea>
                              </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>                   
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </section>
@endsection 

@push('scripts')
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endpush

<script>
  document.addEventListener('DOMContentLoaded', () => {
      const domSearchProductName = document.getElementById('search_product_name');
      const table_items = document.getElementById('table_items_body');

      domSearchProductName.addEventListener('change', function () {
          const itemId = this.value;
          if (itemId) {
              axios.get(`/getProductDetails?product_id=${itemId}`)
                  .then(response => {
                      const items = response.data;
                      let rows = '';
                      items.forEach(item => {
                          rows += `<tr><td>${item.product_name}</td>`+
                              `<td>${item.product_price}</td>`+
                              `<td><input value='${item.product_quantity}' class="form-control" readonly /></td>`+
                              `<td><input  class="form-control" /></td>`+
                              `<td><input  class="form-control" /></td>`+
                              `<td><input  class="form-control" /></td>`+
                              `<td>${item.product_quantity}</td>`+
                              `<td><a href="{{ route('product.show', $product->id) }}"><i class="fas fa-trash" style="color:red;"></i></a></td>`+
                            `</tr>`;
                      });
                      table_items.innerHTML = rows;
                  })
                  .catch(error => {
                      alert('Error fetching items ' .error);
                  });
          } else {
            table_items.innerHTML = '';
          }
      });
  });
</script>
