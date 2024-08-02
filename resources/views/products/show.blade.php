
@extends('layouts.admin')

@section('content')

<br />
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Product Details:</h5>
            <h5>
              <a href="{{ route('product.show', $product->id) }}"><i class="fas fa-arrow-left"></i></a>
              &nbsp;&nbsp;&nbsp;<a href="{{ route('product.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
              </h5>
          </div>

          <div class="invoice p-3 mb-3">
            <div class="row">
              <div class="col-6">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>Product Code:</th>
                      <td>{{ $product->product_code }}</td>
                    </tr>
                    <tr>
                      <th>Product Name:</th>
                      <td>{{ $product->product_name }}</td>
                    </tr>
                    <tr>
                      <th>Barcode Symbology:</th>
                      <td>{{ $product->product_barcode_symbology }}</td>
                    </tr>
                   
                    <tr>
                      <th>Cost:</th>
                      <td>{{ $product->product_cost }}</td>
                    </tr>
                    <tr>
                      <th>Price:</th>
                      <td>{{ $product->product_price }}</td>
                    </tr>
                    <tr>
                      <th>Quantity:</th>
                      <td>{{ $product->product_quantity .' '.$product->product_unit }}</td>
                    </tr>
                    <tr>
                      <th>Stock Worth:</th>
                      <td>{{ $product->product_quantity * $product->product_price }}</td>
                    </tr>
                    <tr>
                      <th>Stock Alert:</th>
                      <td>{{ $product->product_stock_alert }}</td>
                    </tr>
                    <tr>
                      <th>Tax(%):</th>
                      <td>{{ $product->product_order_tax }}</td>
                    </tr>
                    <tr>
                      <th>Tax Type:</th>
                      <td>{{ $product->product_tax_type }}</td>
                    </tr>
                    <tr>
                      <th>Note:</th>
                      <td>{{ $product->product_note }}</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection 
