
import moment from 'moment'
import Vue from 'vue'

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueSingleSelect from "vue-single-select";

//Sweet Alert
import Swal from 'sweetalert2';
window.swal = Swal;
const toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

const swalWithBootstrapButtons = Swal.mixin({
  confirmButtonClass: 'btn btn-success',
  cancelButtonClass: 'btn btn-danger',
  buttonsStyling: false,
})

window.toast = toast;
window.swalWithBootstrapButtons = swalWithBootstrapButtons;

let routes = [
	//{ path: '/subscriptions', component: require('../components/admin/subscription/Subscriptions.vue') }
];


const router = new VueRouter({
	mode: 'history',
	routes
})

Vue.component('vue-single-select', VueSingleSelect);
//Posts
//Vue.component('posts', require('./components/post/PostLists.vue'));
//Vue.component('editposts', require('./components/post/EditPostModal.vue'));

//=======================Client Management==================================//

//Service
Vue.component('services', require('./client/service/services.vue'));
Vue.component('newservice', require('./client/service/newservice.vue'));
Vue.component('editservice', require('./client/service/editservice.vue'));

//Client
Vue.component('clients', require('./client/client/clients.vue'));
Vue.component('newclient', require('./client/client/newclient.vue'));
Vue.component('editclient', require('./client/client/editclient.vue'));
Vue.component('detailclient', require('./client/client/detailclient.vue'));

//INVOICE
Vue.component('invoice', require('./client/invoice/invoice.vue'));
Vue.component('newinvoice', require('./client/invoice/new_invoice.vue'));
Vue.component('invoiceview', require('./client/invoice/invoice_view.vue'));


//menu
Vue.component('menupage', require('./menu/menu.vue'));

//Gallery
Vue.component('gallery', require('./gallery/gallery.vue'));


//Product
Vue.component('product', require('./product/product.vue'));
Vue.component('newproduct', require('./product/new_product.vue'));

//Posts



const app = new Vue({
    el: '#app',
    router,
});

Vue.filter('vueDate',function(created){
  return moment(created).format('DD-MM-YYYY');
})