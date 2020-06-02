

Vue.component('filas' ,{
  props:{
      info: {},
      url: '',
  },
  methods:{
      
    borrar(id){
      axios.delete('/api/Job/delete/' + id) 
      .then(response => {
        console.log(response);
        location.reload();

      });
      console.log('works')
    }
  },
  template: `
  <div style="display: block; ">
  
  <div style="margin-left: 10px;margin-bottom: 10px" class="el-col el-col-4 el-col-offset-0">
  <div class="el-card is-always-shadow"><!----><div class="el-card__body" style="padding: 0px;">
  <img style="min-width: 235px; min-height: 235px;" src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image">
   <div style="padding: 14px;"><span><strong>{{info.company}}</strong></span><br> <span>{{info.position}}</span><span>{{info.position}}</span> <div class="bottom clearfix"><time class="time"></time>
   <a v-bind:href="url + info.id"><button type='button'style='margin:0;' class='btn btn-outline-primary'>Editar</button></a>
  <button type='button' class='btn btn-outline-danger' v-on:click="borrar(info.id)">Eliminar</button></div></div></div></div></div></div>
  
  
  
  `
});



var vm5 = new Vue({
    el: "#app_ShowJobsC",
    data() {
      return {
        hola: '',
        users:[],
        iman: ''
      } 
    },
    beforeMount(){
      this.hola = $("input[name=turu]").val();
    },
    mounted() {
    axios.get('/api/Jobs/'+this.hola)
    .then(response => {
            this.users = response.data.data;
    })
    .catch(error => {
        console.log(error);
    });
  }
  
  
  });