@extends('layouts.app')
@section('content')

  <!-- Div App relacionado con el archivo js -->
  <div id="app_ShowJobs" >

    <ol>
      <todo-item v-for="item in groceryList" v-bind:todo="item" ></todo-item>
    </ol>
    <div class="el-col el-col-8 el-col-offset-0"><div class="el-card is-always-shadow"><!----><div class="el-card__body" style="padding: 0px;"><img src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image"> <div style="padding: 14px;"><span>Yummy hamburger</span> <div class="bottom clearfix"><time class="time"></time> <button type="button" class="el-button button el-button--text"><!----><!----><span>Operating</span></button></div></div></div></div></div>

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
    <div id="divTable">
      <table class="table table-hover" style="margin-top: 10px">
        <thead class="thead-primary" style="background-color: #409EFF;color: white">
          <tr >
            <th scope="col">Compañia</th>
            <th scope="col">Posicion</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody id="tbody">
          <tr id="tr" ></tr> 
        </tbody>
      </table>
      <div style="text-align: center">
        <el-button type="primary" icon="el-icon-view" style="margin: auto; text-align: center">Mostrar mas</el-button>        
      </div>
    </div>
 </div>
   
@endsection