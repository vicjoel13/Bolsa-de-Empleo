var vm5 = new Vue({
    el: "#app_postCategory",
    data() {
        return {
          category: '',
          pagination: 10,
          pagSelected: {
            pagination: 0
          },
          paginationNumber:[5,10,15,20,25,30],
          categoryCreated:{
            category:''
          }
        }
        
    },
    methods: {
      create (){
        this.categoryCreated.category = this.category;
        axios.post("/api/create/category", this.categoryCreated).then((result) => {
        console.log(result);
        }); 
       
        this.category = "";
      },
      editPagination(){
        this.pagSelected.pagination = this.pagination;
        axios.put("/api/Admin", this.pagSelected).then((result) => {
          console.log(result);
          }); 
      console.log(this.pagSelected)
      }
    }
});
