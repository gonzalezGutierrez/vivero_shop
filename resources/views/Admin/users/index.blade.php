@extends('layouts.admin')

@section('title','Usuarios')

@section('header_section')

    <header class="page-header">
        <h2>Usuarios</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{asset('admin')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Usuarios</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
        </div>
    </header>

@stop

@section('content')
    <section class="panel">
        <header class="panel-heading d-flex">
            <h2 class="panel-title">Lista usuarios</h2>
            <a href="{{asset('admin/users/create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Agregar</a>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>No.Telefono</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="gradeX">
                        <td style="line-height: 26.8px;">{{$user->name.' '.$user->last_name}}</td>
                        <td style="line-height: 26.8px;">{{$user->email}}</td>
                        <td style="line-height: 26.8px;">{{$user->phone}}</td>
                        <td style="line-height: 26.8px;">
                            @include('Admin.components.status',['status'=>$user->is_active])
                        </td>
                        <td style="line-height: 26.8px;">
                            <a href="{{asset('admin/users/'.$user->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Actualizar</a>

                            {!! Form::open(['url'=>$user->url(),'method'=>'delete','class'=>'form-inline-block']) !!}

                                <button class="btn btn-sm btn-danger" {{$user->is_active == 0 ? 'disabled' : ''}}><i class="fa fa-times-circle"></i> Eliminar</button>

                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@stop
