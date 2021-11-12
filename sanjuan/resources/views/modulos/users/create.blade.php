@extends ('layouts.admin')
@section ('contenido')



                <!-- Start content -->
              

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Usuarios</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">CSJ</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Usuarios</a></li>
                                        <li class="breadcrumb-item active">Nuevo Usuario</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <!-- <h4 class="mt-0 header-title">Examples</h4> -->
                                            <h4>Registro de Usuarios</h4>

            
                                            <!-- <div class="row icon-demo-content">

                                                
                                            </div> -->
                                            @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>        
        @endif

                                                {!!Form::open(array('url'=>'modulos/users','method'=>'POST','autocomplete'=>'off'))!!}
        {!!Form::token()!!}

        
        <div class="row">
             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-4" >
                 <label for="name" >Nombre Completo</label>
                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre....">
                     @if ($errors->has('name'))
                         <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
                         </span>
                     @endif
             </div>

             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-5">
                 <label for="email" >E-Mail </label>
                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail....">
                     @if ($errors->has('email'))
                         <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                     @endif
             </div>
                        
        </div>
        <div class="row">

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-4">
                    <label for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña....">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
            </div>
           
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col-md-4">
                <label for="password-confirm" >Confirma Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar....">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group col-md-3">
                <label for="ci">Ci</label>
                <input type="text" name="ci" class="form-control" value="{{ old('ci') }}" placeholder="Ci....">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-2">
                <label for="sexo">Sexo</label>
                <!-- <input type="text" name="sexo" class="form-control" placeholder="sexo...."> -->
                <?php $sex=old('sexo') ;?>
                <select class="form-control" name="sexo"  autocomplete="off" >
                    <option disabled selected>Seleccionar</option>
                    <option value="Masculino" <?php if($sex=="Masculino") echo "selected";?>>Masculino</option>
                    <option value="Femenino" <?php if($sex=="Femenino") echo "selected";?>>Femenino</option>
                  </select>

            </div>

            <div class="form-group col-md-3">
                    <label for="fecha_nac">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nac" class="form-control" value="{{ old('fecha_nac') }}" placeholder="Fecha nac....">
            </div>
            <div class="form-group col-md-3">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}" placeholder="Direccion....">
            </div>
            <div class="form-group col-md-3">
                <label for="cel">Celular</label>
                <input type="text" name="cel" class="form-control" value="{{ old('cel') }}" placeholder="Cel....">
            </div>
        </div>

        <div class="form-group col-md-12">
            <!-- <div class="form-group col-md-3">
                <label for="foto">foto</label>
                <input type="text" name="foto" class="form-control" placeholder="foto....">
            </div> -->
            <!-- <div class="form-group col-md-3"> -->
                <!-- <label for="tipo">Tipo</label> -->
                <input type="hidden" name="tipo" class="form-control" value="1">
                <!-- <select class="form-control" name="tipo" autocomplete="off" >
                    <option disabled selected>Seleccionar</option>
                    <option value="0">Administrador</option>
                    <option value="1">Encargado</option>
                  </select> -->
            <!-- </div> -->
            <!-- <div class="form-group col-md-3"> -->
                <!-- <label for="activo">activo</label> -->
                <input type="hidden" name="activo" class="form-control" value="1">
            </div>
        <br>
            <div class="form-group col-md-3">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
                <!-- <button class="btn btn-danger" type="reset">Cancelar</button> -->
            </div>
        </div>
        {!!Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page content-->

                   
               

         



@stop



