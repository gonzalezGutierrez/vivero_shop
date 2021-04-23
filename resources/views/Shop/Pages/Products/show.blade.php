@extends('layouts.master')

@section('title',$product->name)

@section('content')
    <div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb content  =======-->

                    <div class="breadcrumb-content">
                        <ul>
                            <li class="has-child"><a href="{{asset('/')}}">Home</a></li>
                            <li class="has-child"><a href="{{asset('productos')}}">Productos</a></li>
                            <li>{{$product->name}}</li>
                        </ul>
                    </div>

                    <!--=======  End of breadcrumb content  =======-->
                </div>
            </div>
        </div>
    </div>

    <div class="product-details-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md-30 mb-sm-25">
                    <!--=======  product details slider  =======-->

                    <!--=======  big image slider  =======-->

                    <div class="big-image-slider-wrapper big-image-slider-wrapper--change-cursor">
                        <div class="ht-slick-slider big-image-slider99"
                             data-slick-setting='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "dots": false,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000
                            }'
                             data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 1} },
                                {"breakpoint":991, "settings": {"slidesToShow": 1} },
                                {"breakpoint":767, "settings": {"slidesToShow": 1} },
                                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1} }
                            ]'
                        >

                            <!--=======  big image slider single item  =======-->

                            <div class="big-image-slider-single-item">
                                <img src="{{$product->image_thumb_url}}" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of big image slider single item  =======-->

                            <!--=======  big image slider single item  =======-->

                            <div class="big-image-slider-single-item">
                                <img src="assets/img/products/big1-2.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of big image slider single item  =======-->

                            <!--=======  big image slider single item  =======-->

                            <div class="big-image-slider-single-item">
                                <img src="assets/img/products/big1-3.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of big image slider single item  =======-->

                            <!--=======  big image slider single item  =======-->

                            <div class="big-image-slider-single-item">
                                <img src="assets/img/products/big1-4.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of big image slider single item  =======-->

                            <!--=======  big image slider single item  =======-->

                            <div class="big-image-slider-single-item">
                                <img src="assets/img/products/big1-5.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of big image slider single item  =======-->

                            <!--=======  big image slider single item  =======-->

                            <div class="big-image-slider-single-item">
                                <img src="assets/img/products/big1-6.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of big image slider single item  =======-->

                        </div>
                    </div>

                    <!--=======  End of big image slider  =======-->

                    <!--=======  small image slider  =======-->

                    <div class="small-image-slider-wrapper small-image-slider-wrapper--quickview">
                        <div class="ht-slick-slider small-image-slider"
                             data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "dots": false,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "asNavFor": ".big-image-slider99",
                                "focusOnSelect": true,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                            }'
                             data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                {"breakpoint":991, "settings": {"slidesToShow": 4} },
                                {"breakpoint":767, "settings": {"slidesToShow": 4} },
                                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                                {"breakpoint":479, "settings": {"slidesToShow": 2} }
                            ]'
                        >

                            <!--=======  small image slider single item  =======-->

                            <div class="small-image-slider-single-item">
                                <img src="{{$product->image_thumb_url}}" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of small image slider single item  =======-->

                            <!--=======  small image slider single item  =======-->

                            <div class="small-image-slider-single-item">
                                <img src="assets/img/products/small1-2.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of small image slider single item  =======-->

                            <!--=======  small image slider single item  =======-->

                            <div class="small-image-slider-single-item">
                                <img src="assets/img/products/small1-3.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of small image slider single item  =======-->

                            <!--=======  small image slider single item  =======-->

                            <div class="small-image-slider-single-item">
                                <img src="assets/img/products/small1-4.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of small image slider single item  =======-->

                            <!--=======  small image slider single item  =======-->

                            <div class="small-image-slider-single-item">
                                <img src="assets/img/products/small1-5.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of small image slider single item  =======-->

                            <!--=======  small image slider single item  =======-->

                            <div class="small-image-slider-single-item">
                                <img src="assets/img/products/small1-6.jpg" class="img-fluid" alt="">
                            </div>

                            <!--=======  End of small image slider single item  =======-->

                        </div>
                    </div>

                    <!--=======  End of small image slider  =======-->

                    <!--=======  End of product details slider  =======-->
                </div>

                <div class="col-lg-6">
                    <!--=======  product details content  =======-->

                    <div class="product-detail-content">
                        <div class="tags mb-5">
                            <span class="tag-title">Tags:</span>
                            <ul class="tag-list">
                                <li><a href="#">Plant</a>,</li>
                                <li><a href="#">Garden</a></li>
                            </ul>
                        </div>

                        <h3 class="product-details-title mb-15">{{$product->name}}</h3>
                        <div class="rating d-inline-block mr-15">
                            <i class="ion-android-star active"></i>
                            <i class="ion-android-star active"></i>
                            <i class="ion-android-star active"></i>
                            <i class="ion-android-star active"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <div class="review-links d-inline-block">
                            <a href="#">(1 Review)</a> <span class="separator">|</span> <a href="#">Escribe un Review</a>
                        </div>
                        <p class="product-price product-price--big mb-10"><span class="discounted-price">${{number_format($product->price,2,'.',',')}}</span> <span class="main-price discounted">${{number_format($product->price*1.10,2,'.',',')}}</span></p>

                        <div class="product-info-block mb-30">
                            <div class="single-info">
                                <span class="title">Minimo de compra:</span>
                                <span class="value">{{$product->min_purchases}} Unidades</span>
                            </div>
                            <div class="single-info">
                                <span class="title">Categoría:</span>
                                <span class="value"><a href="#">{{$category->name}}</a></span>
                            </div>
                            <div class="single-info">
                                <span class="title">Stock:</span>
                                <span class="value stock-red">{{$product->stock > 0 ? 'Disponible' : 'no disponible'}}</span>
                            </div>
                        </div>

                        <div class="product-short-desc mb-25">
                            <p>{{$product->description}}</p>
                        </div>
                        {!! Form::open(['url'=>'products_in_shopping_carts/'.$product->slug,'method'=>'POST']) !!}
                            <div class="quantity mb-20">
                                <span class="quantity-title mr-20">Cant</span>
                                <div class="pro-qty mr-15 mb-lg-20 mb-md-20 mb-sm-20">
                                    <input type="text" name="amount" value="{{$product->min_purchases}}">
                                </div>
                                <button type="submit" class="theme-button product-cart-button"> <i class="icon-shopping-cart"></i> Agregar al carrito</button>
                            </div>
                        {!! Form::close() !!}
                        <div class="wishlist-button d-inline-block">
                                <a href="#"><i class="icon-heart"></i> Agregar a lista de deseos</a>
                        </div>

                        <div class="product-details-feature-wrapper d-flex justify-content-start mt-20">
                            <!--=======  single icon feature  =======-->

                            <div class="single-icon-feature single-icon-feature--product-details">
                                <div class="single-icon-feature__icon">
                                    <img src="{{asset('shop/assets/img/icons/free-shipping.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-icon-feature__content">
                                    <p class="feature-text">Free Shipping</p>
                                    <p class="feature-text">Ships Today</p>
                                </div>
                            </div>

                            <!--=======  End of single icon feature  =======-->

                            <!--=======  single icon feature  =======-->

                            <div class="single-icon-feature single-icon-feature--product-details ml-30 ml-xs-0 ml-xxs-0">
                                <div class="single-icon-feature__icon">
                                    <img src="{{asset('shop/assets/img/icons/return.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-icon-feature__content">
                                    <p class="feature-text">Easy</p>
                                    <p class="feature-text">Returns</p>
                                </div>
                            </div>

                            <!--=======  End of single icon feature  =======-->

                            <!--=======  single icon feature  =======-->

                            <div class="single-icon-feature single-icon-feature--product-details ml-30 ml-xs-0 ml-xxs-0">
                                <div class="single-icon-feature__icon">
                                    <img src="{{asset('shop/assets/img/icons/guarantee.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-icon-feature__content">
                                    <p class="feature-text">Lowest Price</p>
                                    <p class="feature-text">Guarantee</p>
                                </div>
                            </div>

                            <!--=======  End of single icon feature  =======-->
                        </div>

                        <div class="social-share-buttons mt-20">
                            <h3>share this product</h3>
                            <ul>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <!--=======  End of product details content  =======-->
                </div>
            </div>
        </div>
    </div>

    <div class="product-description-review-area mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  product description review container  =======-->

                    <div class="tab-slider-wrapper product-description-review-container">
                        <nav>
                            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#product-description" role="tab"
                                   aria-selected="true">Descripción</a>
                                <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                   aria-selected="false">Reviews</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="description-tab">
                                <!--=======  product description  =======-->

                                <div class="product-description">
                                    <p>{{$product->description}}</p>
                                </div>

                                <!--=======  End of product description  =======-->
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <!--=======  review content  =======-->

                                <div class="product-ratting-wrap">
                                    <div class="pro-avg-ratting">
                                        <h4>4.5 <span>(Overall)</span></h4>
                                        <span>Based on 9 Comments</span>
                                    </div>
                                    <div class="ratting-list">
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(3)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(1)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(0)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="rattings-wrapper">
                                        @foreach($reviews as $review)
                                            <div class="sin-rattings">
                                                <div class="ratting-author">
                                                    <h3>{{$review->name}}</h3>
                                                    <div class="ratting-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>({{$review->review_qualification}})</span>
                                                    </div>
                                                </div>
                                                <p>{{$review->review}}</p>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="ratting-form-wrapper fix">
                                        <h3>Agrega tu review</h3>
                                        {!! Form::open(['url'=>asset('productos/'.$product->slug.'/reviews'),'method'=>'POST']) !!}
                                            <div class="ratting-form row">
                                                <div class="col-12 mb-15">
                                                    <h5>Calificación:</h5>
                                                    <div class="ratting-star fix">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="name">Nombre:</label>
                                                    {!! Form::text('name','',['id'=>'name','placeholder'=>'Nombre']) !!}
                                                    @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="email">Correo electronico:</label>
                                                    {!! Form::text('email','',['id'=>'name','placeholder'=>'Correo electronico']) !!}
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <label for="your-review">Tu comentario:</label>
                                                    {!! Form::textarea('review','',['id'=>'name','placeholder'=>'Escribe tu review']) !!}
                                                    @error('review')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    
                                                </div>
                                                <div class="col-12">
                                                    <input value="Agregar review" type="submit">
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                                <!--=======  End of review content  =======-->
                            </div>
                        </div>
                    </div>

                    <!--=======  End of product description review container  =======-->
                </div>
            </div>
        </div>
    </div>

    <div class="product-single-row-slider-area mb-40">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->

                    <div class="section-title mb-20">
                        <h2>Related Products</h2>
                    </div>

                    <!--=======  End of section title  =======-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  product single row slider wrapper  =======-->

                    <div class="product-single-row-slider-wrapper">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": true,
                            "infinite": false,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                             data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium13.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-15%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$70.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium15.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$30.00</span> <span class="main-price discounted">$50.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium16.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium17.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium9.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->


                        </div>
                    </div>

                    <!--=======  End of product single row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
@stop
