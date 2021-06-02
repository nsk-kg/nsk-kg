/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import 'vue-search-select/dist/VueSearchSelect.css'
require('./bootstrap');

window.Vue
    = require('vue/dist/vue');

import { BootstrapVue, IconsPlugin, OverlayPlugin, NavbarPlugin  } from 'bootstrap-vue'
import VueTheMask from 'vue-the-mask'

Vue.use(VueTheMask)
Vue.use(NavbarPlugin)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(OverlayPlugin)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('swipper-component', require('./components/SwipperComponent.vue').default);
Vue.component('swipper-sm-component', require('./components/SwipperSmComponent.vue').default);
Vue.component('swipper-work-component', require('./components/SwipperWorkComponent.vue').default);
Vue.component('osgopog-component', require('./components/OsgopogComponent.vue').default);
Vue.component('osopo-component', require('./components/OsopoComponent.vue').default);
Vue.component('osgop-component', require('./components/OsgopComponent.vue').default);
Vue.component('osgpopp-component', require('./components/OsgpoppComponent.vue').default);
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
