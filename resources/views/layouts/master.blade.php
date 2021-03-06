<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">

    <!--=============================================
    =            CSS  files       =
    =============================================-->

    <!-- Vendor CSS -->
    <link href="{{asset('shop/assets/css/vendors.css')}}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{{asset('shop/assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('shop/assets/css/custom_style.css')}}">


</head>

<body>

<!--====================  Header area ====================-->

<div class="header-area header-sticky">
    <!--====================  Navigation top ====================-->

    <div class="navigation-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--====================  navigation section ====================-->

                    <div class="navigation-top-topbar pt-10 pb-10">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 text-center text-md-left">
                                <!--=======  header top social links  =======-->

                                <div class="header-top-social-links">
                                    <span class="follow-text mr-15">Siguenos:</span>
                                    <!--=======  social link small  =======-->

                                    <ul class="social-link-small">
                                        <li><a href="//www.facebook.com"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="//www.instagram.com"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>

                                    <!--=======  End of social link small  =======-->
                                </div>


                                <!--=======  End of header top social links  =======-->
                            </div>
                            <div class="col-lg-4 offset-lg-4 col-md-6">
                                <!--=======  header top dropdown container  =======-->

                                <div class="headertop-dropdown-container justify-content-center justify-content-md-end">
                                    <div class="header-top-single-dropdown">
                                        @auth
                                            <a href="javascript:void(0)" class="active-dropdown-trigger" id="user-options">{{Auth::user()->name.' '.Auth::user()->last_name}} <i class="ion-ios-arrow-down"></i></a>
                                            <!--=======  dropdown menu items  =======-->

                                            <div class="header-top-single-dropdown__dropdown-menu-items deactive-dropdown-menu extra-small-mobile-fix">
                                                <ul>
                                                    <li><a href="{{asset('perfil')}}">Mi cuenta</a></li>
                                                    @if (Auth::user()->isAdmin())
                                                        <li><a href="{{asset('admin/categories')}}">Administraci??n</a></li>
                                                    @endif
                                                    <li><a href="{{asset('autentificacion/_logout')}}">Salir</a></li>
                                                </ul>
                                            </div>
                                        @else
                                            <a href="{{asset('autentificacion')}}" id="user-options">Acceder</a>
                                        @endif

                                        <!--=======  End of dropdown menu items  =======-->
                                    </div>
                                    <span class="separator">|</span>
                                    @auth
                                    <div class="header-top-single-dropdown">

                                        <a href="{{asset('wish_list')}}"> Favoritos</a>
                                        <!--=======  dropdown menu items  =======-->

                                        <!--=======  End of dropdown menu items  =======-->
                                    </div>
                                    @endauth
                                    <span class="separator">|</span>
                                    <div class="header-top-single-dropdown">
                                        <a href="javascript:void(0)" class="active-dropdown-trigger" id="currency-options">USD <i class="ion-ios-arrow-down"></i></a>
                                        <!--=======  dropdown menu items  =======-->

                                        <div class="header-top-single-dropdown__dropdown-menu-items deactive-dropdown-menu">
                                            <ul>
                                                <li><a href="#">??? EURO</a></li>
                                                <li><a href="#">?? Pound Sterling</a></li>
                                                <li><a href="#">$ US Dollar</a></li>
                                            </ul>
                                        </div>

                                        <!--=======  End of dropdown menu items  =======-->
                                    </div>
                                </div>

                                <!--=======  End of header top dropdown container  =======-->
                            </div>
                        </div>
                    </div>

                    <!--====================  End of navigation section  ====================-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--====================  navigation top search ====================-->


                    <div class="navigation-top-search-area pt-25 pb-25">
                        <div class="row align-items-center">
                            <div class="col-6 col-xl-2 col-lg-3 order-1 col-md-6 col-sm-5">
                                <!--=======  logo  =======-->

                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of logo  =======-->
                            </div>

                            <div class="col-xl-5 offset-xl-1 col-lg-4 order-4 order-lg-2 mt-md-25 mt-sm-25">
                                <!--=======  search bar  =======-->

                                <div class="search-bar">
                                    <form action="#">
                                        <input type="search" placeholder="Search entire store here ...">
                                        <button type="submit"> <i class="icon-search"></i></button>
                                    </form>
                                </div>

                                <!--=======  End of search bar  =======-->
                            </div>

                            <div class="col-xl-3 col-lg-3 order-3 order-sm-2 order-lg-3 order-xs-3 col-md-4 col-sm-5 text-center text-sm-left mt-xs-25">
                                <!--=======  customer support text  =======-->

                                <div class="customer-support-text">
                                    <div class="icon">
                                        <img src="{{asset('shop/assets/img/icons/icon-header-phone.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="text">
                                        <span>Soporte a clientes</span>
                                        <p>(08) 12 345 789</p>
                                    </div>
                                </div>

                                <!--=======  End of customer support text  =======-->
                            </div>

                            <div class="col-6 col-xl-1 col-lg-2 text-right order-2 order-sm-3 order-lg-4 order-xs-2 col-md-2 col-sm-2">
                                <!--=======  cart icon  =======-->

                                <div class="header-cart-icon">
                                    <a href="javascript:void(0)" id="small-cart-trigger" class="small-cart-trigger">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-counter">2</span>
                                    </a>

                                    <!--=======  small cart  =======-->

                                    <div class="small-cart deactive-dropdown-menu">
                                        <div class="small-cart-item-wrapper">
                                            <div class="single-item">
                                                <div class="image">
                                                    <a href="single-product.html">
                                                        <img src="assets/img/cart-image/small1-90x90.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <p class="cart-name"><a href="single-product.html">Cillum dolore</a></p>
                                                    <p class="cart-quantity"><span class="quantity-mes">1 x </span> $78.80</p>
                                                </div>
                                                <a href="#" class="remove-icon"><i class="ion-close-round"></i></a>
                                            </div>
                                            <div class="single-item">

                                                <div class="image">
                                                    <a href="single-product.html">
                                                        <img src="assets/img/cart-image/small2-90x90.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <p class="cart-name"><a href="single-product.html">Condimentum posuere</a></p>
                                                    <p class="cart-quantity"><span class="quantity-mes">1 x </span> $78.80</p>
                                                </div>
                                                <a href="#" class="remove-icon"><i class="ion-close-round"></i></a>
                                            </div>
                                        </div>

                                        <div class="cart-calculation-table">
                                            <table class="table mb-25">
                                                <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$129.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Eco Tax (-2.00) :</td>
                                                    <td class="text-right">$4.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">VAT (20%) :</td>
                                                    <td class="text-right">$25.80</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$158.80</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <div class="cart-buttons">
                                                <a href="{{asset('carrito')}}" class="theme-button">Ver carrito</a>
                                                <a href="checkout.html" class="theme-button">Pagar</a>
                                            </div>
                                        </div>

                                    </div>

                                    <!--=======  End of small cart  =======-->
                                </div>

                                <!--=======  End of cart icon  =======-->
                            </div>
                        </div>
                    </div>

                    <!--====================  End of navigation top search  ====================-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of Navigation top  ====================-->

    <!--====================  navigation menu ====================-->

    <div class="navigation-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- navigation section -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{asset('/')}}">INICIO</a></li>
                                <li><a href="{{asset('productos')}}">TIENDA</a></li>
                                <li class="menu-item-has-children"><a href="#">CATEGOR??AS</a>
                                    <ul class="sub-menu">
                                        @foreach($categories_list as $category)
                                            <li class=" {{$category->hasSubCategories() ? 'menu-item-has-children' : '' }}"><a href="{{asset('productos/categoria/'.$category->slug)}}">{{$category->name}}</a>
                                                @if($category->hasSubCategories()) 
                                                    <ul class="sub-menu">
                                                        @foreach($category->sub_categories as $subcategory)
                                                            <li class="">
                                                                <a class="{{$subcategory->hasSubCategories() ? 'sub_category_item' : ''}}" href="{{asset('productos/categoria/'.$category->slug.'/'.$subcategory->slug)}}">{{$subcategory->name}}</a>
                                                                @if ($subcategory->hasSubCategories())
                                                                    <ul class="">
                                                                        @foreach($subcategory->sub_categories as $sub__category)
                                                                            <li><a href="shop-3-column.html">{{$sub__category->name}}</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="shop-left-sidebar.html">SHOP</a>
                                    <ul class="mega-menu four-column">
                                        <li><a href="#">Shop Grid</a>
                                            <ul>
                                                <li><a href="shop-3-column.html">shop 3 column</a></li>
                                                <li><a href="shop-4-column.html">shop 4 column</a></li>
                                                <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List</a>
                                            <ul>
                                                <li><a href="shop-list.html">shop List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product.html">Single Product</a>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-variable.html">Single Product variable</a></li>
                                                <li><a href="single-product-affiliate.html">Single Product affiliate</a></li>
                                                <li><a href="single-product-group.html">Single Product group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Tab Style 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Tab Style 3</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="single-product.html">Single Product</a>
                                            <ul>
                                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-banner d-none d-lg-block mt-30 w-100">
                                            <a href="shop-left-sidebar.html" class="mb-0">
                                                <img src="assets/img/banners/img-bottom-menu.jpg" class="img-fluid" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{asset('categorias')}}">CATEGOR??AS</a></li>
                                <li><a href="{{asset('nosotros')}}">ACERCA DE</a></li>
                                <li><a href="{{asset('contacto')}}">CONTACTO</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- end of navigation section -->

                    <!-- Mobile Menu -->
                    <div class="mobile-menu-wrapper d-block d-lg-none pt-15">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of navigation menu  ====================-->
