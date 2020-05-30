Vue.component('carta' ,{
  props:{
      info: {},
      url: '',
  },
  template: '<div style="display: block; "><div style="margin-left: 10px;margin-bottom: 10px" class="el-col el-col-4 el-col-offset-0"><div class="el-card is-always-shadow"><!----><div class="el-card__body" style="padding: 0px;"><img style="min-width: 235px; min-height: 235px;" src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image"> <div style="padding: 14px;"><span><strong>{{info.company}}</strong></span><br> <span>{{info.time_type}}</span> <div class="bottom clearfix"><time class="time"></time><a><button type="button" @click="borrar(url)" class="el-button button el-button--text"><!----><!----><span>Eliminar</span></button></a></div></div></div></div></div></div>'
})

var app = new Vue({
  el: "#app_AdminJobs",
  data: {
      users: [],
      buscador: ''
  },
  computed: {
    filteredList() {
      return this.users.filter(user => {
        return user.company.toLowerCase().includes(this.buscador.toLowerCase())
    })
    }
},
  mounted: function() {
      axios.get('api/Jobs')
          .then(response => {
              this.users = response.data.data;
              table = document.getElementById('tbodyadmin');
              var tableContent = document.getElementById('tradmin');
          })
          .catch(error => {
              console.log(error);
          });
  },
  methods:{
      
      borrar(id){
        axios.delete('api/Job/delete/' + id) 
        .then(response => {
          console.log(response);
          location.reload();

        });
           
          }
          
          
  }
 
});
