import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { mix } from 'laravel-mix/src/File';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        
    ],
    

});
