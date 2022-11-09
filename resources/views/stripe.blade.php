<!DOCTYPE html>
<html>
    <head>
        <title> Payment </title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style type="text/css">
            .panel-title {
                display: inline;
                font-weight: bold;
            }
            .display-table {
                display: table;
            }
            .display-tr {
                display: table-row;
            }
            .display-td {
                display: table-cell;
                vertical-align: middle;
                width: 61%;
            }
        </style>
        <base href="/public">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<title>Restaurant</title>

<link rel="stylesheet" type="text/css" href="assets/css/stripe.css">

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
                            <img src="assets/images/klassy-logo.png">
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

                                Cart
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

    <div class="wrapper">
  <div class="checkout_wrapper">
    <div class="product_info">
    <img src="assets/images/qrcode1.jpg" alt="product">
      
      <div class="content">
        <h3>Scan<br/>QRCode</h3>
        
      </div>
    </div>
    <div class="checkout_form">
      <p>Bank transfer</p>
      <div class="details">
        <h4>Account owner name:</h4>
        <p>Paganata Jone</p>
        <h4>Account number:</h4>
        <p>0923913299139</p>
        <h4>Bank Name: BIDV(Ngân hàng TMCP Đầu tư và Phát triển Việt Nam)</h4>
        <div class="btn">
          <a href="index.html">Back</a>
        </div>
      </div>
      
    </div>
  </div>
</div>

    <script src="assets/js/jquery-2.1.0.min.js"></script>

<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

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
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function () {
            var $form = $(".require-validation");
            $("form.require-validation").bind("submit", function (e) {
                var $form = $(".require-validation"),
                    inputSelector = [
                        "input[type=email]",
                        "input[type=password]",
                        "input[type=text]",
                        "input[type=file]",
                        "textarea",
                    ].join(", "),
                    $inputs = $form.find(".required").find(inputSelector),
                    $errorMessage = $form.find("div.error"),
                    valid = true;
                $errorMessage.addClass("hide");
                $(".has-error").removeClass("has-error");
                $inputs.each(function (i, el) {
                    var $input = $(el);
                    if ($input.val() === "") {
                        $input.parent().addClass("has-error");
                        $errorMessage.removeClass("hide");
                        e.preventDefault();
                    }
                });
                if (!$form.data("cc-on-file")) {
                    e.preventDefault();
                    Stripe.setPublishableKey(
                        $form.data("stripe-publishable-key")
                    );
                    Stripe.createToken(
                        {
                            number: $(".card-number").val(),
                            cvc: $(".card-cvc").val(),
                            exp_month: $(".card-expiry-month").val(),
                            exp_year: $(".card-expiry-year").val(),
                        },
                        stripeResponseHandler
                    );
                }
            });
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $(".error")
                        .removeClass("hide")
                        .find(".alert")
                        .text(response.error.message);
                } else {
                    var token = response["id"];
                    $form.find("input[type=text]").empty();
                    $form.append(
                        "<input type='hidden' name='stripeToken' value='" +
                            token +
                            "'/>"
                    );
                    $form.get(0).submit();
                }
            }
        });
    </script>
</html>