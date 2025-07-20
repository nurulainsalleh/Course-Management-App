import './bootstrap';
import { createApp } from 'vue'; 
import Example from './components/welcome.vue'; 

const app = createApp({});


app.component('example', Example); 

app.mount('#app');
