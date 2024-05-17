import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/gweb.scss', "resources/scss/hero.scss"],
            refresh: true,
        }),
    ],
});
