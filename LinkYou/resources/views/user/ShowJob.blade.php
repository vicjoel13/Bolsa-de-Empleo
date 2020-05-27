@extends('layouts.app')
@section('content')

  <!-- Div App relacionado con el archivo js -->
  <div id="app_ShowJobs" >

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
          <el-button type="primary" icon="el-icon-edit">Crear empleo</el-button>        
       </el-col>
      </el-form-item>
    </el-form>

    <div id="divTable">
      <table class="table table-striped" style="margin-top: 10px">
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
    </div>

    


    <div id="div10">
      <el-button type="primary" icon="el-icon-view">Mostrar mas</el-button>        
    </div>
 </div>
   
@endsection