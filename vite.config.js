import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
>>>>>>> 3cc5823 (Commit laundrysinar)
            refresh: true,
        }),
    ],
});
