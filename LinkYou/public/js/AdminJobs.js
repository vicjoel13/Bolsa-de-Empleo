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
                    + "<td><button type='button'  class='el-button el-button--danger is-circle'><i class='el-icon-delete'></i></button><button type='button' class='el-button el-button--primary is-circle'><i class='el-icon-edit'></i></td>" 
                    +"<td>  <el-button type='success' icon='el-icon-check' circle></el-button></td>"
                    
            }
          })
          .catch(error => {
              console.log(error);
          });
  },
 
});