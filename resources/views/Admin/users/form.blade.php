{!! Form::open(['url'=>$user->url($role),'method'=>$user->method(),'class'=>'form-horizontal form-bordered']) !!}
    <div class="form-group">
        <label class="col-md-3 control-label">Estatus</label>
        <div class="col-md-6">
            {!! Form::select('is_active',[0=>'Inactivo',1=>'Activo'],$user->is_active,['class'=>'form-control','placeholder'=>'Selecciona un estatus']) !!}
            @error('is_active')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Rol</label>
        <div class="col-md-6">
            {!! Form::select('role_id',$roles,$user->role_id,['class'=>'form-control','placeholder'=>'Selecciona un rol']) !!}
            @error('is_active')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 control-label">Nombre</label>
        <div class="col-md-6">
            {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Apellido</label>
        <div class="col-md-6">
            {!! Form::text('last_name',$user->last_name,['class'=>'form-control']) !!}
            @error('last_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-6">
            {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    @if ($user->method() != 'PUT')
        <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-6">
                {!! Form::password('password',['class'=>'form-control']) !!}
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Confirmar Password</label>
            <div class="col-md-6">
                {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    @endif

    <div class="form-group">
        <label class="col-md-3 control-label">No. Telefono</label>
        <div class="col-md-6">
            {!! Form::text('phone',$user->phone,['class'=>'form-control']) !!}
            @error('phone')
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
