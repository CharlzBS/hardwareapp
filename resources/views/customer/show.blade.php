
@extends('layouts.admin')

@section('content')

<br />
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> customer Details:</h5>
            <h5>
              <a href="{{ route('customer.show', $customer->id) }}"><i class="fas fa-arrow-left"></i></a>
              &nbsp;&nbsp;&nbsp;<a href="{{ route('customer.edit', $customer->id) }}"><i class="fas fa-edit"></i></a>
              </h5>
          </div>

          <div class="invoice p-3 mb-3">
            <div class="row">
              <div class="col-6">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>First Name:</th>
                      <td>{{ $customer->first_name }}</td>
                    </tr>
                    <tr>
                      <th>Last Name:</th>
                      <td>{{ $customer->last_name }}</td>
                    </tr>
                    <tr>
                      <th>Email Address:</th>
                      <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                      <th>Phone:</th>
                      <td>{{ $customer->phone }}</td>
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
