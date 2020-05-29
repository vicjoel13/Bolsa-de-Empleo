var app = new Vue({
  el: "#app_AdminJobs",
  data: {
      users: [],
      buscador: ''
  },
  mounted: function() {
      axios.get('http://127.0.0.1:8000/api/Jobs')
          .then(response => {
              this.users = response.data.data;
              table = document.getElementById('tbodyadmin');
              var tableContent = document.getElementById('tradmin');

            for (i = 0; i < response.data.data.length; i++) {
                console.log(this.users[i].company);
                table.insertRow().innerHTML =
                    "<th scope='row'>" + this.users[i].company + "</th>" + "<td>" + this.users[i].position + "</td>" + "<td>" + this.users[i].location + "</td>"
                    + "<button type='button'   class='el-button el-button--danger is-circle' v-on:click="+this.delete(+this.users[i].id)+" ><i class='el-icon-delete'></i><a href=''></button><button type='button' class='el-button el-button--primary is-circle'><i class='el-icon-edit'></i></> </td>" 
                    
            }
          })
          .catch(error => {
              console.log(error);
          });
  },
  methods:{
      
      delete(id){
      axios.delete('http://127.0.0.1:8000/api/Job/delete/' + id)
        
        .then(response => {
          console.log(response);

        });
           
          }
          
          
  }
 
});
