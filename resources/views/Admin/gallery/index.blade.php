@extends('layouts.admin')
@section('header_section')
    <header class="page-header">
        <h2>Galería de fotos</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{asset('/admin')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{asset('/admin/products')}}">
                        Productos
                    </a>
                </li>
                <li>
                    <a href="{{asset('/admin/products/'.$product->slug)}}">
                        {{$product->name}}
                    </a>
                </li>
                <li><span>Galeria</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
@stop
@section('content')
    <div class="row">


        <div class="col-md-4 col-lg-3">

            <section class="panel">
                <div class="panel-body">
                    <div class="thumb-info mb-md">
                        <img src="{{$product->image_thumb_url}}" class="rounded img-responsive" alt="John Doe">
                    </div>

                    <div class="widget-toggle-expand mb-md">
                        <div class="widget-header">
                            <h6>Detalle del producto</h6>
                            <div class="widget-toggle">+</div>
                        </div>
                        <div class="widget-content-expanded">
                            <ul class="simple-todo-list">
                                <li class="completed"><strong>Producto: </strong> {{$product->name}}</li>
                                <li class="completed"><strong>Categoria: </strong> {{$product->category->name}}</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="dotted short">

                    <h6 class="text-muted">Descripción</h6>
                    <p class="text-justify">{{$product->description}}</p>

                    <hr class="dotted short">

                    <div class="social-icons-list">
                        <a rel="tooltip" data-placement="bottom" target="_blank" href="{{asset('').'productos/'.$product->slug}}" data-original-title="{{$product->name}}"><i class="fa fa-shopping-cart"></i><span>URL</span></a>
                        <a rel="tooltip" data-placement="bottom" href="{{asset('').'categorias/'.$product->category->slug}}" data-original-title="{{$product->category->name}}"><i class="fa fa-bookmark"></i><span>Twitter</span></a>
                    </div>

                </div>
            </section>

        </div>
        <div class="col-md-8 col-lg-6">
            @if(Session::has('status_warning'))
                <div class="alert alert-danger">
                    <strong>{{Session::get('status_warning')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="tabs">
                <ul class="nav nav-tabs tabs-primary">
                    <li class="active">
                        <a href="#overview" data-toggle="tab">Imagenes</a>
                    </li>
                    <li>
                        <a href="#edit" data-toggle="tab">Agregar al album</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="overview" class="tab-pane active">

                        <div class="d-flex">
                            <h4 class="mb-md">Imágenes disponibles</h4>
                            <span class="label-info label" style="padding: 5px;"> <i class="fa fa-image"></i> {{$images->count()}}</span>
                        </div>

                        <section class="simple-compose-box mb-xlg">
                            <div class="row">
                                @foreach($images as $image)
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card" style="padding: 5px;">
                                            <img src="{{$image->image_url}}" class="c_pointer image_gallery" style="width: 100%;" alt="">
                                            <div class="image__btns__actions">
                                                <div class="social-icons-list">
                                                    {!! Form::open(['url'=>$image->url($product->slug),'method'=>$image->method()]) !!}
                                                    <button type="submit" class="btn btn-warning btn-sm" style="border-radius: 50%; width:30px; height:30px;" rel="tooltip" class="c_pointer" data-placement="bottom"  data-original-title="Eliminar"><i class="fa fa-times"></i><span></span></button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                    <div id="edit" class="tab-pane">
                        {!! Form::open(['url'=>$image->url(),'method'=>$image->method()]) !!}
                            <h4 class="mb-xlg">Agregar imágenes</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileFirstName">Titulo</label>
                                    <div class="col-md-8">
                                        {!! Form::text('title','',['class'=>'form-control']) !!}
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileLastName">URL Imágen</label>
                                    <div class="col-md-8">
                                        {!! Form::text('image_url','',['class'=>'form-control']) !!}
                                    </div>
                                </div>
                               
                            </fieldset>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Guardar</button>
                                    </div>
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">

            <h4 class="mb-md">Sale Stats</h4>
            <ul class="simple-card-list mb-xlg">
                <li class="primary">
                    <h3>488</h3>
                    <p>Nullam quris ris.</p>
                </li>
                <li class="primary">
                    <h3>$ 189,000.00</h3>
                    <p>Nullam quris ris.</p>
                </li>
                <li class="primary">
                    <h3>16</h3>
                    <p>Nullam quris ris.</p>
                </li>
            </ul>

            <h4 class="mb-md">Projects</h4>
            <ul class="simple-bullet-list mb-xlg">
                <li class="red">
                    <span class="title">Porto Template</span>
                    <span class="description truncate">Lorem ipsom dolor sit.</span>
                </li>
                <li class="green">
                    <span class="title">Tucson HTML5 Template</span>
                    <span class="description truncate">Lorem ipsom dolor sit amet</span>
                </li>
                <li class="blue">
                    <span class="title">Porto HTML5 Template</span>
                    <span class="description truncate">Lorem ipsom dolor sit.</span>
                </li>
                <li class="orange">
                    <span class="title">Tucson Template</span>
                    <span class="description truncate">Lorem ipsom dolor sit.</span>
                </li>
            </ul>

            <h4 class="mb-md">Messages</h4>
            <ul class="simple-user-list mb-xlg">
                <li>
                    <figure class="image rounded">
                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                    </figure>
                    <span class="title">Joseph Doe Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
                <li>
                    <figure class="image rounded">
                        <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                    </figure>
                    <span class="title">Joseph Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
                <li>
                    <figure class="image rounded">
                        <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                    </figure>
                    <span class="title">Joe Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
                <li>
                    <figure class="image rounded">
                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                    </figure>
                    <span class="title">Joseph Doe Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
            </ul>
        </div>

    </div>
@stop
