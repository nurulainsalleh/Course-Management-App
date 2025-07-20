import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Example from './components/welcome.vue'; // Vue component files use PascalCase by convention

const app = createApp({});

// ❌ Typo: "componenets" → ✅ "components"
app.component('example', Example); // Use kebab-case in the blade if needed

app.mount('#app');
