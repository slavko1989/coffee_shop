import './bootstrap';

import { createApp } from 'vue';
//import router from './router'

import ProductList from './components/ProductList.vue';
import CreateProduct from './components/CreateProduct.vue';
import CategoryList from './components/CategoryList.vue';
const app = createApp({});



app.component('product-list', ProductList);
app.component('category-list', CategoryList);
app.component('create-product', CreateProduct);


app.mount('#app');
//createApp(App).use(router).mount('#app')


