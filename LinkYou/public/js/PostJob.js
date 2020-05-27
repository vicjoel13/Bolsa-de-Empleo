var vm5 = new Vue({
    el: "#app_post",
    data() {
        return {
            ruleForm: {
              name: '',
              email: '',
              password1: '',
              password2: '',
              phone: '',
              country: '',
              type: '',
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