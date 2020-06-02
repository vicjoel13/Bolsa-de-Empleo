



Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{todo.text}}</li>'

});

Vue.component('lista', {
    props: ['nombre','apellidos'],
    template: '<li>{{nombre}}</li>'
});

Vue.component('carta' ,{
    props:{
        info: {},
        url: ''
    },
    template: '<div style="display: block; "><div style="margin-left: 10px;margin-bottom: 10px" class="el-col el-col-4 el-col-offset-0"><div class="el-card is-always-shadow"><!----><div class="el-card__body" style="padding: 0px;"><img style="min-width: 235px; min-height: 235px;" src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image"> <div style="padding: 14px;"><span><strong>{{info.company}}</strong></span><br> <span>{{info.position}}</span><br><span>{{info.location}}</span> <div class="bottom clearfix"><time class="time"></time><a v-bind:href="url + info.id"><button type="button" class="el-button button el-button--text"><!----><!----><span>Mostrar</span></button></a></div></div></div></div></div></div>'
});

Vue.component('paginate', VuejsPaginate)

var app = new Vue({
    el: "#app_ShowJobs",
    data: {
           selected: '',
           selectedField:'company',
        users: [],
        buscador: '',
        categories: [],
        meta: {},
        links: {},

    },


    computed: {
      hola(){
          this.searchData;
      }
    },
   
    mounted: function() {
        axios.get('/api/Jobs')
        .then(response => {
            this.users = response.data.data;
           
            
        })
        .catch(error => {
            console.log(error);
        });
        axios.get("/api/category/").then((result) => {
            this.categories = result.data.data;
         
        
        });
        this.fetchStories()

        
    }, 
    
    

    methods: {
        
        hola (id){
            window.open("Details/"+id, '_self');
        
        },
        refresh(){
        location.reload()
        },
        searchData() {
            url = "/api/search/Jobs/"+this.selectedField +"/"+
            this.buscador +
              "?page=1";
            if(this.buscador == ''){
                this.fetchStories();
            }else{
                axios
                .get(url)
                .then(response => {
                  this.users = response.data.data;
                  this.makePagination(response.data);
                 
                })
                .catch(e => {
                  console.log(e);
                });
                this.fetchStories(url)
            }
            
           
          },
        fetchStories(page_url) {
            url = page_url || 'api/Jobs'
            axios.get(url)
                .then( response => {
                    console.log(response.data.links)
                    this.makePagination(response.data)
                    this.users = response.data.data
                });
        },
        onChange(){
            axios.get('/api/Jobs/category/'+this.selected)
            .then(response => {
                this.users = response.data.data
            });
},
        makePagination(data){
            let meta = {
                current_page: data.meta.current_page,
                last_page: data.meta.last_page,
                
                
            }
            let links ={
                next: data.links.next,
                prev: data.links.prev
            }
 

            this.meta = meta
            this.links = links

        }
          
        
    }
    
});