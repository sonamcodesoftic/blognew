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
    <img src="https://www.dhresource.com/user_2151475444_00.jpg" alt="Los Angeles" width="1100" height="500">
      <!-- <img src="https://i.pinimg.com/originals/6f/76/b7/6f76b7b5277565dcbd2e3d0db2178ff6.jpg" alt="New York" width="1100" height="500"> -->
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


<div class="container">
   <div class="row mt-5"> 
     <div class="col-md-3">
      
       <img height="280" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBERDxERDw8PDw8PDw8RDw8PDxEPDw8PGBQZGhgUGBgcIS4lHB4rHxgYJzgmLC8xNTc1GiQ7QDs0Py40NTEBDAwMEA8QGhISGDQhISM0NDQ0NDExNDQxNDExNDQxNDExMTQ0NDExMTQ0NDQ0MTQxNDQ0NDQxMTExNDE0NDExMf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAADAAMBAQEAAAAAAAAAAAAAAQIDBAUHBgj/xAA+EAACAgEDAQUFBAgDCQAAAAAAAQIRAwQSITEFE0FRcQYiYZGxMoGhwRRScoKS0eHwB0JiFRYjJDRDRGOT/8QAGwEAAwEBAQEBAAAAAAAAAAAAAAECAwQFBgf/xAAvEQEBAAIBAgMGBAcBAAAAAAAAAQIRAyExBBJRBSJBcaHhMmGB8BNCUpGxwdEU/9oADAMBAAIRAxEAPwD6cpCGfnj6UwQwEk0ZEREtGmCapDQkUjaICGA0aEYARPPCLqU4Rkoubi5JS2L/ADV5F6SyDRrx1uJrcssHGm925baTrr6meM00nFpppNNNNNPxGKpDEhlJAxDAAAAZAQwENkIYiaomQy2SyKcS0JlEsixRMTKZLEZEsoTIOJYmUSzOqiQGBmpjQ0JFIZmgQIBEpFohFo0wRVItEodm8SoVktkOQXOQSbcD2h9r8GjnPFPve8UYPdjjCajKXKTi5Jvjn87aPNu3PabPq5Sc51ByeyEY7VGNtJeL6eF+Zr+1XaH6RrcuRvhTnFSklXutqKXw2pL7jiXfCurSo+m8J4PDDHHOzrZP0+TzuXmttk7NyGuyL3o5JJxq9z3e76PwN7s7t7LinCSnW2ScbScdyfDa8fHqcWHDuuPGujQ8cf4XSd/HwO3Liws1YxmeU7V7L7Ne22PVZI4MkXjybaU5yglkkuqrin5I+wPz32dm7vUYsnSUMkJO66prlfI/QWOalFSXSUU16NWeD43gx4c55e1dvFnc51UMQzkagAACAAAAgYAyaaWSymSZ1RCYyWTVBklMkkwSNgTTSyWUyWZ5KhAAGZsY0JFIFGgAAJSLRCKRWCVoGxCkzXaUykaHaUrw5Ip5E5xcU8VPIm+E1fHzNrJI5+pzUTju5bazGa6vEtdJqbg021J2+jb55/E6ns/7PS1S3NtQb6D9p9JHDq04td3l28XW2NpNP+/E3Z4p4oYIY3CMtk255Ixk4zT+zG0/NX8HH439nOS8mGHk6eb914mfk4rllydsf3H2mh/w+08o75ym/ddQ6RTrq/M+P9qfZP8AQ0p45ScW6la+zT4fHXwPqeyO3M8Oy9ROcnOeF7Yzi5U78bdtJXXwo+b02rzalvBlWOcs2HKoZFvnl3KEpe9KUm2uPoTJySZZT+Xv+jXLl4cvJP6+uPR8vilc2pee6Mnxzy6aXhaPbvYvPOegxOW647oLfe7bF0l8jzT2T9np6zPGdzWlhKeOWfHJRncbdffxyvM9kwYYwjUYqKbcnSq5Pq/U8/2jzY2zCfD6fl8/VpwY2S31ZRiGeY3AAAEAAAAZI2IVMEspksimkTKZJFVEgwYmTVEIYiKcJkspkszyVCAAIUxjEigMDQhoRKiUiUNF4pqiZFCkX8Ca2U5Wv6M684nP1UA4rqtp1j47tHSQy+5kjujuurqzb7A0GPb3EoQyJRfdxy8ptXtXrTqzb1Wmt8K38Dm63fgnjpVOVzXonX8/ke1w8tupL+bmyxku7H1HZmlb080scIYHxPDLuIygubg/+Jx1rp8zQ/2JDu8mPTYYabLqMMo95cu8xQl6N7X0dJ+CNjs3tTBOK3YsvfP7cI7tkpeb5r5mT9IzY8k5KCySmoycE64T+zFvxps6ubK/w7OLv+d6fqOl7/4+7qdkdl49LjjjxJ1GMYuUnc5JLhyf3nViaei1EckIZIqSU4qUVJbXTXivBm4jxve3fN3TTGIZW0gAGGwQDEGwBAJskwyRskm0wxMbJZNUGSxtksi0wyQbEzO5K0GSMRmoAIBBCGhDBSgQhgRookaYSpUhsVkSkab1BopMxd1Fq3z5JeJh1mWo0vtSe1fmQ8/v4Y+c2n/BP+hv4fjl96r7NjHhg1cY7b63FqVeXPJy+2dAsmeLULrHGLfHHvSpfidtGjlb72TV9Uvkkj0vDT39s8hp9Hjht2pubXvJLo68zJqE1CUo45KUYyalNwUOnnZsY5tvlD1Mt7hB9HJSf7MXf1o77ZjLfRl3ulaeGzHCP6sIR+SSM8cj8efqYMivi2kutNx+g48UlwvyPKur3aabdjMWCVx9G0ZTBnZoDJsYbIxAAAMkbYiaZEsYMmmTJYMGTVEyWMTM6cSyRsRle64BMYmIAQABoKRJQ1GhiQ0IgUiSkJJNmLJIySNXUSpFYzdVjOrSnLdmh5RT+fP8kaK1P/PYIeDlk+dMzptLvPKbi15Jql9UcjFkvXY8jfuxnHnyttP6nqcOP0ic6+2Tq2+EvofDdm/4gaaX/U4smGTbanjXe42r4bX2ov4U/U+o9oNT3Wi1OS6cNPmcf2tjr8aPDkz1/ZnDhnjncp6f7+zg8ZzZceWPl/N6/L2s0U5wWPUx96lUoZIPc+iqUUd3Ry3XNqS6x2yVSjtbTTXrfyR5p7B9ix1HeZMuOGTG3LHDfF1GUae6MvB2/D9U9I0eSW1Rmts6W9XcXLpJr4Pr94vHY44yzDfTu18PllljMsujZdt15u3/ACBS5fw4ByrkwaXJuTf+qS+UmeRXVpu6d8yRmNbC/e9YmxZnl3ZZ9zCxASlVisVgAFg2ITFaYbBgSQYYmNksmmTExtkNmeVVASDAyUBDEMwAgA0jEhjNQ0ShiIyiEMRBnP1jbpRcVzbck2kvQ3ckqNTT1LJJ+SSRvwT3uqp2c/V5NsGpzi7XSKdr48HE0uNvLDq1LJDj1kjvdsQukv1lxSr+hg7PxKOTe1e2MnH9rovr+J6GGcxlRlNtD/EjtBY9HLGvtZ8kYUuu1PdL8FX3nlc6q1/Jo+i9te0e+1jjGVw06cPNPK+Z/kv3TgNWj6T2dw3j4Jvvev8Af7PG8Xyefluu06f2elexGpxx0WOOKcZSVvNFNqUZuTfvRb/H4I+ujkWRKUX78fB8X8Dw3szI8OoxZN7xxWXGsji6fdOS3fdVnqWuxavTJqCWoU5uGKUFtmm6294ujXPLXl0OTxOP8Pk8t7ZO3w3LM8O2vL0fRyhOlKXKkrXkr5r+/I19E1GU4rhbty/eim/xbOjjnFRSUlJRSXx4VE91Dc5JJSfDf9DxbJvpejsmXrFYn70fja/A2TV3VKN1y+GunobRjn0yRl3FjEBCDAkA2AwATZJhktjZJNM2SwE2RaomSxsGZWqSAMQGAAQGAGABjKJQ0M1IYkNCIIbYEyYEwaidI1OzpvfL3bT/AM19PuMmqlwcRaprUrHGbitu6bi6k7fCv7ju8Lx3O6isrqOlrPeyNX9nw8LNXtbVrSaHLnSubVY1V3kfEPuVtv4IM0cspVHJGn/625zVdG7+iNrSayMdveZYRUI7PtKONylLi5Px4So7P/PnjlvLHc9J8Z90XLc1Lq+rxSTt3uuTbbbdtyfVsqJ7zm0uPJ9vFjyft41P6o1H2BopO3o9G2/H9HxX9D1Z7Yx+PH9fs82+zr/X9Pu8QyRuLR7R2XKWr0OmzQyPHllixtzSUouSVSjJPh83z1Mn+7Ogf/h6f/5RRXYmOGLvdPjjGEMWRyxwjwown73H7245fGeNw8RMfLjZZ667Xp/xt4fw+XFbuy7+bFklqsbXeYo5Y+MsFqX8D/mbUMs6tRk06a45r4o6Clz6IwwXL9WePzWYyWR3y34lpIylLdNNKLtblXPodEwQMtmUy3NssruqAmwsraVATYwBNiYxMgEAMlk2mGxMGS2Rao2SAEKAgEMwIbEAAAAGgpEIpDNSGSh2JJsiTKbMU2OHGpqTlazs2U4SyY4J5Ft97pOUU+nxq38zsVFySk6X98G6qSrhJL0O3hyuPWHn6PluwtRLJn2StLGnKXn1qvmfS5NHinJTcI7uOVcbrpddfvOHm1EVqZ7IXUYqcox4bTd38OUr+J3dNkTimuj6HVny5ZWW9PRnMejY2ioKZLTM6DOZlezWQl0WbHKD+Mo+8vw3HSZx+35KOOOWMo7sM4zrcraT5XyCTd0brZY9JQrdHonwmvGL/vwQR8/MxSyKUVKLtSSaa8U/EyYIuve63+BzeIy3PketRngWQh2YS6jOxdhZFjsfmLSrAmwsfmGjE2KxWT5j0bZNg2JmdpmSAMSgIAGAIAAyACRmAAACUMkoalCABJDZjmWzHIqKjSzswPVTUXG7XhfVehtZUaGVHThq9BS00Vapcq+bcZctviS58WdrBCSXEmvVRnH8KZwsEqmd7T0108OvibW3aGZRn+tH+F/zJkn4zv0co/mZV6v6/U5nbGXJDG3jknJVxKKdq+Va+ArBG7KMOstvrKvzMGqxQnCUUk7T6R4+aVGHQ51OKdJPx4V2b0WEt+R6cv2em3ieGX29POWJ3129YP5NL7jtI5WTD3Wpjlj9jNWLKvKf/bl824/vI6cZW+Oi4fr5E8/XG39UfDTIKwA4NgWFhYhbCrCxWFj2BYCsQgYgADDEADAAQwMhAAGQhiGYAAAIKEhjMwEMREyJIsRRtbJE0ssDpTRp5kbYU657VSXqdvRy91HEy9Tq9nz4o3t7IdBPg5Xa0/caXi0n6dfyOlfDOV2nzXq/oLfvQ5O7U0ObZL/S+p3ISPn4x8DpaHPcad3HgulHRlBSi4y5TXKMseDDCRlYd5qlVACYHm2athAAAQACAAYCAYAAAGBAAAAAACZJZAzAAAGQxAMyQwAABAAAAAAESRqZwA0wV8HOzG32fMAOrL8KPi6LfX0RztZy194AZz8UNqJclRlsyRl4S6r4oANp3TezsYZGxfAAKCqixgBxc346QAAMyAAAGBAAAAAADEAAAJgABIAAzAAAGAAAD//Z" alt=""> 
       <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
     <div class="col-md-3">
       <img height="280" src="https://i.pinimg.com/236x/57/16/3b/57163b072a604cd6b1dc973176290a3a.jpg" alt="">
       <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
     <div class="col-md-3">
       <img height="280" src="https://img.etimg.com/thumb/msid-80304631,width-1200,height-900,imgsize-784933,resizemode-8,quality-100/magazines/panache/new-normal-fashion-trend-comfortwear-big-hit-oversized-clothes-get-thumbs-up-during-the-pandemic.jpg" alt="">
       <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
     <div class="col-md-3">
        <img height="280" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7cRLis-FjGnL50kZoG2ed3emk86nZ9rE-3tcvVxPPOuTTJJSDk6oWCbx-0MBA-cx-oKU&usqp=CAU" alt="">
        <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
   </div>
   <div class="row mt-5">
     <div class="col-md-3">
        <img height="280" src="https://media.istockphoto.com/photos/red-coat-woman-with-black-leather-handbag-beautiful-vintage-style-picture-id541149082?k=6&m=541149082&s=612x612&w=0&h=s331gfqk9udiY4INRVWjm2adH9ywJIThLxuTnYLQHDU=" alt="">
        <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
     <div class="col-md-3">
        <img height="280" src="https://media.istockphoto.com/photos/african-american-woman-in-jacket-with-hands-in-pockets-looking-at-picture-id1207472153?k=6&m=1207472153&s=612x612&w=0&h=MAXGXxdM-rleXn4bcPTjVOHnLubGiTYpiV33vBMmkow=" alt="">
        <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
     <div class="col-md-3">
        <img height="280" src="https://us.123rf.com/450wm/indiraswork/indiraswork1604/indiraswork160400123/57142164-glamour-fashion-style-beautiful-woman-clothes-white-cotton-jacket-and-pants-trendy-accessory-model-p.jpg?ver=6" alt="">
        <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
     </div>
     <div class="col-md-3">
         <img height="280" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7mXpOF3r1lRx-9xhRP7XHBG39YdcKC0zacu8dkd1cwswUXH7W7dgz7fznW229hWgilII&usqp=CAU" alt="">
         <button class="btn btn-success">Add to cart</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Product Details</button>
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
