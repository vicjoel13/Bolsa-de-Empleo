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
            var table = document.getElementById('tbody');
            for (i = 0; i < response.data.data.length; i++) {
                console.log(this.users[i].company);
                table.insertRow().innerHTML =
                "<th scope='row'>" + this.users[i].company + "</th>" + "<td>" + this.users[i].position + "</td>" + "<td>" + this.users[i].location + "</td>"+"<a href='Details/"+this.users[i].id+"'><button class='el-button el-button btn-sm' type='primary'>Mostrar</button></a>";
            
            }
    })
    .catch(error => {
        console.log(error);
    });
  },
  
  });