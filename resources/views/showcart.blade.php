<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Restaurant</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    
    
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="" class="logo">
                            <img src="assets/images/klassy-logo.png" >
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                         
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            
                            <li class="scroll-to-section">
                                @auth

                                <a href="{{url('/showcart', Auth::user()->id)}}">

                                Cart{{$count}}
                                </a>
                            @endauth

                            @guest
                            Cart[0]
                            @endguest
                            </li>
                            <li>
                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li>
                        <x-app-layout>
    
                        </x-app-layout>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                           <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li>
                        </ul>        
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div id="top">
    <table align="center">
        <tr>
            <th style="padding:30px">Food Name</th>
            <th style="padding:30px">Food Price</th>
            <th style="padding:30px">Quantity</th>
            <th style="padding:30px">Action</th>
        </tr>

        <form action="{{url('orderconfirm')}}" method="post">
            @csrf
        @foreach($data as $data)
        <tr align="center">
            <td style="padding-top: 10px; padding-bottom:10px">
                <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                {{$data->title}}
            </td>
            <td style="padding-top: 10px; padding-bottom:10px">
                <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                {{$data->price}}
            </td>
            <td style="padding-top: 10px; padding-bottom:10px">
            <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                {{$data->quantity}}
            </td>
            
            
            
        </tr>
        @endforeach

        @foreach($data2 as $data2)
            <tr style="position: relative; top: -40px; right: -420px">

        <td><a href="{{url('/remove', $data2->id)}}" class="btn btn-danger">Remove</a></td>
        </tr>

        @endforeach
    </table>
   

    <div align="center" style="padding: 10px;background: #fb5849">

        <button type="button" class="btn btn-primary" id="order">Order Now</button>

    </div>

    <div id="appear" align="center" style="padding: 10px; display: none;background: #fb5849">
    <div class="contact-form">
        
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box1" placeholder="Your Name" required>
          <input type="number" name="phone" class="text-box1" placeholder="Your Phone" required>
          <input type="text" name='address' class="text-box1" placeholder="Address" required>
        
        </form>
      </div>
    <div style="padding: 10px;background: #fb5849">
        <a class="btn btn-success" href="{{url('/stripe')}}"><input  type="submit" value="Order Confirm"></a>

        <button type="button" id="close" class="btn btn-danger">Close</button>
    </div>
    </div>

    </form>





    </div>

    <script type="text/javascript">

        $("#order").click(

            function()
            {
                $("#appear").show();
            }


        );
        $("#close").click(

function()
{
    $("#appear").hide();
}


);



    </script>

    <script>
        function checkOut() {
            window.location.href="{{url('/checkout')}}"
        }
    </script>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>