var app = new Vue({
  el: "#app_AdminJobs",
  data: {
      users: [],
      buscador: [""]
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
                      "<td>" + this.users[i].company + "</td>" + "<td>" + this.users[i].position + "</td>" + "<td>" + this.users[i].location + "</td>" 
                      
              }



          })
          .catch(error => {
              console.log(error);
          });
  }
});