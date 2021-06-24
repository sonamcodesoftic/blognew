
@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Stacked form</h2>
  <form action="newproduct" method="post"   enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>
    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" id="photo" placeholder="Enter photo" name="photo">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <!-- <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection