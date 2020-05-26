@extends('layouts.app')

@section('content')
<div class="all">
    <h1>Publicar empleo</h1>
    <hr>
    <div class="principal">
        <div id="app2">
            <form action="" method="post">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm">

                <!-- inputs Informacion -->
                <el-form-item label="Categoria:" required>
                    <el-col :span="11">
                        <el-select v-model="ruleForm.country" placeholder="Seleccionar categoria" style="width: 100%;">
                            <el-option label="Zone one" value="shanghai"></el-option>
                            <el-option label="Zone two" value="beijing"></el-option>
                        </el-select>
                    </el-col>
                </el-form-item>
                
                <!-- select Tipo de Empleo-->
                <el-form-item label="Tipo de empleo:" prop="resource">
                    <el-radio-group v-model="ruleForm.resource">
                    <el-radio label="Full time"></el-radio>
                    <el-radio label="Part time"></el-radio>
                    <el-radio label="Free lance"></el-radio>
                    </el-radio-group>
                </el-form-item>

                <!-- input URL -->
                <el-form-item label="URL" prop="region">
                    <el-input type="text" v-model="ruleForm.email" placeholder="URL"></el-ipunt>
                </el-form-item>

                <!-- inputs Informacion -->
                <el-form-item label="Informacion" required>
                    <el-col :span="11" style="margin-right: 20px;">
                    <el-form-item prop="date1">
                        <el-select v-model="ruleForm.country" placeholder="Ubicacion" style="width: 100%;">
                            <el-option label="Zone one" value="shanghai"></el-option>
                            <el-option label="Zone two" value="beijing"></el-option>
                        </el-select>                    </el-form-item>
                    </el-col>
                    <el-col :span="12">
                        <el-select v-model="ruleForm.country" placeholder="Posicion" style="width: 100%;">
                            <el-option label="Zone one" value="shanghai"></el-option>
                            <el-option label="Zone two" value="beijing"></el-option>
                        </el-select>
                    </el-col>
                </el-form-item>

                <!-- textare Descripcion -->
                <el-form-item label="Descripcion">
                    <el-input type="textarea"></el-input>
                </el-form-item>
                
                <!-- Botones -->
                <el-form-item>
                    <el-button type="primary" v-on:click="submitForm('ruleForm')">Crear</el-button>
                    <el-button v-on:click="resetForm('ruleForm')">Limpiar</el-button>
                </el-form-item>
            </form>
            </el-form>
        </div>
    </div>
</div>

@endsection