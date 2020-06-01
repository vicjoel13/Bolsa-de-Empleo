@extends('layouts.app')
@section('content')

<div class="all">
    <h3> Crear Categoria</h3>
    <hr>
    <div class="principal">
        <div id="app_postCategory">
            <el-form :model="ruleForm" ref="ruleForm" method="POST" label-width="120px" class="demo-ruleForm">
                <!-- inputs Informacion -->
                    <el-col :span="12">
                        <el-input type="text" v-model="ruleForm.category" placeholder="Categoria"></el-ipunt>
                    </el-col>
                    <el-col :span="12">
                        <el-select v-model="ruleForm.pagination" placeholder="Numero de paginacion">
                        <el-option v-for="number of paginationNumber" v-bind:value="number">@{{number}}</el-option>
                        </el-select>
                    </el-col>
                </el-form-item>
                <br>
                <!-- Botones -->
                <el-form-item>
                    <el-button type="success" v-on:click="create()">Crear</el-button>
                    <el-button v-on:click="">Limpiar</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</div>



@endsection