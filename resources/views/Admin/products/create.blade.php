@extends('layouts.admin')

@section('title','Agregar producto')

@section('header_section')

    <header class="page-header">
        <h2>Agregar producto</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{asset('admin/')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/products')}}">
                        Productos
                    </a>
                </li>
                <li><span>Agregar</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"></a>

        </div>
    </header>

@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading d-flex">
                    <h2 class="panel-title">Formulario de registro</h2>
                    <a href="{{asset('admin/products')}}" class="btn btn-sm btn-danger"><i class="fa fa-chevron-circle-left"></i> Cancelar</a>
                </header>
                <div class="panel-body">
                    @include('Admin.products.form')
                </div>
            </section>

        </div>
    </div>
@stop

@section('js')

    <script>

        let slugify = new Slugify();


    </script>

@stop
