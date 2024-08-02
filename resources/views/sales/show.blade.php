
@extends('layouts.admin')

@section('content')

<br />
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Sales Details:</h5>
            <h5>
              <a href="{{ route('sales.show', $sale->id) }}"><i class="fas fa-arrow-left"></i></a>
              &nbsp;&nbsp;&nbsp;<a href="{{ route('sale.edit', $sale->id) }}"><i class="fas fa-edit"></i></a>
              </h5>
          </div>

          <div class="invoice p-3 mb-3">
            <div class="row">
              <div class="col-6">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>Sale Date:</th>
                      <td>{{ $sale->sale_date }}</td>
                    </tr>
                    <tr>
                      <th>Reference ID:</th>
                      <td>{{ $sale->reference }}</td>
                    </tr>
                    <tr>
                      <th>Customer Name:</th>
                      <td>{{ $sale->customer_name }}</td>
                    </tr>
                   
                    <tr>
                      <th>Tax(%):</th>
                      <td>{{ $sale->tax_percentage }}</td>
                    </tr>
                    <tr>
                      <th>Tax Amount:</th>
                      <td>{{ $sale->tax_amount }}</td>
                    </tr>
                    <tr>
                      <th>Discount (%):</th>
                      <td>{{ $sale->discount_percentage }}</td>
                    </tr>
                    <tr>
                      <th>Discount Amount:</th>
                      <td>{{ $sale->discount_amount }}</td>
                    </tr>
                    <tr>
                      <th>Shipping Amount:</th>
                      <td>{{ $sale->shipping_amount }}</td>
                    </tr>
                    <tr>
                      <th>Total Amount:</th>
                      <td>{{ $sale->total_amount }}</td>
                    </tr>
                    <tr>
                      <th>Sales Status:</th>
                      <td>{{ $sale->status }}</td>
                    </tr>
                    <tr>
                      <th>Payment Status:</th>
                      <td>{{ $sale->payment_status }}</td>
                    </tr>
                    <tr>
                      <th>Payment Method:</th>
                      <td>{{ $sale->payment_method }}</td>
                    </tr>
                    <tr>
                      <th>Note:</th>
                      <td>{{ $sale->note }}</td>
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
