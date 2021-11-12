@extends ('layouts.admin')
@section ('contenido')


                <!-- Start content -->
              

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Estudiantes</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">CSJ</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Estudiantes</a></li>
                                        <li class="breadcrumb-item active">Estudiantes</li>
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
                                            <h4>Listado de Estudiantes <a href="estudiantes/create"><button class="btn btn-success">Registrar</button></a></h4>
                                            @include('modulos.estudiantes.search')

                                            <div class="row icon-demo-content">
                                          
                                                
                                            </div>
                                            <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Cod</th>
                    <th>Nombre</th>
                    <th>App Paterno</th>
                    <th>App Materno</th>
                    <th>Domicilio</th>
                    <th>Cel</th>
                    <th>Grado</th>
                    <th>Opcion</th>
                </thead>
                <?php $n=1?>
               @foreach($estudiantes as $estudiante)
               <tr>
                <td><?php echo $n; $n++?></td>
                <td>{{$estudiante->cod}}</td>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->ap_paterno}}</td>
                <td>{{$estudiante->ap_materno}}</td>
                <td>{{$estudiante->domicilio}}</td>
                <td>{{$estudiante->celular}}</td>
                <td>{{$estudiante->grado}}</td>
               
                
                <td>
                <a href="{{URL::action('ControllerKardex@index',['id'=>$estudiante->id])}}" target="_blank"><button class="btn btn-success">Kardex</button></a>
                <a href="{{URL::action('ControllerEstudiante@edit',$estudiante->id)}}"><button class="btn btn-warning">Editar</button></a>
                <a href="" data-target="#modal-delete-{{$estudiante->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                </td>
  
                
                </tr>
                @include('modulos.estudiantes.modal') 
               @endforeach
              
            
                
           
            </table>
        </div>
        {{$estudiantes->render()}}
    </div>
</div> 
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page content-->

                   
               

         



@stop

