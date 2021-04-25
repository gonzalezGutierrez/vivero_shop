{!! Form::open(['url'=>$category->url(),'method'=>$category->method(),'class'=>'form-horizontal form-bordered']) !!}

    <div class="form-group">
        <label class="col-md-3 control-label">Estatus <span class="text-danger">*</span></label>
        <div class="col-md-6">
            {!! Form::select('is_active',[0=>'Inactivo',1=>'Activo'],$category->is_active,['class'=>'form-control','placeholder'=>'Selecciona un estatus']) !!}
            @error('is_active')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">¿Tiene una categoría padre ?</label>
        <div class="col-md-6">
            {!! Form::select('parent_id',$categories,$category->parent_id,['class'=>'form-control','placeholder'=>'Selecciona una categoría']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Nombre de la categoría <span class="text-danger">*</span></label>
        <div class="col-md-6">
            {!! Form::text('name',$category->name,['class'=>'form-control','id'=>'name']) !!}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">SLUG <span class="text-danger">*</span></label>
        <div class="col-md-6">
            {!! Form::text('slug',$category->slug,['class'=>'form-control','id'=>'slug']) !!}
            @error('slug')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">URL Imagen </label>
        <div class="col-md-6 d-flex">
            {!! Form::text('image_url',$category->image_url,['class'=>'form-control']) !!}
            @error('image_url')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-12 divider-top-md text-center">
            <img src="{{$category->image_url}}" class="image-border" alt="">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Descripción</label>
        <div class="col-md-6">
            {!! Form::textarea('description',$category->description,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12 text-center">
            <button class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i> Guardar</button>
        </div>
    </div>

{!! Form::close() !!}
