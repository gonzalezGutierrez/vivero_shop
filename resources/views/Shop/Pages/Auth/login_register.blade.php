@extends('layouts.master')

@section('title','Autentificación')

@section('breadcrumb')
    <div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb content  =======-->

                    <div class="breadcrumb-content">
                        <ul>
                            <li class="has-child"><a href="{{asset('/')}}">Inicio</a></li>
                            <li>Autentificación</li>
                        </ul>
                    </div>

                    <!--=======  End of breadcrumb content  =======-->
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="page-section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- Login Form s-->
                    <form action="#" >

                        <div class="login-form">
                            <h4 class="login-title">Acceder</h4>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" placeholder="Email Address">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-8">

                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>

                                </div>

                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>

                                <div class="col-md-12">
                                    <button class="register-button mt-0">Login</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    {!! Form::open(['url'=>'autentificacion/register','method'=>'POST']) !!}

                        <div class="login-form">
                            <h4 class="login-title">Registrate</h4>

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Nombre</label>
                                    {!! Form::text('name','',['class'=>'mb-0','placeholder'=>'Nombre']) !!}
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Apellido</label>
                                    {!! Form::text('last_name','',['class'=>'mb-0','placeholder'=>'Apellido']) !!}
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Correo electronico</label>
                                    {!! Form::email('email','',['class'=>'mb-0','placeholder'=>'Correo electronico']) !!}
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-20">
                                    <label>Telefono</label>
                                    {!! Form::text('phone','',['class'=>'mb-0','placeholder'=>'Telefono']) !!}
                                    @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                                <div class="col-md-6 mb-20">
                                    <label>Contraseña</label>
                                    {!! Form::password('password',['class'=>'mb-0','placeholder'=>'Contraseña']) !!}
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirmar contraseña</label>
                                    {!! Form::password('password_confirmation',['class'=>'mb-0','placeholder'=>'Confirmar Contraseña']) !!}
                                    @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="register-button mt-0">Registrate</button>
                                </div>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
