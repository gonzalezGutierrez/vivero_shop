@extends('layouts.master')

@section('title','Lista de deseos')

@section('content')

    <div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb content  =======-->

                    <div class="breadcrumb-content">
                        <ul>
                            <li class="has-child"><a href="{{asset('/')}}">Inicio</a></li>
                            <li>Lista de deseos</li>
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
                <div class="col-12">
                    <form action="#">
                        <!--=======  cart table  =======-->

                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Imagen</th>
                                        <th class="pro-title">Producto</th>
                                        <th class="pro-price">Precio</th>
                                        <th class="pro-remove">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="{{asset('productos/'.$product->slug)}}"><img src="{{$product->image_thumb_url}}" class="img-fluid" alt="Product"></a></td>
                                            <td class="pro-title"><a href="{{asset('productos/'.$product->slug)}}">{{$product->name}}</a></td>
                                            <td class="pro-price"><span>${{number_format($product->price,2,'.',',')}}</span></td>
                                            <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!--=======  End of cart table  =======-->


                    </form>


                </div>
            </div>
        </div>
    </div>
@stop