</div>


@yield('breadcrumb')

@yield('content')

<!--====================  End of brand logo slider area  ====================-->
<!--====================  newsletter area ====================-->
<div class="newsletter-area mb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  newsletter wrapper  =======-->

                <div class="newsletter-wrapper newsletter-bg-1">
                    <div class="newsletter-wrapper__text">
                        <h5>Subscribe newsletter to get updated</h5>
                        <p>We???ll never share your email address with a third-party.</p>
                    </div>
                    <div class="newsletter-wrapper__form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" placeholder="Enter your email address here ...">
                            <button type="submit">Subscribe</button>
                        </form>

                        <!-- mailchimp-alerts Start -->

                        <div class="mailchimp-alerts mt-5 mb-5">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->

                    </div>
                </div>

                <!--=======  End of newsletter wrapper  =======-->
            </div>
        </div>
    </div>
</div>

<!--====================  End of newsletter area  ====================-->
<!--====================  footer area ====================-->

<div class="footer-area">
    <div class="container">
        <div class="row mb-40">
            <div class="col-lg-12">
                <div class="footer-content-wrapper border-top pt-40">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!--=======  single footer widget  =======-->

                            <div class="single-footer-widget">
                                <div class="footer-logo mb-25">
                                    <img src="assets/img/logo-alula2.png" class="img-fluid" alt="">
                                </div>

                                <div class="footer-text-block mb-10">
                                    <h5 class="footer-text-block__title">Address</h5>
                                    <p class="footer-text-block__content">4710-4890 Breckinridge St, UK Burlington, VT 05401</p>
                                </div>

                                <div class="footer-text-block mb-10">
                                    <h5 class="footer-text-block__title">Need Help?</h5>
                                    <p class="footer-text-block__content">Call: 1-800-345-6789</p>
                                </div>

                                <div class="footer-social-icon-block">
                                    <ul>
                                        <li><a class="facebook-icon" href="//www.facebook.com"><i class="ion-social-facebook"></i></a></li>
                                        <li><a class="twitter-icon" href="//www.twitter.com"><i class="ion-social-twitter"></i></a></li>
                                        <li><a class="googleplus-icon" href="//plus.google.com"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a class="instagram-icon" href="//www.instagram.com"><i class="ion-social-instagram-outline"></i></a></li>
                                        <li><a class="youtube-icon" href="//www.youtube.com"><i class="ion-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--=======  End of single footer widget  =======-->
                        </div>

                        <div class="col-lg-4 col-md-6 mt-sm-30">
                            <!--=======  single footer widget  =======-->

                            <div class="single-footer-widget">
                                <h4 class="footer-widget-title"><a href="#">Follow on instagram</a></h4>

                                <div class="instagram-image-slider-wrapper">
                                    <div class="ht-slick-slider"
                                         data-slick-setting='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "autoplay": false,
                                            "autoplaySpeed": 5000,
                                            "speed": 1000,
                                            "arrows": false,
                                            "rows": 2
                                        }'
                                         data-slick-responsive='[
                                            {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                            {"breakpoint":767, "settings": {"slidesToShow": 4, "arrows": false} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 4, "arrows": false} },
                                            {"breakpoint":479, "settings": {"slidesToShow": 2, "arrows": false} }
                                        ]'
                                    >
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a1.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a2.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a3.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a4.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a5.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a6.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a7.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a8.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a1.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a2.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a3.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                        <!--=======  single instagram image  =======-->

                                        <div class="single-instagram-image">
                                            <a href="#"><img src="assets/img/instagram/a4.jpg" class="img-fluid" alt=""></a>
                                        </div>

                                        <!--=======  End of single instagram image  =======-->
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single footer widget  =======-->
                        </div>

                        <div class="col-lg-4 col-md-6 mt-md-30 mt-sm-30">
                            <!--=======  single footer widget  =======-->

                            <div class="single-footer-widget">
                                <h5 class="montserrat-footer-widget-title">Information</h5>

                                <div class="footer-navigation">
                                    <nav>
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Gift Certificates</a></li>
                                            <li><a href="#">Specials</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="#">Affiliate</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <!--=======  End of single footer widget  =======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text-area">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left mb-sm-15">
                            <div class="copyright-text">
                                <p>Copyright ?? 2019 <a href="#">Alula</a>. All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <div class="payment-logo">
                                <img src="assets/img/icons/payment.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====================  End of footer area  ====================-->
<!-- scroll to top  -->
<button class="scroll-top"></button>
<!-- end of scroll to top -->

<!--=============================================
=            JS files        =
=============================================-->

<script src="{{asset('shop/assets/js/vendors.js')}}"></script>

<script src="{{asset('shop/assets/js/active.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

</script>

</body>

</html>
