<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aladdin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
   

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 -->




    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <header>
        <div class="header-top-wrapper-2 border-bottom-2" style="background-color: #F1C40F ">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info">
                    <ul>
                        <li>Malaysia</li>
                        <li>MYR</li>
                        <li>English</li>
                    </ul>
                </div>
                <div class="electronics-login-register">
                    <ul >
                        <li style="margin-left: 40px; "><a href="#"><i class="fas fa-truck-moving"></i>Track Your Order
</a></li>
                        <li style="margin-left: 40px; "><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="fal fa-map-marker-alt"></i>Store Locator
</a></li>
                        <li style="margin-left: 40px;"><a href="wishlist.html">Vendor</a></li>
                        <li style="margin-left: 40px; "><a href="#"><i class="fas fa-shopping-bag"></i>Shop</a></li>
                        <li style="margin-left: 40px;"><a class="border-none" href="#"><i class="far fa-user"></i>MyAccount</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix" style="background-color: #F1C40F ; margin-top: -2px;">
            <div class="header-bottom-wrapper pr-200 pl-200" >
                <div class="logo-3">
                    <a href="{{url('/')}}">
                        <img src="/assets/img/logo/logo-3.png" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">

                    <div class="categories-wrapper">
                        <form action="" method="GET">
                            <input style="border-radius: 50px; padding:20px 0px 0px 10px;" name="query" placeholder="Search in Aladdin" type="text">
                            <button style="padding:20px 0px 0px 10px;" type="submit"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper" >
                    <div class="trace same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="fal fa-headset"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="#">Support (+800) 856 800 604 <br>Email: info@electro.com</a>
                        </div>
                    </div>
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href=""><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="">My Cart <br>

                                @auth
                                {{Cart::session(auth()->id())->getContent()->count()}}
                                @else
                                0
                                @endauth

                                Item</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home <i class="far fa-angle-down"></i>
  

  </a>
  <a href="{{url('about')}}">About Us</a>
  <a href="#blog">Blog <i class="far fa-angle-down"></i></a>
  
    <a href="#pages">Pages <i class="far fa-angle-down"></i></a>
      <a href="#features">Features </a>
      <a href="{{url('contact')}}">Contact Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
        </div>
    </header>
    <!-- header end -->


    @if(session('message'))

        <div class="alert alert-success text-center" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    @if(session('error'))

        <div class="alert alert-danger text-center" role="alert">
            <strong>{{session('error')}} </strong>
        </div>
    @endif


    @yield('content')



    <footer class="footer-area">
        <div class="footer-top-3 black-bg pt-75 pb-25" style="background-color: #F1C40F; color:black; ">
            <div class="container" style="color:black">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-4">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3" style="color:black">Contact Us</h3>
                            <div class="footer-info-wrapper-2">
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span style="color:black">Address:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p style="color:black">Menara Prestige
                                            <br>1, Jalan Pinang, Kuala Lumpur, 50450 Kuala Lumpur, </p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span style="color:black">Phone:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p style="color:black">+(60) 118 389 8932
                                            <br>+11 (251) 2223 3353</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span style="color:black">Email:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p><a href="#" style="color:black">aladdin@mail.com</a>
                                            <br><a href="#" style="color:black">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3" style="color:black">My Account</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="login.html" style="color:black">Login Hare</a></li>
                                    <li><a href="cart.html" style="color:black">Cart History</a></li>
                                    <li><a href="checkout.html" style="color:black"> Payment History</a></li>
                                    <li><a href="shop.html" style="color:black">Product Tracking</a></li>
                                    <li><a href="register.html" style="color:black">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xl-2">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3" style="color:black">Information</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="about-us.html" style="color:black">About Us</a></li>
                                    <li><a href="#" style="color:black">Our Service</a></li>
                                    <li><a href="#" style="color:black">Pricing Plan</a></li>
                                    <li><a href="#" style="color:black"> Vendor Detail</a></li>
                                    <li><a href="#" style="color:black">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget widget-right mb-40">
                            <h3 class="footer-widget-title-3" style="color:black">Service</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="#" style="color:black">Product Service</a></li>
                                    <li><a href="#" style="color:black">Payment Service</a></li>
                                    <li><a href="#" style="color:black"> Discount Service</a></li>
                                    <li><a href="#" style="color:black">Shopping Service</a></li>
                                    <li><a href="#" style="color:black">Promotional Add</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle black-bg-2 pt-35 pb-40" style="background-color: #B7950B; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-car"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3 style="color:black">Free Shipping</h3>
                                <p style="color:black">Free Shipping on Kuala Lumpure</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-shield"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3 style="color:black">Money Guarentee</h3>
                                <p style="color:black">Free Shipping on Kuala lumpre</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3 style="color:black">Online Support</h3>
                                <p style="color:black">Free Shipping on Kuala lumpure</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom  black-bg pt-25 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                       
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright f-right mrg-5">
                            <p>
                                Copyright ©
                                <a href="#">Aladdin</a> 2021 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="/assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4>
                                        </td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has beenin the stand ard dummy text ever since the
                                                1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4>
                                        </td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight </h4>
                                        </td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand </h4>
                                        </td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color </h4>
                                        </td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size </h4>
                                        </td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00 </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et
                                dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>

    @livewireScripts

    <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<style>


.topnav {
  overflow: hidden;
  background-color: #F1C40F;
  margin-left: 350px;
}

.topnav a {
  float: left;
  display: #F1C40F;
  color: #007340;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}

.topnav a:hover {

  color: #007340;
}

.topnav a.active {

  color: #007340;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none; }
  .topnav a.icon {
    float: right;
    display: block;
  }
  .topnav{
margin-left: 0px;
  }

}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative; ,  margin-left: 0px;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
   .topnav{
margin-left: 0px;
  }
}
</style>
</body>

</html>
