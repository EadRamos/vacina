/*import './bootstrap';


import { createApp } from 'vue';
import { createVuetify } from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

import Example from './components/Example.vue'

export default new createVuetify({});

const app = createApp();

app.use(createVuetify);
app.component('example', Example);

app.mount('#app');


*/
import './bootstrap';


import { createApp } from 'vue';

import { createVuetify } from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'



const vuetify = createVuetify({
    components,
    directives,
});

const app = createApp();

app.use(vuetify);

// componentes importações

// home
import Inicial from './components/base/Inicial.vue'
app.component('inicial', Inicial);



app.mount('#app');

