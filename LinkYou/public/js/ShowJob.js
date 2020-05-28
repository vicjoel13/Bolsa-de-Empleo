Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{todo.text}}</li>'

})

Vue.component('lista', {
    props: ['nombre','apellidos'],
    template: '<li>{{nombre}}</li>'
})

Vue.component('carta' {
    
})

var app = new Vue({
    el: "#app_ShowJobs",
    data: {
        users: [],
        buscador: [""],
        groceryList: [
            { id: 0, text: 'Vegetables' },
            { id: 1, text: 'Cheese' },
            { id: 2, text: 'Whatever else humans are supposed to eat' }
        ],
    },
    mounted: function() {
        axios.get('http://127.0.0.1:8000/api/Jobs')
        .then(response => {
            this.users = response.data.data;
            table = document.getElementById('tbody');
            for (i = 0; i < response.data.data.length; i++) {
                console.log(this.users[i].company);
                table.insertRow().innerHTML =
                "<th scope='row'>" + this.users[i].company + "</th>" + "<td>" + this.users[i].position + "</td>" + "<td>" + this.users[i].location + "</td>"+"<a href='Details/"+this.users[i].id+"'><button class='el-button el-button btn-sm' type='primary'>Mostrar</button></a>";
            }
        })
        .catch(error => {
            console.log(error);
        });      
    }
});