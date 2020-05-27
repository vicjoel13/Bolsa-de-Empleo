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