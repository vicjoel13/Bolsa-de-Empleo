@extends('layouts.app')
@section('content')

  <!-- Div App relacionado con el archivo js -->
  <div id="app_ShowJobs" style="margin-top: 20px">

  
    
    
    <!-- Buscador-->
    <el-form>
      <el-form-item>
        <el-col :span="10" style="margin-left: 3%">
          <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador" v-on:keyup.enter="searchData"></el-input> 
   
        </el-col>
        <el-col :span="6" style="margin-left: 2%">
          <el-button type="primary" icon="el-icon-search"></el-button>
        </el-col>

        <el-col :span="3" style="margin-left: 2%; position: absolute; right: 10px">
        <el-col :span="3" style="margin-left: 2%; right: 10px;">
        
            @if(Auth::user()->type=="1" )
              <el-button type="primary" icon="el-icon-edit" >Crear empleo</el-button>      
            @endif  
       </el-col>
      </el-form-item>
    </el-form>

    <!--Table-->

    <div style="margin:0 auto; text-align: center; margin-left: 100px">
      <carta v-for="user in users" v-bind:info="user" url="Details/" ></carta>
    </div>
    <div style="text-align: center">
      <el-button type="primary" icon="el-icon-view" style="margin: auto; text-align: center; margin-bottom: 20px">Mostrar mas</el-button>        
    </div>


 </div>
   
@endsection