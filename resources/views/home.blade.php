 @extends('layouts.app') 
  
 
@section('content')


<h1 style="text-alig:center; ">Welcome  User </h1>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           @if (session('status'))
               <div class="alert alert-success" role="alert">
                   {{ session('status') }}
               </div>
           @endif      
        </div>
    </div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://i.pinimg.com/originals/6f/76/b7/6f76b7b5277565dcbd2e3d0db2178ff6.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://papatoe.com/assets/images/cat-women1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
    <!-- <img src="https://pbs.twimg.com/media/DrnhFoiWoAENgyR.jpg" alt="Los Angeles" width="1100" height="500"> -->
    <!-- <img src="https://www.dhresource.com/user_2151475444_00.jpg" alt="Los Angeles" width="1100" height="500">
      <!-- <img src="https://i.pinimg.com/originals/6f/76/b7/6f76b7b5277565dcbd2e3d0db2178ff6.jpg" alt="New York" width="1100" height="500"> -->
      <!-- <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> --> 



 <!-- <div class="container products" >
    <div class="row">
    <div class="col-md-12" style="margin-top:10%;">
       <h1 style="text-align:center;">New Arrivals</h1>
    </div>
      @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3" style="margin-top:6%; border-color:#ffffff!important;">
          <div class="thumbnail" style="border:2px solid red;" > -->
            <!-- <img src="{{ $product->photo }}" width="200" height="200"> -->
            <!-- <img src="{{url('/images/'.$product->photo)}}" width="90" height="180">
            <div class="caption">
              <h4>{{ $product->name }}</h4>
              <p>{{ \Illuminate\Support\Str::limit(strtolower($product->description), 50) }}</p>
              <p><strong>Price: </strong> {{ $product->price }}$</p>
            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> 
              <!-- <p class="btn-holder"><button class="btn btn-warning btn-holder"> <a href="{{ url('add-to-cart/'.$product->id) }}">Add to cart</a> </button></p> -->
            <!-- </div>
          </div>
        </div>
      @endforeach
    </div>
  </div> -->

  <!--   Product Section End  -->

<style>
  img
  {
      background-size:cover;
      background-repeat: no-repeat;
      width:100%;
  }
  .carousel-caption
  {
      color:#000000!important;
  }
  .btn-warning {
    color: #ffffff;
    background-color: #ab3b61;
    border-color: #ab3b61;
}
.btn-warning:hover {
    color: #ffffff;
    background-color: #ab3b61;
    border-color: #ab3b61;
}

.thumbnail {
    border: 2px solid white!important;
    box-shadow:1px 1px 15px 9px #d6d6d6!important;
}
button:hover
{
  background-color:#ab3b61!important;
}

</style>
@endsection