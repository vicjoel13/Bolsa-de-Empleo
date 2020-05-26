@extends('layouts.app')
@section('content')

  <!-- Div App relacionado con el archivo js -->
  <div id="app_ShowJobs" >

    <!-- Buscador-->
    <div id="div7"> 
      <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador"></el-input> 
    </div>

    <!-- Button Buscar -->
    <div id="div8"> 
      <el-button type="primary" icon="el-icon-search" circle></el-button>
    </div>

    <!-- Buttom Ver mas-->
    <div id="post1"> 
      <el-button type="primary"  name="postear"  id="postear" round >Post a Job<i class="el-icon-edit"></i></el-button>
    </div>
     
    <table class="table table-striped">
      <thead class="thead-primary">
        <tr >
          <th scope="col">Compañia</th>
          <th scope="col">Posicion</th>
          <th scope="col">Ubicacion</th>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr id="tr"></tr> 
      </tbody>
    </table>


    <div id="div10">
      <el-button  type="primary"  name="vermas"   id="vermas" round  >Ver Mas<i class="el-icon-view"></i>
      </el-button> 
    </div>
 </div>
   
@endsection