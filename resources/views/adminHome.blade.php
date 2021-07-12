@extends('layouts.app')
   
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
                <div class="card-body">
                    <button> <a href="{{url('add')}}">Add Product</a></button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-4">
          <div class="card">
                <!-- <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div> -->
              <div class="card-body">
                    <button> <a href="{{url('add')}}">Add User</a></button>
              </div>
          </div>
     </div>
     <div class="col-md-4">
          <div class="card">
                <!-- <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div> -->
              <div class="card-body">
                    <button> <a href="{{url('add')}}">Add User</a></button>
              </div>
          </div>
     </div>
   </div>
</div>
@endsection
