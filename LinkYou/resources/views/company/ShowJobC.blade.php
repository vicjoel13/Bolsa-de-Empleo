@extends('layouts.app')

@section('content')

<!-- Div App relacionado con el archivo js -->
<div id="app_ShowJobsC">
  
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->
    </div> 
     <!-- Buscador-->
  <input v-model="hola" name="turu" id="turu" value="{{$id}}" hidden>
    <h3>Trabajos Posteados</h3>
    <hr>
        <el-form>
      <el-form-item>
        <el-col :span="10" style="margin-left: 3%">
        
        </el-col>
        <el-col :span="6" style="margin-left: 2%">
  
        </el-col>
        <el-col :span="3" style="margin-left: 2%; position: absolute; right: 10px">
          <a href="/Company/post"> <el-button type="primary" icon="el-icon-edit">Crear empleo</el-button> </a>       
       </el-col>
      </el-form-item>
    </el-form>
        
        
      
       <!-- Tabla -->
    <div id="div6">
   
        <filas url="/Company/edit/" v-for="user in users" v-bind:info="user"></filas>
       

    </div>
    
   
    
         <!-- Buttom de Post a Job-->
    
    </div>
   
   

@endsection