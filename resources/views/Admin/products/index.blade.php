@extends('layouts.admin')
@section('title','Listado de productos')

@section('header_section')

    <header class="page-header">
        <h2>Productos</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{asset('admin')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Productos</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
        </div>
    </header>

@stop

@section('content')
    <section class="panel">
        <header class="panel-heading d-flex">
            <h2 class="panel-title">Mis productos</h2>
            <a href="{{asset('admin/products/create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Agregar</a>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Compra minima</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="gradeX">
                        <td style="line-height: 26.8px;"></td>
                        <td style="line-height: 26.8px;">{{$product->name}}</td>
                        <td style="line-height: 26.8px;">${{number_format($product->price,2,'.',',')}}</td>
                        <td style="line-height: 26.8px;">{{$product->stock}}</td>
                        <td style="line-height: 26.8px;">{{$product->min_purchases}}</td>
                        <td style="line-height: 26.8px;">
                            @include('Admin.components.status',['status'=>$product->is_active_to_shop])
                        </td>
                        <td style="line-height: 26.8px;">
                            <a href="{{asset('admin/products/'.$product->slug.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Actualizar</a>

                            {!! Form::open(['url'=>$product->url(),'method'=>'delete','class'=>'form-inline-block']) !!}

                                <button type="submit" class="btn btn-sm btn-danger" {{$product->is_active_to_shop == 0 ? 'disabled' : ''}}><i class="fa fa-times-circle"></i> Eliminar</button>

                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@stop
