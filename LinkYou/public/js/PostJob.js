var app = new Vue({
    el: "#app_ShowJobs",
    data: {
        users: [],
        buscador: [""],
      
    },
    

    mounted: function() {
        axios.get('http://127.0.0.1:8000/api/Jobs')
            .then(response => {
                this.users = response.data.data;
                table = document.getElementById('tbody');


                for (i = 0; i < response.data.data.length; i++) {
                    console.log(this.users[i].company);
                    table.insertRow().innerHTML =
<<<<<<< HEAD
                        "<tr><th scope='row'>" + this.users[i].company + "</th>" + "<td>" + this.users[i].position + "</td>" + "<td>" + this.users[i].location + "</td></tr>"
                        ;
=======
                    
                        "<th scope='row'>" + this.users[i].company + "</th>" + "<td>" + this.users[i].position + "</td>" + "<td>" + this.users[i].location + "</td>"+"<a href='Details/"+this.users[i].id+"'><button class='el-button el-button btn-sm' type='primary'>Mostrar</button></a>";
>>>>>>> 6a0e0a0bd92134d581d0f4558cf05c5bdf3d2d26
                }
            })
            .catch(error => {
                console.log(error);
            });

            
    }
});