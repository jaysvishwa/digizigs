
/*window._ = require('lodash');


try {
    //window.Popper = require('popper.js').default;    //Popper
    //window.$ = window.jQuery = require('jquery');    //Jquery
    //require('bootstrap-sass');						 // bootstrap.min
} catch (e) {}


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}*/

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

/*import Echo from 'laravel-echo'
window.Pusher = require('pusher-js');

window.Echo = new Echo({
	authEndpoint :'/digizigs/broadcasting/auth',
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});*/


/*let userId = document.head.querySelector('meta[name="user-id"]').content;

window.Echo.private('App.User.' + userId)
    .notification((notification) => {
        document.querySelector('.bg-orange').innerText = notification.count;
        //console.log(notification.count);
});*/






//Bootstrap
require('../app/bootstrap.js');




//Vendor
//require('../../vendor/dropzone/dropzone.js');
require('../../vendor/autocomplete/jquery.autocomplete.js');

//Include rest of the js files Vue,Admin theme js,customjs

require('../../../Views/admin/vue/vue');
require('./theme');
require('./custom');

