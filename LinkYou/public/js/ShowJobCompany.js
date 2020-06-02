

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
  <img style="min-width: 40%; min-height: 30%;" :src="info.logo" class="image">
   <div style="padding: 14px;"><span><strong>{{info.company}}</strong></span><br><span>{{info.position}}</span><br> <span>{{info.location}}</span> <div class="bottom clearfix"><time class="time"></time>
   <a v-bind:href="url + info.id"><button type='button' class='el-button el-button--primary btn-sm '><i class="el-icon-edit"></i></button></a>
  <button type='button' class='el-button el-button--danger btn-sm ' v-on:click="borrar(info.id)"> <i class="el-icon-delete"></i></button></div></div></div></div></div></div>
  
  
  
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