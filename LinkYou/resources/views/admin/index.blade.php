@extends('layouts.app')

@section('content')

<!-- Div App relacionado con el archivo js -->
<div id="app_AdminJobs">
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->
    </div> 
     <!-- Buscador-->
    
        <el-form>
      <el-form-item>
        <el-col :span="10" style="margin-left: 3%">
          <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador"></el-input> 
        </el-col>
        <el-col :span="6" style="margin-left: 2%">
          <el-button type="primary" icon="el-icon-search"></el-button>
        </el-col>
        <el-col :span="3" style="margin-left: 2%; position: absolute; right: 10px">
          <a href="/Company/post"> <el-button type="primary" icon="el-icon-edit">Crear empleo</el-button> </a>       
       </el-col>
      </el-form-item>
    </el-form>
        
        
      
       <!-- Tabla -->
    <div id="div6">
      <carta v-for="user in filteredList" v-bind:info="user" @click.native="borrar(user.id)"></carta>
    </div>
    <div style="text-align: center">
      <el-button  type="primary"  name="vermas"   id="vermas"  style="margin: auto; text-align: center">Mostrar Mas<i class="el-icon-view"></i></el-button> 
    </div>
    
         <!-- Buttom de Post a Job-->
    
    </div>
    <script>
      $( "#delete" ).click(function() {
        location.reload();
      });
    </script>

@endsection