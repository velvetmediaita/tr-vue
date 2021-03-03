require('./bootstrap');

import Vue from 'vue';

import ProductTable from './components/product-table.vue';
// Vue.component('table', ProductTable);

new Vue({
    el: '#app',
    components: {
        'product-table': ProductTable
    }
})
