@extends('layouts.master')

@section('title','Carrito de compras')

@section('content')

<div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  breadcrumb content  =======-->
                
                <div class="breadcrumb-content">
                    <ul>
                        <li class="has-child"><a href="{{asset('/')}}">Inicio</a></li>
                        <li>Carrito de compras</li>
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
                <div class="cart-table table-responsive mb-40">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Imagen</th>
                                <th class="pro-title">Producto</th>
                                <th class="pro-price">Precio</th>
                                <th class="pro-quantity">Cantidad</th>
                                <th class="pro-subtotal">Subtotal</th>
                                <th class="pro-remove">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="pro-thumbnail">
                                        <a href="{{asset('productos/'.$product->slug)}}">
                                            <img src="{{$product->image_thumb_url}}" class="img-fluid" alt="Product">
                                        </a>
                                    </td>
                                    <td class="pro-title"><a href="{{asset('productos/'.$product->slug)}}">{{$product->name}}</a></td>
                                    <td class="pro-price"><span>${{number_format($product->price,2,'.',',')}}</span></td>
                                    <td class="pro-quantity">
                                        {!! Form::open(['url'=>'products_in_shopping_carts/'.$product->slug,'method'=>'POST']) !!}
                                            <div class="pro-qty"><input type="text" name="amount" value="{{$product->amount}}"></div>
                                        {!! Form::close() !!}
                                    </td> 
                                    <td class="pro-subtotal"><span>${{number_format($product->subtotal,2,'.',',')}}</span></td>
                                    <td class="pro-remove">
                                        {!! Form::open(['url'=>asset('products_in_shopping_carts/'.$product->slug),'method'=>'DELETE']) !!}
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    
                <div class="row">

                    <div class="col-lg-6 col-12">
                        
                        <div class="discount-coupon">
                            <h4>Cupón de descuento</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="text" placeholder="Codigo del cupón">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="submit" value="Aplicar">
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!--=======  End of Discount Coupon  =======-->
                        
                    </div>

                    
                    <div class="col-lg-6 col-12 d-flex">
                        <!--=======  Cart summery  =======-->
                    
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>Resumen de la compra</h4>
                                <p>Subtotal <span> ${{number_format($total,2,'.',',')}} MXN</span></p>
                                <p>Costo de envio <span>$00.00</span></p>
                                <h2>Total <span>${{number_format($total,2,'.',',')}} MXN</span></h2>
                            </div>
                            <div class="cart-summary-button">
                                <button class="checkout-btn">Pagar carrito</button>
                                <button class="update-btn">Ir a tienda</button>
                            </div>
                        </div>
                    
                        <!--=======  End of Cart summery  =======-->
                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>

@stop