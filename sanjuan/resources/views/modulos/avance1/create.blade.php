@extends ('layouts.admin')
@section ('contenido')



                <!-- Start content -->
              

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Asistencias</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">CSJ</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Estudiantes</a></li>
                                        <li class="breadcrumb-item active">Asistencias</li>
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
                                            <h4>Registro de Estudiantes</h4>

            
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
                                                {!!Form::open(array('url'=>'modulos/estudiantes','method'=>'POST','autocomplete'=>'off'))!!}
        {!!Form::token()!!}
        @if(empty( $cod ))
            @php
                $codigo='E001';
            @endphp
        @else
            <!-- //Generador de Codigo -->
            @foreach($cod as $co)
            <?php $cod=$co->Id+1;
            if(strlen($cod)==1){$codigo='E00'.$cod;}
            if(strlen($cod)==2){$codigo='E0'.$cod;}
            if(strlen($cod)>=3){$codigo='E'.$cod;}
            ?>
            @endforeach
        @endif
        <!-- <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
   -->

        <div class="row">
            <div class="form-group col-md-2">
                <label for="cod">Codigo</label>
                <input type="text" name="cod" class="form-control" value="<?php echo $codigo?>" readonly >
            </div>
            <div class="form-group col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control"  value="{{ old('nombre') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="ap_paterno">Apellido Paterno</label>
                <input type="text" name="ap_paterno" class="form-control"  value="{{ old('ap_paterno') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="ap_materno">Apellido Materno</label>
                <input type="text" name="ap_materno" class="form-control"  value="{{ old('ap_materno') }}">
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-3">
                <label for="fecha">Fecha</label>
                <input type="text" name="fecha" value="<?php echo date("Y-m-d");?>" readonly class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="c_identidad">Carnet de identidad</label>
                <input type="text" name="c_identidad" class="form-control"  value="{{ old('c_identidad') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="c_discapacidad">Carnet de discapacidad</label>
                <input type="text" name="c_discapacidad" class="form-control" value="{{ old('c_discapacidad') }}" >
            </div>
            <div class="form-group col-md-4">
                <label for="tipo_discapacidad">Tipo de discapacidad</label>
                <input type="text" name="tipo_discapacidad" class="form-control"  value="{{ old('tipo_discapacidad') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="grado">Grado</label>
                <input type="text" name="grado" class="form-control"  value="{{ old('grado') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="rude_es">Rude</label>
                <input type="text" name="rude_es" class="form-control"  value="{{ old('rude_es') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="lugar_nac">Lugar de Nacimiento</label>
                <input type="text" name="lugar_nac" class="form-control"  value="{{ old('lugar_nac') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_nac">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nac" class="form-control"  value="{{ old('fecha_nac') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="edad">Edad</label>
                <input type="text" name="edad" class="form-control"  value="{{ old('edad') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="sexo">Sexo</label>
                <!-- <input type="text" name="sexo" class="form-control" placeholder="sexo...."> -->
                <?php $sex=old('sexo') ;?>
                <select class="form-control" name="sexo"  autocomplete="off" >
                    <option disabled selected>Seleccionar</option>
                    <option value="Masculino" <?php if($sex=="Masculino") echo "selected";?>>Masculino</option>
                    <option value="Femenino" <?php if($sex=="Femenino") echo "selected";?>>Femenino</option>
                  </select>

                <!-- <label for="sexo">Sexo</label> -->
                <!-- <input type="text" name="sexo" class="form-control"  value="{{ old('sexo') }}"> -->
            </div>
            <div class="form-group col-md-4">
                <label for="nom_padre">Nombre del Padre</label>
                <input type="text" name="nom_padre" class="form-control" value="{{ old('nom_padre') }}" >
            </div>
            <div class="form-group col-md-4">
                <label for="ocup_padre">Ocupacion de Padre</label>
                <input type="text" name="ocup_padre" class="form-control" value="{{ old('ocup_padre') }}" >
            </div>
            <div class="form-group col-md-4">
                <label for="nom_madre">Nombre de la madre</label>
                <input type="text" name="nom_madre" class="form-control" value="{{ old('nom_madre') }}" >
            </div>
            <div class="form-group col-md-4">
                <label for="ocup_madre">Ocupacion de la Madre</label>
                <input type="text" name="ocup_madre" class="form-control"  value="{{ old('ocup_madre') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="unid_procedencia">Unidad de procedencia</label>
                <input type="text" name="unid_procedencia" class="form-control"  value="{{ old('unid_procedencia') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="grado_ant">Grado Anterior</label>
                <input type="text" name="grado_ant" class="form-control"  value="{{ old('grado_ant') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="domicilio">Domicilio</label>
                <input type="text" name="domicilio" class="form-control" value="{{ old('domicilio') }}" >
            </div>
            <div class="form-group col-md-4">
                <label for="celular">Celular</label>
                <input type="text" name="celular" class="form-control" value="{{ old('celular') }}" >
            </div>
            <div class="form-group col-md-4">
                <label for="obs">Observacion</label>
                <input type="text" name="obs" class="form-control" value="{{ old('obs') }}" >
            </div>
           
      
        <div class=" col-md-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
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



