@extends ('layouts.aplicacion')
@section ('contenido')

<style>
#header {
    background: url(https://images.unsplash.com/photo-1415795854641-f4a487a0fdc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80) center center / cover no-repeat ;
}
</style>

<nav class="bg-dark navbar-dark">
  <!-- <div class="container">
    <a href="" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Forest</a>
  </div> -->
  </nav>
   <section id="header" class="jumbotron text-center">
     <h1 style=color:white class="display-3">Album de Animales de tu Region</h1>
</section>
  
<section id="gallery">
  <div class="container">
    <div class="row">
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="{{ asset('images/11.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Gato Andino</h5>
        <p class="card-text">En Peligro Crítico (CR) </p>
        <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card">
      <img src="{{ asset('images/33.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Chinchilla</h5>
       
      </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="{{ asset('images/44.png') }}" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Quirquincho</h5>
          <p class="card-text">En Peligro (EP)</p>
      </div>
     </div>
    </div>
  </div>
</div>
</section>


@stop

