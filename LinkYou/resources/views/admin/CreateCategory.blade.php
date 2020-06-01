@extends('layouts.app')
@section('content')

<div class="all">
    <h3> Crear Categoria</h3>
    <hr>
    <div class="principal">
        <div id="app_postCategory">
                <!-- inputs Informacion -->
                    <el-col :span="12">
                        <el-input type="text" v-model="category" placeholder="Categoria"></el-ipunt>
                    </el-col>
                    <el-col :span="12">
                        <el-select v-model="pagination" placeholder="Numero de paginacion">
                        <el-option v-for="number in paginationNumber"  v-bind:label="number"  v-bind:value="number"></el-option>
                        </el-select>
                    </el-col>
                <br>
                <!-- Botones -->
                    <el-button type="success" v-on:click="create()">Crear</el-button>
                    <el-button type="success" v-on:click="editPagination()">Editar Paginacion</el-button>
                    <el-button v-on:click="">Limpiar</el-button>
        </div>
    </div>
</div>



@endsection