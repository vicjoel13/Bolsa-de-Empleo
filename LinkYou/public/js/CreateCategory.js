var vm5 = new Vue({
    el: "#app_postCategory",
    data() {
        return {
            ruleForm: {
                category: []
          }
        }
    },
    methods: {
      create (){
        axios.post("http://127.0.0.1:8000/api/create/category", this.ruleForm).then((result) => {
        console.log(result);

        }); 
        this.ruleForm.category = "";
      },
    }
});
