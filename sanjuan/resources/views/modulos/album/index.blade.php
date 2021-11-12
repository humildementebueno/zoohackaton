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
        <p class="card-text">"Es un gato de tamaño mediano que se caracteriza principalmente por tener una cola gruesa, cilindrica y larga

que mude de 410-485 mm, representando el 66-75 % del largo de cabeza y cuerpo, el cual varia de 740-850 mm

(Garcia Perta, 2002), Con relación al peso, solamente se tienen dos registros, 4 kg para un ejemplar sub-adulto

del Perú (Pearson, 1957) y 4,5 kg de una hembra adulta de Bolivia (Delgado et al., 2004)

Presenta un pelaje de color predominante gris cenizo con manchas marrón claro a marrón rojzo dispuestas en forma vertical a ambos lados del cuerpo, aparentando franjas continuas. La cola, también gns, presenta 6-9 anillos anchos y de color marrón oscuro a negro. Las patas presentan manchas oscuras más delgadas que no forman anillos completos y el vientre es de color blanquecino al igual que los pelos de la parte del hocico. La naria y labios son negros y las orejas tienen a punta redondeada
" </p>
       <a href="" class="btn btn-outline-success btn-sm">Encontrado</a>
        <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card">
      <img src="{{ asset('images/33.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Chinchilla</h5>
        <p class="card-text">Tiene el pelaje suave, denso y largo (más que el de Chinchilla lamigera). Su piel es excepcionalmente suave porque cada folículo del pelo tiene un pelo de la guarda rodeado por dos grupos de 50.75 pelos de lana suaves que forman un manojo. Entre los chinchillidos es de tamaño mediano, con un peso de 400-500 g y con las siguientes medidas del cuerpo: largo total 220-256 mm, largo de la cola 153 175 mm, largo de la pata 57-59 mm y oreja 60-62 mm (medidas para tres especímenes depositados en el Museo de Historia Natural de Londres; Anderson 1997), Los machos son de menor tamaño que las hembras. El dorso tiene una coloración general azulada, gris perla o gris oscuro, usualmente con el extremo de los pelos de color negro; el vientre es amarillo claro. El comercio de pieles en el pasado ha documentado una variación geográfica en el color del pelaje (Tarifa & Yensen, en prensa) La cabeza es grande y el hocico es ancho. Las patas anteriores son cortas, pero con dedos flexibles</p>
       <a href="" class="btn btn-outline-success btn-sm">Encontrado</a>
       
      </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="{{ asset('images/44.png') }}" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Quirquincho</h5>
          <p class="card-text">En Peligro (EP)</p>
          <p class="card-text">Es un dasipodido de tamaño mediano (peso: 1400-2000 g, largo total: 375-420 mm, largo cola: 110-130 mm datos de 6 individuos). Es el único armadillo que habita zonas frías a gran altitud en nuestro continente (McNab, 1980), siendo una adaptación evidente la presencia de gran cantidad de pelo en su cuerpo, a diferencia de los armadillos de tierras bajas Cb, mahoni presenta un dorso de color acanelado y pelaje que varia en su coloración entre un tono cancela a blanco brillante (Wetzel, 1985b). La anatomia del animal muestra que el quirquincho está completamente adaptado a la excavación (Mann Fisher, 1978).</p>
          <a href="" class="btn btn-outline-success btn-sm">Encontrado</a>
      </div>
     </div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="{{ asset('images/22.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Lama guanicoe</h5>
        <p class="card-text">En Peligro Crítico (CR) </p>
        <p class="card-text">"El guanaco es el más grande entre los dos camélidos sudamericanos silvestres. Es un animal robusto con un cuello esbelto y paras largas Un animal adulto puede pesar entre 93-130 kg (Kostritsky & Vilchez, 1974; Miller da, 1973, Raedeke, 1979, Torres, 1992). La parte superior del cuerpo está cubierta con pelo de color marin canela, en tanto que la región interior del cuerpo, desde el cuello, está cubierta con pelo de color blanca La cabeza es fina, con orejas largas y terminadas en punta, el labio presenta una hendidura central y es muy móvil (Cardozo, 1975). No existe diferencia morfométrica entre hembras y machos" </p>
       <a href="" class="btn btn-outline-success btn-sm">Encontrado</a>
        <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card">
      <img src="{{ asset('images/55.png') }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">MURCIELAGO DE ESPADA</h5>
        <p class="card-text">En Peligro (EP)</p>
        <p class="card-text">Es un dasipodido de tamaño mediano (peso: 1400-2000 g, largo total: 375-420 mm, largo cola: 110-130 mm datos de 6 individuos). Es el único armadillo que habita zonas frías a gran altitud en nuestro continente (McNab, 1980), siendo una adaptación evidente la presencia de gran cantidad de pelo en su cuerpo, a diferencia de los armadillos de tierras bajas. Ch mationi presenta un dorso de color acanelado y pelaje que varia en su coloración entre un tono canela a blanco brillante (Wetzel, 1985b). La anatomia del animal muestra que el quirquincho está completamente adaptado a la excavación (Mann-Fisher, 1978).</p>
       <a href="" class="btn btn-outline-success btn-sm">Encontrado</a>
       
      </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="{{ asset('images/77.png') }}" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Nutria Gigante</h5>
          <p class="card-text">En Peligro (EP)</p>
          <p class="card-text">Es un dasipodido de tamaño mediano (peso: 1400-2000 g, largo total: 375-420 mm, largo cola: 110-130 mm datos de 6 individuos). Es el único armadillo que habita zonas frías a gran altitud en nuestro continente (McNab, 1980), siendo una adaptación evidente la presencia de gran cantidad de pelo en su cuerpo, a diferencia de los armadillos de tierras bajas Cb, mahoni presenta un dorso de color acanelado y pelaje que varia en su coloración entre un tono cancela a blanco brillante (Wetzel, 1985b). La anatomia del animal muestra que el quirquincho está completamente adaptado a la excavación (Mann Fisher, 1978).</p>
          <a href="" class="btn btn-outline-success btn-sm">Encontrado</a>
      </div>
     </div>
    </div>
  </div>
</div>
</section>


@stop

