
import { createApp } from 'vue';

import App from './components/App.vue';
import PrimeVue from 'primevue/config';

import store from './store';

import InputText from 'primevue/inputtext';
import Calendar from 'primevue/calendar';
import Card from 'primevue/card';
import InputMask from 'primevue/inputmask';
import Galleria from 'primevue/galleria';
import Textarea from 'primevue/textarea';
import Checkbox from 'primevue/checkbox';
import RadioButton from 'primevue/radiobutton';
import Button from 'primevue/button';
import Message from 'primevue/message';
import Listbox from 'primevue/listbox';
import ProgressBar from 'primevue/progressbar';
import DataTable from 'primevue/datatable';
import Column from "primevue/column";

import 'primevue/resources/themes/md-light-indigo/theme.css';
import 'primeicons/primeicons.css';
import 'primeflex/primeflex.css';
import 'primevue/resources/primevue.css';

const app = createApp(App);

app.component('InputText', InputText);
app.component('Calendar', Calendar);
app.component('Card', Card);
app.component('InputMask', InputMask);
app.component('Galleria', Galleria);
app.component('Textarea', Textarea);
app.component('Checkbox', Checkbox);
app.component('RadioButton', RadioButton);
app.component('Button', Button);
app.component('Message', Message);
app.component('Listbox', Listbox);
app.component('ProgressBar', ProgressBar);
app.component('DataTable', DataTable);
app.component('Column', Column);

app.use(store);
app.use(PrimeVue);

app.mount("#app");

