@extends('layouts.app')

@section('content')

 

  <!-- Div App relacionado con el archivo js -->
     <div id="app_ShowJobs">
 <div id="componente1">
   <!-- Componente que es donde esta el Nav-->
   
 </div> 
  <!-- Buscador-->
   <div id="div7"> 
     <!-- Input Buscador-->
    <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador">
  </el-input> 
   </div>
           <!-- Button Buscar -->
  <div id="div8"> 
   <el-button type="primary" icon="el-icon-search" circle></el-button>
  </div>
      <!-- Buttom Ver mas-->
     
     
    
     <div id="post1"> 
       <el-button type="primary"  name="postear"  id="postear" round >Post a Job<i class="el-icon-edit"></i></el-button>
     </div>
     
     
   ['', '', '', '', '',
    '', '', '', '', 'application', 'id_company']
    <!-- Tabla -->
 <div id="div9">
     <template>
   <el-table
     :data="tableData"
     style="width: 100%"
     max-height="250">
     <el-table-column
       fixed
       prop="time_type"
       label="Fecha"
       width="150">
     </el-table-column>
     <el-table-column
       prop="company"
       label="Nombre"
       width="120">
     </el-table-column>
     <el-table-column
       prop="logo"
       label="Estado"
       width="120">
     </el-table-column>
     <el-table-column
       prop="URL"
       label="Ciudad"
       width="120">
     </el-table-column>
     <el-table-column
       prop="position"
       label="Dirección"
       width="300">
     </el-table-column>
     <el-table-column
       prop="location"
       label="Código postal"
       width="120">
     </el-table-column>
     <el-table-column
       prop="job_category"
       label="job_category"
       width="120">
     </el-table-column>
     <el-table-column
       prop="description"
       label="description"
       width="120">
     </el-table-column>
     <el-table-column
       prop="location"
       label="Código postal"
       width="120">
     </el-table-column>
     <el-table-column
       prop="location"
       label="Código postal"
       width="120">
     </el-table-column>
    
   </el-table>
 </template>
 </div>
 <div id="div10">
   <el-button  type="primary"  name="vermas"   id="vermas" 
     round  >Ver Mas<i class="el-icon-view"></i></el-button> 
 </div>
 
      <!-- Buttom de Post a Job-->
 
 </div>
   
     
    
     

 
        @endsection