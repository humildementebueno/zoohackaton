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
     <h1 style=color:white class="display-3">Animales que no podremos conocer</h1>
</section>
  
<section id="gallery">
  <div class="container">
    <div class="row">
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="{{ asset('images/10.png') }}" alt="" class="card-img-top">
      <div class="card-body">
      <h5 class="card-title">Puma oriental</h5>
          <p class="card-text">En enero de 2018 se declaró que el Puma Oriental, Puma del Este, León de montaña o el Gato Fantasma, como se lo conocía popularmente, dejó de existir y fue el primer animal oficialmente declarado extinto por el Servicio de Vida Salvaje y Pesca de Estados Unidos.</p>

      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card">
      <img src="{{ asset('images/13.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Guacamayo azul</h5>
        <p class="card-text">Esta especie endémica de Brasil se extinguió en su forma salvaje a causa de la deforestación en su entorno y la cacería masiva para ser comerciadas como aves exóticas por su peculiar belleza, según reveló en un estudio la organización Bird Life en septiembre de 2018.

El guacamayo azul fue declarado extinto el 5 de septiembre de 2018 luego de no ver a un solo individuo durante 18 años. Se cree que el último guacamayo Spix, nombre científico de esta especie, habría muerto en Brasil en el año 2000.

Se cree que aunque la especie está extinta en la naturaleza, existen entre 60 y 80 guacamayos azules que sobreviven en cautiverio.</p>
      </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="{{ asset('images/99.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Tortuga gigante de Pinta</h5>
        <p class="card-text">El último ejemplar de esta especie vivía en la isla de Pinta, ubicada en las islas Galápagos, Ecuador, se le conocía como el Solitario George y falleció el 24 de junio de 2012 por desgaste de su propia edad, más de 100 años.

Los registros de la tortuga gigante en la isla se inician en el siglo XVII y extiende hasta el XIX cuando comenzaron a ser víctimas de la caza indiscriminada por parte de piratas, contrabandistas y marineros. En ese período, se estima, asesinaron a más de 100 mil de ellas.

La especie fue declarada extinta en 2016 porque no se logró encontrar nuevos ejemplares tras el fallecimiento del Solitario George</p>
      </div>
     </div>
    </div>
  </div>
</div>
</section>


@stop

