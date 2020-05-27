@extends('layouts.app')

@section('content')
<div class="all">
    <div class="">
        <div id="appJob">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm">
                <div class="grid-container">

<<<<<<< HEAD
                    <input v-model="hola" id="turu" value="jajaj">
                    <p>@{{hola}}</p>

=======
                
                <input v-model="hola" id="turu" value="{{$id}}">
                    <p>@{{hola}}</p>
                    
>>>>>>> 6a0e0a0bd92134d581d0f4558cf05c5bdf3d2d26
                    <!-- div Company name -->
                    <div class="item1">@{{job.company}}</div>

                    <!-- div Company Image -->
                    <div class="item2"><img id="imgCompany" v-bind:src="iman" alt=""></div>
                    
                    <!-- div Posicon - Horario -->
                    <div class="item3"></div> 
                    
                    <!-- div Sueldo -->
                    <div class="item4">Sueldo - $$$$</div>

                    <!-- div Informacion -->
                    <div class="item5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
                  </div>
                
                
            </el-form>
        </div>
    </div>
</div>
{{-- <script>
var app = new Vue({
    el: "#app_JobDetail",
    data: {
        job: [],
        buscador: [""]
    },
    mounted: function() {
        axios.get('http://127.0.0.1:8000/api/Job/{{$id}}')
            .then(response => {
                this.job = response.data.data;
                console.log(this.job)
            })
            .catch(error => {
                console.log(error);
            });
    }
});

</script> --}}
@endsection