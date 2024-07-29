
@extends('layouts.admin')

@section('content')

<br />
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Category:</h5>
             Details
          </div>

          <div class="invoice p-3 mb-3">
            <div class="row">
              <div class="col-6">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Category Code:</th>
                      <td>{{ $category->category_code }}</td>
                    </tr>
                    <tr>
                      <th>Category Name:</th>
                      <td>{{ $category->category_name }}</td>
                    </tr>
                    <tr>
                      <th>Category Description:</th>
                      <td>{{ $category->category_description }}</td>
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
