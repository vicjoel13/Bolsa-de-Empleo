var vm5 = new Vue({
    el: "#appJob",
    data() {
      return {
        hola: '',
        job:{},
        iman: ''
      } 
    },
    beforeMount(){
      this.hola = $("input[name=turu]").val();
    },
    mounted() {
    axios.get('api/Job/'+this.hola)
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