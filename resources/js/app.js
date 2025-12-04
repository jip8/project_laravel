import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import ProductList from './components/ProductList.vue';

window.Alpine = Alpine;
Alpine.start();

if (document.getElementById('app')) {
    const app = createApp(ProductList);
    app.mount('#app');
}
