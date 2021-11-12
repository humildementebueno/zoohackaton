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
                                            <h4>Edicion de Estudiantes</h4>

            
                                            <div class="row icon-demo-content">

                                                
                                            </div>
                                            <h3>Editar estudiante: {{$estudiante->nombre}} {{$estudiante->ap_paterno}} {{$estudiante->ap_materno}}</h3>
                                            @if (count($errors)>0)
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>        
                                                @endif
                                                {!!Form::model($estudiante,['method'=>'PATCH','route'=>['modulos.estudiantes.update',$estudiante->id]])!!}
        {!!Form::token()!!}
       

        <div class="row">
            <div class="form-group col-md-2">
                <label for="cod">Codigo</label>
                <input type="text" name="cod" value="{{$estudiante->cod}}" class="form-control" readonly >
            </div>
            <div class="form-group col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{$estudiante->nombre}}" class="form-control"  >
            </div>
            <div class="form-group col-md-3">
                <label for="ap_paterno">Apellido Paterno</label>
                <input type="text" name="ap_paterno" value="{{$estudiante->ap_paterno}}" class="form-control"  >
            </div>
            <div class="form-group col-md-3">
                <label for="ap_materno">Apellido Materno</label>
                <input type="text" name="ap_materno" value="{{$estudiante->ap_materno}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" value="{{$estudiante->fecha}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="c_identidad">Carnet de identidad</label>
                <input type="text" name="c_identidad" value="{{$estudiante->c_identidad}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="c_discapacidad">Carnet de discapacidad</label>
                <input type="text" name="c_discapacidad" value="{{$estudiante->c_discapacidad}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="tipo_discapacidad">Tipo de discapacidad</label>
                <input type="text" name="tipo_discapacidad" value="{{$estudiante->tipo_discapacidad}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="grado">Grado</label>
                <input type="text" name="grado" value="{{$estudiante->grado}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="rude_es">Rude</label>
                <input type="text" name="rude_es" value="{{$estudiante->rude_es}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="lugar_nac">Lugar de Nacimiento</label>
                <input type="text" name="lugar_nac" value="{{$estudiante->lugar_nac}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_nac">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nac" value="{{$estudiante->fecha_nac}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="edad">Edad</label>
                <input type="text" name="edad" value="{{$estudiante->edad}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="sexo">Sexo</label>
                <!-- <input type="text" name="sexo" value="{{$estudiante->sexo}}" class="form-control"  > -->
                
                <select class="form-control" name="sexo"  autocomplete="off" >
                    <option disabled selected>Seleccionar</option>
                    <option value="Masculino" <?php if($estudiante->sexo=="Masculino") echo "selected";?>>Masculino</option>
                    <option value="Femenino" <?php if($estudiante->sexo=="Femenino") echo "selected";?>>Femenino</option>
                  </select>
            </div>
            <div class="form-group col-md-4">
                <label for="nom_padre">Nombre del Padre</label>
                <input type="text" name="nom_padre" value="{{$estudiante->nom_padre}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="ocup_padre">Ocupacion de Padre</label>
                <input type="text" name="ocup_padre" value="{{$estudiante->ocup_padre}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nom_madre">Nombre de la madre</label>
                <input type="text" name="nom_madre" value="{{$estudiante->nom_madre}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="ocup_madre">Ocupacion de la Madre</label>
                <input type="text" name="ocup_madre" value="{{$estudiante->ocup_madre}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="unid_procedencia">Unidad de procedencia</label>
                <input type="text" name="unid_procedencia" value="{{$estudiante->unid_procedencia}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="grado_ant">Grado Anterior</label>
                <input type="text" name="grado_ant" value="{{$estudiante->grado_ant}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="domicilio">Domicilio</label>
                <input type="text" name="domicilio" value="{{$estudiante->domicilio}}" class="form-control"  >
            </div>
            <div class="form-group col-md-4">
                <label for="celular">Celular</label>
                <input type="text" name="celular" value="{{$estudiante->celular}}" class="form-control"  >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="obs">Observacion</label>
                <input type="text" name="obs" value="{{$estudiante->obs}}" class="form-control"  >
            </div>
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



