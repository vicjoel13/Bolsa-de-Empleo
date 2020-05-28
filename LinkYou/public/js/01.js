

var turu = document.getElementById('turu').value;

var vm5 = new Vue({
  el: "#appJob",
  data() {
    return {
      hola: turu,
      job:{},
      iman: ''
    } 
  },
  mounted: function() {
    axios.get('http://127.0.0.1:8000/api/Job/'+this.hola)
        .then(response => {
            this.job = response.data.data;
            this.iman = 'https://i.imgur.com/ohZYczI.jpg'
            console.log(this.job)
        })
        .catch(error => {
            console.log(error);
        });
}
});


var Main = {
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
        },
      
        
      };
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

    },

  }
var Ctor = Vue.extend(Main)
new Ctor().$mount('#app2')
