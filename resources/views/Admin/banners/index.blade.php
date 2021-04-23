@extends('layouts.admin')
@section('title','Usuarios')
@section('header_section')
<header class="page-header">
   <h2>Banners</h2>
   <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
         <li>
            <a href="{{asset('admin')}}">
            <i class="fa fa-home"></i>
            </a>
         </li>
         <li><span>Banners</span></li>
      </ol>
      <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
   </div>
</header>
@stop
@section('content')
<!-- start: page -->
<div class="row">
   <div class="col-md-8 col-lg-12">
      <div class="tabs">
         <ul class="nav nav-tabs tabs-primary">
            <li class="active">
               <a href="#overview" data-toggle="tab">Banners</a>
            </li>
            <li>
               <a href="#edit" data-toggle="tab">Agregar Banners</a>
            </li>
         </ul>
         <div class="tab-content">
            <div id="overview" class="tab-pane active">
               <div class="d-flex">
                  <h4 class="mb-md">Banners disponibles</h4>
                  <span class="label-info label" style="padding: 5px;"> <i class="fa fa-image"></i></span>

               </div>
               <div class="row">
                  @foreach($banners as $banner)
                     <div class="col-md-4 col-xs-12">
                        <div class="card" style="padding: 5px;">
                           <img src="{{$banner->image_url}}" class="c_pointer image_gallery" style="width: 100%;" alt="">
                           <div class="image__btns__actions">
                              <div class="social-icons-list">
                                    {!! Form::open(['url'=>$banner->url(),'method'=>'DELETE']) !!}
                                       <button type="submit" class="btn btn-warning btn-sm" style="border-radius: 50%; width:30px; height:30px;" rel="tooltip" class="c_pointer" data-placement="bottom"  data-original-title="Eliminar"><i class="fa fa-times"></i><span></span></button>
                                    {!! Form::close() !!}
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
            <div id="edit" class="tab-pane">
               <h4 class="mb-xlg">Nuevo Banner</h4>
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
               <div class="panel-footer text-center">

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop