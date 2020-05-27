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