@extends('layouts.master')

@section('title','Productos')

@section('content')

    <div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb content  =======-->

                    <div class="breadcrumb-content">
                        <ul>
                            <li class="has-child"><a href="{{asset('/')}}">Inicio</a></li>
                            <li>Productos</li>
                        </ul>
                    </div>

                    <!--=======  End of breadcrumb content  =======-->
                </div>
            </div>
        </div>
    </div>

    <div class="page-section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  page sidebar  =======-->

                    <div class="page-sidebar">

                        <!--=======  widget wrapper  =======-->
                        <div class="sidebar-widget-wrapper mb-30">
                            <!--=======  sidebar widget  =======-->

                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">CATEGORÍAS</h3>
                                <ul class="category-list">
                                    @foreach($categories as $category)
                                        <li><a href="{{asset('productos?category='.$category->id)}}" class="{{$category->id == $category_id ? 'active' : ''}}">{{$category->name}} ({{$category->products->count()}})</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--=======  End of sidebar widget  =======-->

                            <!--=======  sidebar widget  =======-->

                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title mb-30 mt-0">FILTRAR POR PRECIO</h3>

                                <div class="sidebar-price">
                                    <div id="price-range" class="mb-10"></div>
                                    <input type="text" id="price-amount" class="price-amount" readonly>
                                </div>
                            </div>
                        </div>
                        <!--=======  End of widget wrapper  =======-->

                        <!--=======  page sidebar banner  =======-->

                        <div class="page-sidebar-banner">
                            <a href="shop-left-sidebar.html">
                                <img src="{{asset('shop/assets/img/banners/banner-sidebar.jpg')}}" class="img-fluid" alt="">
                            </a>
                        </div>

                        <!--=======  End of page sidebar banner  =======-->

                    </div>

                    <!--=======  End of page sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  shop banner  =======-->

                    <div class="shop-banner mb-30">
                        <img src="{{asset('shop/assets/img/banners/shop-banner.jpg')}}" class="img-fluid" alt="">
                    </div>

                    <!--=======  End of shop banner  =======-->

                    <!--=======  shop header  =======-->

                    <div class="shop-header mb-30">
                        <div class="shop-header__left">
                            <div class="grid-icons mr-20">
                                <button data-target="grid three-column" data-tippy="3" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="0" data-tippy-arrow="true" data-tippy-theme = "sharpborder" class="active three-column"></button>
                                <button data-target="grid four-column" data-tippy="4" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="0" data-tippy-arrow="true" data-tippy-theme = "sharpborder"  class="four-column d-none d-lg-block"></button>
                                <button data-target="list" data-tippy="Lista" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder"  class="list-view"></button>
                            </div>

                            <div class="shop-header__left__message">
                                {{$productsTotal}} Resultados
                            </div>
                        </div>

                        <div class="shop-header__right">

                            <div class="single-select-block d-inline-block mr-50 mr-lg-10 mr-md-10 mr-sm-10">

                            </div>

                            <div class="single-select-block d-inline-block">
                                <span class="select-title">Ordenar por:</span>
                                <select>
                                    <option value="1">Default</option>
                                    <option value="2">Nombre (A-Z)</option>
                                    <option value="5">Nombre (Z-A)</option>
                                    <option value="3">Precio (min - max)</option>
                                    <option value="4">Precio (max - min)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of shop header  =======-->

                    <!--=======  shop page content  =======-->

                    <div class="row shop-product-wrap grid three-column mb-10">
                        @foreach($products as $product)
                            <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                                <!--=======  grid view product  =======-->

                                <div class="single-slider-product grid-view-product">
                                    <div class="single-slider-product__image">
                                        <a href="{{asset('productos/'.$product->slug)}}">
                                            <img src="{{$product->image_thumb_url}}" class="img-fluid" alt="">
                                        </a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="{{asset('productos/'.$product->slug)}}">{{$product->name}}</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">${{number_format($product->price,2,'.',',')}}</span> <span class="main-price discounted">${{number_format($product->price*1.10,2,'.',',')}}</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                                <!--=======  End of grid view product  =======-->

                                <!--=======  grid view product  =======-->

                                <div class="single-slider-product single-slider-product--list-view list-view-product">
                                    <div class="single-slider-product__image single-slider-product--list-view__image">
                                        <a href="{{asset('productos/'.$product->slug)}}">
                                            <img src="{{$product->image_thumb_url}}" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="single-slider-product__content  single-slider-product--list-view__content">
                                        <div class="single-slider-product--list-view__content__details">
                                            <p class="product-title"><a href="{{asset('productos/'.$product->slug)}}">{{$product->name}}</a></p>
                                            <div class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star"></i>
                                            </div>

                                            <p class="short-desc">{{$product->description}}</p>
                                        </div>

                                        <div class="single-slider-product--list-view__content__actions">
                                            <div class="availability mb-10">
                                                <span class="availability-title">Stock:</span>
                                                <span class="availability-value"> {{$product->stock > 0 ? 'Disponible' : 'no disponible'}} </span>
                                            </div>

                                            <p class="product-price"><span class="discounted-price">${{number_format($product->price,2,'.',',')}}</span> <span class="main-price discounted">${{number_format($product->price*1.10,2,'.',',')}}</span></p>
                                            
                                            {!! Form::open(['url'=>asset('products_in_shopping_carts/'.$product->slug),'method'=>'POST']) !!}
                                                <button type="submit" class="theme-button list-cart-button mb-10"> <i class="fa fa-shopping-cart"></i> Agregar</button>
                                            {!! Form::close() !!}
                                            <div class="hover-icons">
                                                <ul>
                                                    <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!--=======  End of grid view product  =======-->

                            </div>
                        @endforeach
                        {{--<div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-5%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span class="main-price discounted">$100.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-5%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$40.00</span> <span class="main-price discounted">$100.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-2%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">lorem ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-2%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$40.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium13.jpg" class="img-fluid" alt="">
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
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
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

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium13.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
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
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum plant</a></p>
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

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
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
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
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

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium9.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium8.jpg" class="img-fluid" alt="">
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
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
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

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium8.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium1.jpg" class="img-fluid" alt="">
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
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
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

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium1.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium2.jpg" class="img-fluid" alt="">
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
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
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

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img src="assets/img/products/medium2.jpg" class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>--}}

                    </div>

                    <!--=======  End of shop page content  =======-->

                    <!--=======  pagination  =======-->

                    <div class="pagination-section mb-md-30 mb-sm-30">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">></a></li>
                            <li><a href="#">>|</a></li>
                        </ul>

                        <div class="pagination-text">
                            Showing 1 to 9 of 15 (2 Pages)
                        </div>
                    </div>

                    <!--=======  End of pagination  =======-->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                                <!--=======  big image slider  =======-->

                                <div class="big-image-slider-wrapper">
                                    <div class="ht-slick-slider big-image-slider"
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
                                            <img src="assets/img/products/big1-1.jpg" class="img-fluid" alt="">
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
                                        "asNavFor": ".big-image-slider",
                                        "focusOnSelect": true,
                                        "arrows": true,
                                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                                    }'
                                         data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 2} }
                                    ]'
                                    >

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img src="assets/img/products/small1-1.jpg" class="img-fluid" alt="">
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
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <!--=======  product detail content  =======-->

                                <div class="product-detail-content">
                                    <div class="tags mb-5">
                                        <span class="tag-title">Tags:</span>
                                        <ul class="tag-list">
                                            <li><a href="#">Plant</a>,</li>
                                            <li><a href="#">Garden</a></li>
                                        </ul>
                                    </div>

                                    <h3 class="product-details-title mb-15">Lorem ipsum indoor plants</h3>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price product-price--big mb-10"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                    <div class="product-info-block mb-30">
                                        <div class="single-info">
                                            <span class="title">Ex Tax:</span>
                                            <span class="value">$95.00</span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Brand:</span>
                                            <span class="value"><a href="#">Brac</a></span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Product Code:</span>
                                            <span class="value">abcd1234</span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Availability:</span>
                                            <span class="value stock-red">In stock</span>
                                        </div>
                                    </div>

                                    <div class="product-short-desc mb-25">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas consectetur inventore voluptatem dignissimos nemo repellendus est, harum maiores veritatis quidem.</p>
                                    </div>

                                    <div class="quantity mb-20">
                                        <span class="quantity-title mr-20">Qty</span>
                                        <div class="pro-qty mr-15 mb-lg-20 mb-md-20 mb-sm-20">
                                            <input type="text" value="1">
                                        </div>
                                        <button class="theme-button product-cart-button">+ Add to Cart</button>
                                    </div>

                                    <div class="compare-button mb-15">
                                        <a href="#"><i class="icon-sliders"></i> Compare This Product</a>
                                    </div>

                                    <div class="wishlist-button">
                                        <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                                    </div>
                                </div>

                                <!--=======  End of product detail content  =======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
