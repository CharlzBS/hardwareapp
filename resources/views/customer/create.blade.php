
@extends('layouts.admin')

@section('title', 'create categories page')

@section('content')

 <div class="content-header">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">customer</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('customer') }}">customers</a></li>
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
                            <a href="{{ url('customer') }}" class="btn btn-danger float-end">BACK</a>
                        </div>

                        <div class="card-body">

                            <div class="mb-4">
                                @session('status')
                                    <div class="alert alert-success"> {{ session('status') }}</div>
                                @endsession
                            </div>

                            <form action="{{ url('customer') }}" method="POST">
                              @csrf
            
                              <div class="row">
                                <div class="col-6">
                                  <div class="form-group mb-3">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{  old('first_name') }}">
                                    @error('first_name')  <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group mb-3">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{  old('last_name') }}">
                                    @error('last_name')  <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>                                
                              </div>

                              <div class="row">
                                <div class="col-6">
                                  <div class="form-group mb-3">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{  old('email') }}">
                                    @error('email')  <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{  old('phone') }}">
                                    @error('phone')  <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>                                
                              </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </section>
@endsection 