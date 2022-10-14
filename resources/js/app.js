require('./bootstrap');

import { createApp } from 'vue'
import BaseNav from './components/UI/BaseNav.vue'
import BaseHeader from './components/UI/BaseHeader.vue'
import BasePanel from './components/UI/BasePanel.vue'
import BaseInput from './components/UI/BaseInput.vue'
import BaseSidebar from './components/UI/BaseSidebar.vue'


const app = createApp({})
app.component('BaseNav', BaseNav);
app.component('BaseHeader', BaseHeader);
app.component('BasePanel', BasePanel);
app.component('BaseSidebar', BaseSidebar);
app.component('BaseInput', BaseInput);



app.mount('#app')