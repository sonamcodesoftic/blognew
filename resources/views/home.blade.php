 @extends('layouts.app') 
  
 
@section('content')

<div class="container">
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
      <img src="https://previews.123rf.com/images/aliona3333/aliona33332003/aliona3333200300006/142565786-fashion-banner-with-two-stylish-women-template.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://s3.envato.com/files/220638195/BEE-1906-Fashion%20Sale%20Banner_01_Preview4.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://thedigital.agency/wp-content/uploads/2019/04/Nilaya-Sliders_black_friday_versiyon_mobil-uyumlu.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
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
</div>


<div class="mt-5">
   <div class="row"> 
     <div class="column">
         
         <img src="https://i.pinimg.com/originals/d9/67/0a/d9670a7c98e91e24f11afd523f4c6477.png" style="width:20%">
         <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Lil_Nas_X_Satan_Shoes.png" style="width:20% ">
         <img src="https://i.pinimg.com/originals/73/a5/0a/73a50ab3cb93e0daa62261a1b7f6698b.jpg" style="width:20%">
         <img src="https://i.pinimg.com/236x/85/4e/f9/854ef95e733628b7de5e6b1fa57f21ab.jpg" style="width:20%">
         
         <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Lil_Nas_X_Satan_Shoes.png" style="width:20%">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYaW1XVan79J0YMks8qeRSoDillp8jXoMxoA&usqp=CAU" style="width:20%">
         <img src="https://i.pinimg.com/236x/85/4e/f9/854ef95e733628b7de5e6b1fa57f21ab.jpg" style="width:20%">
         <img src="https://i.pinimg.com/originals/73/a5/0a/73a50ab3cb93e0daa62261a1b7f6698b.jpg" style="width:20%">
     </div>
   </div>
</div>
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

</style>
@endsection












<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> -->
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <!-- <div class="card-body">
              
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <!-- {{ __('You are logged in!') }} -->
                <!-- </div>
            </div>
        </div>
    </div>
</div> -->
