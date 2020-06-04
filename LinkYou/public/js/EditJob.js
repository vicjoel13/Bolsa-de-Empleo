var vm5 = new Vue({
    el: "#app_Editpost",
    data() {
        return {
             id: "",
            ruleForm: {
              id:'',
              created_at: "",
              updated_at: "",
              company: "",
              logo: "",
              URL: "",
              time_type: "",
              position: "",
              location: "",
              job_category: "",
              description: "",
              email: "",
              application: "",
              id_company: '',
              
          },
          categories:[]
        }
    },
    beforeMount(){
      this.id = $("input[name=idEdit]").val();
    },
    mounted() {
      axios.get('/api/Job/'+this.id)
      .then(response => {
          this.ruleForm = response.data.data;
          console.log(this.ruleForm)
      })
      .catch(error => {
          console.log(error);
      });

      axios.get("/api/category").then((result) => {
        this.categories = result.data.data;
      });
    },
    methods: {
      update (){
        axios.put("/api/update/Job", this.ruleForm).then((result) => {
        });
      }
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