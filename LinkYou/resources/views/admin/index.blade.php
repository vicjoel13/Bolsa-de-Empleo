@extends('layouts.app')

@section('content')
@if(Auth::user()->type==2)
<!-- Div App relacionado con el archivo js -->
<div id="app_AdminJobs">
  <h2>Administrador</h2>
  <hr>
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->
    </div> 
     <!-- Buscador-->
    
        <el-form>
      <el-form-item>
        <el-col :span="10" style="margin-left: 3%">
        <el-input type="text" style="margin-left: 3%"  v-on:input="searchData()" placeholder="Buscar un trabajo" prefix-icon="el-icon-search"   v-model="buscador" ></el-input> 
        </el-col>
        <el-col :span="5">
          <el-select style="margin-left: 3%" v-model="selectedField" placeholder="Seleccione el campo" style="width: 50%;" style="margin-left: 2%">                            
              <el-option label="Compañia" value="company">Compañia</el-option>
              <el-option label="Direccion" value="location">Direccion</el-option>
              <el-option label="Posicion" value="position">Posicion</el-option>
          </el-select>
        </el-col>

        
        <el-col :span="5">
          <el-select style="margin-left: 3%" v-model="selected" placeholder="Seleccionar categoria" style="width: 50%;" style="margin-left: 2%" @change="onChange">                            
              <el-option v-for="cat in categories" v-bind:label="cat.category" v-bind:value="cat.category"> @{{cat.category }}</el-option>
          </el-select>
        </el-col>
        <el-col :span="3" style="margin-left: 2%; position: absolute; right: 10px">
          <a href="/Admin/create"> <el-button type="primary" icon="el-icon-s-tools">Configuraciones</el-button> </a>       
       </el-col>
      </el-form-item>
    </el-form>
        
        
      
       <!-- Tabla -->
       <div class="row" style="width:100%">

    <div id="div6" class="col">
      <carta v-for="user in users" v-bind:info="user" @click.native="borrar(user.id)"></carta>
    </div>
    </div>
    <div class="row" style="width:100%">
      <div class="col" style="text-align: center; margin:10px;">
      <el-button class="btn btn-default" @click="fetchStories(links.prev)"
            :disabled="!links.prev">
        Previous
    </el-button>
    <span>Page @{{meta.current_page}} of @{{meta.last_page}}</span>
    <el-button class="btn btn-default" @click="fetchStories(links.next)"
            :disabled="!links.next">Next
    </el-button>
      </div>
    </div>
   

@endsection