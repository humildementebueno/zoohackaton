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
                                        <li class="breadcrumb-item active">Usuarios</li>
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
                                            <h4>Listado de Usuarios <a href="users/create"><button class="btn btn-success">Registrar</button></a></h4>
                                            @include('modulos.users.search')

                                            <div class="row icon-demo-content">
                                          
                                                
                                            </div>
                                            <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Ci</th>
                    <th>Sexo</th>
                    <th>Fecha Nac</th>
                    <th>Direccion</th>
                    <th>Cel</th>
                    <!-- <th>foto</th> -->
                    <th>Tipo</th>
                    <th>Opcion</th>
                    <!-- <th>activo</th> -->
                </thead>
               <?php $i=1; ?>
               @foreach($usuarios as $usu)
               @if ($usu->activo!="0")
               <tr>
                <td><?php echo $i; ?></td>
                <td>{{$usu->name}}</td>
                <td>{{$usu->email}}</td>
                <td>{{$usu->ci}}</td>
                <td>{{$usu->sexo}}</td>
                <td>{{$usu->fecha_nac}}</td>
                <td>{{$usu->direccion}}</td>
                <td>{{$usu->cel}}</td>
                <!-- <td>{{$usu->foto}}</td> -->
                <td><?php $m=($usu->tipo=="0")? "Administrador" : "Encargado"; echo $m;?></td>
                <!-- <td>{{$usu->activo}}</td> -->
                <td>
                    <a href="{{URL::action('ControllerUsuario@edit',$usu->id)}}"><button class="btn btn-primary">Editar</button></a>
                    <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>

                </td> 
                
                </tr>
                <?php $i++; ?>
               @include('modulos.users.modal') 
               @endif
               @endforeach
            </table>

        </div>
        {{$usuarios->render()}}
    </div>
</div> 
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page content-->

                   
               

         



@stop

