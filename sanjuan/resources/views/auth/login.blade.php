@extends('layouts.app')

@section('content')


        <!-- LOGIN MODULE -->
<div class="login">
                
            
<h2>EMPIEZA LA AVENTURA</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Crea una cuenta</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your email for registration</span> -->
			<input name="user" type="text" placeholder="Nombre" />
			<!-- <input type="email" placeholder="Email" /> -->
			<input name="pass" type="password" placeholder="Contraseña" />
			<button>Registrar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{URL::action('ControllerOpciones@index')}}">
			<h1>Ingresa</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<span>tu cuenta</span>
			<input name="user" type="email" placeholder="Usuario" />
			<input name="pass" type="password" placeholder="Cotraseña"/>
			<a href="#">Olvidaste tu contraseña?</a>
			
			<!-- <button>Ingresar</button> -->
			<a href="{{URL::action('ControllerOpciones@index')}}" ><button >Ingresare</button></a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido De Nuevo!</h1>
				<p>Vamos de vuelta con tu acceso</p>
				<button class="ghost" id="signIn">Ingresar</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola, Amigo!</h1>
				<p>Ingresa tus datos y iniciemos una aventura.</p>
				<button class="ghost" id="signUp">Registrar</button>
			</div>
		</div>
	</div>
</div>



              
        </div>
    
  

@endsection
