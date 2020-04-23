import Toasted from 'vue-toasted';
import VModal from 'vue-js-modal'
import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';
import Paginate from 'vuejs-paginate'

 
Vue.use(Toasted);
Vue.use(VModal, { dialog: true });
Vue.use(DatePicker);
Vue.component('paginate', Paginate);

