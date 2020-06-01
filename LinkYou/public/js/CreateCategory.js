var vm5 = new Vue({
    el: "#app_postCategory",
    data() {
        return {
            ruleForm: {
                category: [],
                pagination: 10

          },
          paginationNumber: [5,10,15,20,25,30]
        }
    },
    methods: {
      create (){
        axios.post("api/create/category", this.ruleForm).then((result) => {
        console.log(result);

        }); 
        this.ruleForm.category = "";
      },
    }
});
