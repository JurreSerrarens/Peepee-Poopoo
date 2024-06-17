import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css' , 'resources/css/layout.css' , 'resources/css/attaractie.css' , 
            'resources/css/attaractieDetail.css', 'resources/css/confirmation.css', 'resources/css/contact.css', 
            'resources/css/home.css', 'resources/css/order.css', 'resources/css/test.css' , 'resources/css/crud.css'],
            refresh: true,
        }),
    ],
});
