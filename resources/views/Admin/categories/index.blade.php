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
            <h2 class="panel-title"> {{$option == 'sub_categories' ? 'Mis Sub Categorias' : 'Mis Categorías'}}</h2>
            <div class="buttons_actions">
                <a href="{{asset('admin/categories/create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Agregar</a>
                <a href="{{asset('admin/categories?option=sub_categories')}}" class="btn btn-primary btn-sm"><i class="fa fa-bookmark"></i> 
                    {{$option == 'sub_categories' ? 'Categorías' : 'Sub Categorias'}}
                </a>
            </div>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>Categoría</th>
                    <th>N° de sub categorías</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="gradeX">
                        <td style="line-height: 26.8px;">{{$category->name}}</td>
                        <td style="line-height: 26.8px;">
                            <span  data-toggle="modal" style="cursor:pointer; text-style:underline;" data-target="#modal_sub_categories_of_category_{{$category->id}}" > ({{$category->sub_categories->count()}}) ver mas</span>
                            <div class="modal fade" id="modal_sub_categories_of_category_{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header d-flex">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$category->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group">
                                                @foreach($category->sub_categories as $subcategory)
                                                    <li class="list-group-item">{{$subcategory->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
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
