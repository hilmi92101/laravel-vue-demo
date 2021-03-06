import Toasted from 'vue-toasted';
import VModal from 'vue-js-modal'
import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';
import Paginate from 'vuejs-paginate';
import Vue2SimpleDatatable from 'vue2-simple-datatable'
import VueGoodTablePlugin from 'vue-good-table';
import 'vue-good-table/dist/vue-good-table.css'
 



 
Vue.use(Toasted);
Vue.use(VModal, { dialog: true });
Vue.use(DatePicker);
Vue.component('paginate', Paginate);
Vue.use(Vue2SimpleDatatable);
Vue.use(VueGoodTablePlugin);

