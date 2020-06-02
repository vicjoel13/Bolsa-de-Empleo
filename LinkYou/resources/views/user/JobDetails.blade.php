@extends('layouts.app')

@section('content')



<div id="appJob">
  
  
  <div class="jumbotron text-center" style="background-image: url('https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');  background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">

  <input v-model="hola" name="turu" id="turu" value="{{$id}}" hidden>
  
  <h1>@{{job.company}}</h1>
  <p>@{{job.location}}</p>
  <br>
  <br>
</div>
<div class="container-fluid">
<h2><strong>Descripcion del puesto</strong></h2>
      <p>@{{job.description}}</p>
     <h2> <strong>Requisitos</strong> </h2>
          
      <p>@{{job.application}}</p>
    </div>
    
    <div class="card texto-encima" style="width: 21rem;">
  <img :src="job.logo" width="250" height="250" class="card-img-top" alt="...">
  <div class="card-body"  style="background-color:whitesmoke; font-family:Verdana;">
    <p class="card-text" >@{{job.time_type}}<br> @{{job.job_category}}<br><a v-bind:href="job.URL">Visitanos!</a><br>Envianos tu CV<a v-bind:href="job.email"> @{{job.email}}</a></p>
    <p class="card-text"  align="right"><small class="text-muted">28/05/2020</small></p>
  </div>
</div>
      <br>
      <br>
<div class="container-fluid bg-grey" align="center" style="background-color:#F5F0F5;">
  <h2 class="text-center">CONTACT</h2>
  <div class="row" align="center" style="text-align: center">
    <div class="col-sm-5" align="center" style="margin: auto">
      <p>Contactanos estamos siempre atentos.</p>
      <p><svg class="bi bi-shop" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z"/>
  <path d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z"/>
  <path d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z"/>
</svg> Santo Domingo, RD</p>
      <p><svg class="bi bi-music-player-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2.5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3zm7 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <circle cx="8" cy="11" r="1"/>
</svg> 809-458-8965</p>
      <p><svg class="bi bi-envelope-open" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 8.917l7.757 4.654-.514.858L8 10.083.757 14.43l-.514-.858L8 8.917z"/>
  <path fill-rule="evenodd" d="M6.447 10.651L.243 6.93l.514-.858 6.204 3.723-.514.857zm9.31-3.722L9.553 10.65l-.514-.857 6.204-3.723.514.858z"/>
  <path fill-rule="evenodd" d="M15 14V5.236a1 1 0 0 0-.553-.894l-6-3a1 1 0 0 0-.894 0l-6 3A1 1 0 0 0 1 5.236V14a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM1.106 3.447A2 2 0 0 0 0 5.237V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.236a2 2 0 0 0-1.106-1.789l-6-3a2 2 0 0 0-1.788 0l-6 3z"/>
</svg> LINKYOU@gmail.com</p>
    </div>
   
    </div>
  
</div>
@endsection