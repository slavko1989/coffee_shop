import './bootstrap';

import { createApp } from 'vue';

import ProductList from './components/ProductList.vue';
import Hello from './components/Hello.vue';
const app = createApp({});


app.component('hello', Hello);
app.component('product-list', ProductList);
app.mount('#app');
app.mount('#product');

