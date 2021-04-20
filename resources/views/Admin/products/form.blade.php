{!! Form::open(['url'=>$product->url(),'method'=>$product->method(),'class'=>'form-horizontal form-bordered']) !!}

<div class="form-group">
    <label class="col-md-3 control-label">Estatus</label>
    <div class="col-md-6">
        {!! Form::select('is_active_to_shop',[0=>'Inactivo en tienda',1=>'Activo en tienda'],$product->is_active_to_shop,['class'=>'form-control','placeholder'=>'Selecciona un estatus']) !!}
        @error('is_active')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Nombre del producto</label>
    <div class="col-md-6">
        {!! Form::text('name',$product->name,['class'=>'form-control','id'=>'name']) !!}
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">SLUG</label>
    <div class="col-md-6">
        {!! Form::text('slug',$product->slug,['class'=>'form-control','id'=>'slug']) !!}
        @error('slug')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">STOCK</label>
    <div class="col-md-6">
        {!! Form::text('stock',$product->stock,['class'=>'form-control','id'=>'name']) !!}
        @error('stock')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Minimo de compra</label>
    <div class="col-md-6">
        {!! Form::text('min_purchases',$product->min_purchases,['class'=>'form-control','id'=>'name']) !!}
        @error('min_purchases')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Precio</label>
    <div class="col-md-6">
        {!! Form::number('price',$product->price,['class'=>'form-control','id'=>'slug','step'=>'any']) !!}
        @error('price')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">URL Imagen</label>
    <div class="col-md-6 d-flex">
        {!! Form::text('image_thumb_url',$product->image_thumb_url,['class'=>'form-control']) !!}
        @error('image_thumb_url')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-12 divider-top-md text-center">
        <img src="{{$product->image_thumb_url}}" class="image-border img-circle" style="width: 150px; height: 150px;" alt="">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Categoría</label>
    <div class="col-md-6">
        {!! Form::select('category_id',$categories,$product->category_id,['class'=>'form-control','placeholder'=>'Selecciona una categoría']) !!}
        @error('category_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Descripción</label>
    <div class="col-md-6">
        {!! Form::textarea('description',$product->description,['class'=>'form-control']) !!}
        @error('description')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Recomendaciones</label>
    <div class="col-md-6">
        {!! Form::textarea('recommendations',$product->recommendations,['class'=>'form-control']) !!}
        @error('recommendations')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 text-center">
        <button class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i> Guardar</button>
    </div>
</div>

{!! Form::close() !!}
