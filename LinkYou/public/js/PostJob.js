import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios);
const app = new Vue({

    el: '#app_ShowJobs',

    methods: {
        deleteRow(index, rows) {
            rows.splice(index, 1);
        }
    },
    data() {
        return {
            jobs: null
        }
    },
    mounted() {
        this.axios
            .get('http://127.0.0.1:8000/ShowJobs')
            .then(response => (this.job = response.data.bpi))
    }
})