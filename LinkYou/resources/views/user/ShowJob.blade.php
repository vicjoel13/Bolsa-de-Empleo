@extends('layouts.app')
@section('content')

  <!-- Div App relacionado con el archivo js -->

    
  <div id="app_ShowJobs" style="margin-top: 20px">
  
  <h3>Empleos Disponibles</h3>
  <hr>
    
    <!-- Buscador-->
  
    <el-form>
 
      <el-form-item>
        <el-col :span="10" style="margin-left: 8%">
          <el-input type="text"  v-on:input="searchData()" placeholder="Buscar un trabajo" prefix-icon="el-icon-search"   v-model="buscador" ></el-input> 
        </el-col>

        

        <el-col :span="5">
          <el-select v-model="selectedField" placeholder="Seleccione el campo" style="width: 50%;" style="margin-left: 2%">                            
              <el-option label="Compañia" value="company">Compañia</el-option>
              <el-option label="Direccion" value="location">Direccion</el-option>
              <el-option label="Posicion" value="position">Posicion</el-option>
          </el-select>
        </el-col>

        <el-col :span="5">
          <el-select v-model="selected" placeholder="Seleccionar categoria" style="width: 80%; right:10%;" style="margin-left: 2%" @change="onChange">                            
              <el-option v-for="cat in categories" v-bind:label="cat.category" v-bind:value="cat.category"> @{{cat.category }}</el-option>
          </el-select>
        </el-col>
        
        <el-col :span="3" style="margin-left: 2%; position: absolute; right: 10px">
        <el-col :span="3" style="margin-left: 2%; right: 10px;">
        
             
       </el-col>
      </el-form-item>
    </el-form>

    <!--Table-->
    <div class="row" style="width:100%">
    <div class="col" style="margin:0 auto; text-align: center; margin-left: 80px">
      <carta v-for="user in users" v-bind:info="user" url="Details/" ></carta>
    </div>
    
    </div>
    <div class="row" style="width:100%">
     <div class="col" style="text-align: center;">
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
    
 
 
 
</div>


@endsection
