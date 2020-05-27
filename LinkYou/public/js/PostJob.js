var vm5 = new Vue({
    el: "#app_post",
    data() {
        return {
            job: {
              company: "",
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
              isActive: 1
          }
        }
    },
    methods: {
        submitForm(formName) {
          this.$refs[formName].validate((valid) => {
            if (valid) {
              alert('submit!');
            } else {
              console.log('error submit!!');
              return false;
            }
          });
        },
        resetForm(formName) {
          this.$refs[formName].resetFields();
        },
  
        handleSelect(key, keyPath) {
          console.log(key, keyPath);
        }
    }
});