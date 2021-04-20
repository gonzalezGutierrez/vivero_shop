@extends('layouts.admin')

@section('title','Categorias')

@section('header_section')

    <header class="page-header">
        <h2>Categorías</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{asset('admin')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Categorías</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
        </div>
    </header>

@stop

@section('content')
    <section class="panel">
        <header class="panel-heading d-flex">
            <h2 class="panel-title">Mis categorias</h2>
            <a href="{{asset('admin/categories/create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Agregar</a>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="gradeX">
                        <td style="line-height: 26.8px;">{{$category->name}}</td>
                        <td style="line-height: 26.8px;">
                            @include('Admin.components.status',['status'=>$category->is_active])
                        </td>
                        <td style="line-height: 26.8px;">
                            <a href="{{asset('admin/categories/'.$category->slug.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Actualizar</a>

                            {!! Form::open(['url'=>$category->url(),'method'=>'delete','class'=>'form-inline-block']) !!}

                                <button class="btn btn-sm btn-danger" {{$category->is_active == 0 ? 'disabled' : ''}}><i class="fa fa-times-circle"></i> Eliminar</button>

                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@stop
