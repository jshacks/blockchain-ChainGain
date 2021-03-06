
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('sites-list', require('./components/sites/ListingComponent.vue'));
Vue.component('sites-add', require('./components/sites/AddComponent.vue'));

Vue.component('authors', require('./components/authors/Authors.vue'));
Vue.component('authors-add', require('./components/authors/AddAuthorComponent.vue'));
Vue.component('authors-list', require('./components/authors/AuthorListingComponent.vue'));

Vue.component('sites-add-form', require('./components/sites/AddSiteFormComponent.vue'));

Vue.component('dashboard', require('./components/Dashboard.vue'));
Vue.component('chart', require('./components/dashboard/Chart.vue'));
Vue.component('pie', require('./components/dashboard/Pie.vue'));
const app = new Vue({
    el: '#app'
});
