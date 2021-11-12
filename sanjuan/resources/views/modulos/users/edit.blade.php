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
                                        <li class="breadcrumb-item active">Edicion Usuarios</li>
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
                                            <h4>Edicion de Usuarios</h4>

            
                                            <div class="row icon-demo-content">

                                                
                                            </div>
                                            <h3>Editar Persona: {{$usuario->name}}</h3>
        @if (count($errors)>0)
        </div>

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>        
        @endif
                                                
        {!!Form::model($usuario,['method'=>'PATCH','route'=>['modulos.users.update',$usuario->id]])!!}
          {!!Form::token()!!}

          <div class="row">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-4" >
                            <label for="name" >Nombre Completo</label>

                         
                                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" placeholder="Nombre....">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-5">
                            <label for="email" >E-Mail </label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email }}" placeholder="E-Mail....">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-4">
                            <label for="password">Contraseña</label>

                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña....">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
         <!-- </div>
         <div class="row"> -->
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
                <input type="text" name="ci" class="form-control" value="{{ $usuario->ci }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-2">
                <label for="sexo">Sexo</label>
                <!-- <input type="text" name="sexo" class="form-control" placeholder="sexo...."> -->
                
                <select class="form-control" name="sexo"  autocomplete="off" >
                    <option disabled selected>Seleccionar</option>
                    <option value="Masculino" <?php if($usuario->sexo=="Masculino") echo "selected";?>>Masculino</option>
                    <option value="Femenino" <?php if($usuario->sexo=="Femenino") echo "selected";?>>Femenino</option>
                  </select>

            </div>
            
            <div class="form-group col-md-3">
                    <label for="fecha_nac">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nac" class="form-control" value="{{ $usuario->fecha_nac }}">
            </div>
            <div class="form-group col-md-3">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{ $usuario->direccion }}">
            </div>
            <div class="form-group col-md-3">
                <label for="cel">Celular</label>
                <input type="text" name="cel" class="form-control" value="{{ $usuario->cel }}">
            </div>
        </div>

        <div class="form-group col-md-12">
            <!-- <div class="form-group col-md-3">
                <label for="foto">foto</label>
                <input type="text" name="foto" class="form-control" placeholder="foto....">
            </div> -->
            <div class="form-group col-md-3">
                <input type="hidden" name="tipo" class="form-control" value='<?php echo $usuario->tipo;?> '>
                <!-- <select class="form-control" name="tipo" autocomplete="off" >
                <option disabled selected>Seleccionar</option>
                    <option value="0" <?php// if($usuario->tipo==0) echo "selected";?> >Administrador</option>
                    <option value="1" <?php if($usuario->tipo==1) echo "selected";?> >Encargado</option>
                  </select> -->
            </div>
            <!-- <div class="form-group col-md-3"> -->
                <!-- <label for="activo">activo</label> -->
                <input type="hidden" name="activo" class="form-control" value="{{ $usuario->activo }}">
            </div>
        <br>
            <div class="form-group col-md-3">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
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



