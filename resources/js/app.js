import './bootstrap';

import { createApp } from 'vue';  // Importe o Vue
import MultipleImageUpload from './components/common/MultipleImageUpload.vue';  // Importe seu componente Vue


const app = createApp(MultipleImageUpload);  // Crie a aplicação Vue e monte no elemento com id="app"


app.mount('#app');

