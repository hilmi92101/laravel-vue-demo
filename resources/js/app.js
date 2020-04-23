
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

require('./plugins');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('basic-component', require('./components/BasicComponent.vue').default);

Vue.component('learning-data-property', require('./components/learning/DataPropertyComponent.vue').default);
Vue.component('axios-example', require('./components/learning/AxiosExampleComponent.vue').default);
Vue.component('vue-date-picker', require('./components/ui/DatePickerComponent.vue').default);
Vue.component('vue-toast', require('./components/ui/ToastComponent.vue').default);
Vue.component('vue-modal', require('./components/ui/ModalComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
