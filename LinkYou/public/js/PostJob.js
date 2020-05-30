var vm5 = new Vue({
    el: "#app_post",
    data() {
        return {
            ruleForm: {
              created_at: "",
              updated_at: "",
              company: "123",
              time_type: "",
              logo: "",
              URL: "",
              position: "",
              location: "",
              job_category: "",
              description: "",
              email: "",
              application: "",
              id_company: 25668,
          },
          categories:[]
        }
    },
    beforeMount(){
      this.ruleForm.company = $("input[name=company]").val();
      this.ruleForm.logo = $("input[name=logo]").val();
      this.ruleForm.email = $("input[name=email]").val();
    },
    mounted: function() {
      axios.get("http://127.0.0.1:8000/api/category").then((result) => {
        this.categories = result.data.data;
        console.log(this.categories);
      });
    },
    methods: {
      create (){
        axios.post("http://127.0.0.1:8000/api/create/Job", this.ruleForm).then((result) => {
        console.log(result);
        }); 
      },
    }
});

/*function() {
  axios.put("http://127.0.0.1:8000/api/update/Job", this.job).then((result) => {
      console.log(result);
  });
}*/

/*function() {
      axios.post("http://127.0.0.1:8000/api/create/Job", this.job).then((result) => {
          console.log(result);
      });
  }*/