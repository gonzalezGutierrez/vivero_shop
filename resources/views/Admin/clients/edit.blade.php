@extends('layouts.admin')

@section('title','Editar cliente')

@section('header_section')

    <header class="page-header">
        <h2>Editar cliente</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{asset('admin/')}}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/clientes')}}">
                        Clientes
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
                    <a href="{{asset('admin/users')}}" class="btn btn-sm btn-danger"><i class="fa fa-chevron-circle-left"></i> Cancelar</a>
                </header>
                <div class="panel-body">
                    @include('Admin.users.form',['role'=>'client'])
                </div>
            </section>

        </div>
    </div>
@stop
