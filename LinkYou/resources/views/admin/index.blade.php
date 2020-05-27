@extends('layouts.app')

@section('content')

<!-- Div App relacionado con el archivo js -->
<div id="app_AdminJobs">
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->
    </div> 
     <!-- Buscador-->
      <div id="div2"> 
        <!-- Input Buscador-->
       <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador">
     </el-input> 
      </div>
              <!-- Button Buscar -->
     <div id="div3"> 
      <el-button type="primary" icon="el-icon-search" circle></el-button>
     </div>
         <!-- Buttom Ver mas-->
        
        
       
        <div id="post"> 
          <el-button type="primary"  name="postear"  id="postear" round >Post a Job<i class="el-icon-edit"></i></el-button>
        </div>
        
        
      
       <!-- Tabla -->
    <div id="div6">
    <table class="table table-striped">
  <thead class="thead-primary">
    <tr >
      <th scope="col">Compañia</th>
      <th scope="col">Posicion</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Acciones</th>
    
    </tr>
  </thead>
  <tbody id="tbodyadmin">
  <tr id="tradmin"></tr>
    
  </tbody>
</table>

    </div>
    <div id="div5">
      <el-button  type="primary"  name="vermas"   id="vermas" 
        round  >Ver Mas<i class="el-icon-view"></i></el-button> 
    </div>
    
         <!-- Buttom de Post a Job-->
    
    </div>


@endsection