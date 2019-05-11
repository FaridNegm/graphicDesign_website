require('../../../public/js/bootstrap');

window.Vue = require('vue');
import swal from 'sweetalert';

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
