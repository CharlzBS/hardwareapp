
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
              <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('product') }}" class="btn btn-danger float-end">BACK</a>
                        </div>

                        <div class="card-body">

                            <div class="mb-4">
                                @session('status')
                                    <div class="alert alert-success"> {{ session('status') }}</div>
                                @endsession
                            </div>

                            
                              <form action="{{ route('product.update', $product->id) }}" method="POST">
                                @csrf
                              @method('PUT')
              
                                <div class="row">
                                  <div class="col-4">
                                    <div class="form-group mb-3">
                                      <label for="product_name">Product Name</label>
                                      <input type="text" name="product_name" class="form-control" id="product_name" value="{{  $product->product_name }}">
                                      @error('product_name')  <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group mb-3">
                                      <label for="product_code">Product Code</label>
                                      <input type="text" name="product_code" class="form-control" id="product_code" value="{{  $product->product_code }}">
                                      @error('product_code') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group mb-3">
                                      <label for="category_id">Product Category</label>
                                      <input type="text" name="category_id" class="form-control" id="category_id" value="{{  $product->category_id }}">
                                      @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                </div>
  
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group mb-3">
                                      <label for="product_barcode_symbology">Barcode Symbology</label>
                                      <input type="text" name="product_barcode_symbology" class="form-control" id="product_barcode_symbology" value="{{  $product->product_barcode_symbology }}">
                                      @error('product_barcode_symbology') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group mb-3">
                                      <label for="product_quantity">Quantity</label>
                                      <input type="text" name="product_quantity" class="form-control" id="product_quantity" value="{{  $product->product_quantity }}">
                                      @error('product_quantity') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                </div>
  
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group mb-3">
                                      <label for="product_cost">Product cost</label>
                                      <input type="text" name="product_cost" class="form-control" id="product_cost" value="{{  $product->product_cost }}">
                                      @error('product_cost') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group mb-3">
                                      <label for="product_price">Product Price</label>
                                      <input type="text" name="product_price" class="form-control" id="product_price" value="{{  $product->product_price }}">
                                      @error('product_price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                </div>
  
                                <div class="row">
                                    <div class="col-6">
                                      <div class="form-group mb-3">
                                        <label for="product_unit">product_unit</label>
                                        <input type="text" name="product_unit" class="form-control" id="product_unit" value="{{  $product->product_unit }}">
                                        @error('product_unit') <span class="text-danger">{{ $message }}</span> @enderror
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group mb-3">
                                        <label for="product_stock_alert">product_stock_alert</label>
                                        <input type="text" name="product_stock_alert" class="form-control" id="product_stock_alert" value="{{  $product->product_stock_alert }}">
                                        @error('product_stock_alert') <span class="text-danger">{{ $message }}</span> @enderror
                                      </div>
                                    </div>
                                </div>
  
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group mb-3">
                                      <label for="product_tax_type">product_tax_type</label>
                                      <input type="text" name="product_tax_type" class="form-control" id="product_tax_type" value="{{  $product->product_tax_type }}">
                                      @error('product_tax_type') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group mb-3">
                                      <label for="product_note">product_note</label>
                                      <input type="text" name="product_note" class="form-control" id="product_note" value="{{  $product->product_note }}">
                                      @error('product_note') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                  </div>
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