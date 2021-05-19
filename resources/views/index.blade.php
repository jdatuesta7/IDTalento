@extends('layouts.app')

@section('content')

<div class="container">   
    <h1 class="text-center mb-5" >Iniciar Sesion </h1>
    <div class="row">       
      <div class="col-md">        
          <div class="card">
            <a href="{{ route('login.business') }}">
            <img class="card-img-top" src="/img/bannerEmpresas.jpg">            
            <div class="card-body">
                <h1 class="card-title">Empresas</h1>
            </a>
            </div>
          </div>          
      </div>

      <div class="col-md">        
          <div class="card">
            <a href="{{ route('login.people') }}">
            <div class="card-body">
              <h1 class="card-title mb-n3">Personas</h1>
            </div>
            <img class="card-img-bottom" src="/img/bannerPersonas.jpg"> 
            <a href="#">                       
          </div>          
      </div>
      
    </div>
  </div>

@endsection