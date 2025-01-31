import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { svelte } from "@sveltejs/vite-plugin-svelte";
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        svelte({
            compilerOptions: {
                hydratable: true,
            },
        }),
    ],
    resolve: {
    alias: {
        '@': resolve(__dirname, 'resources/js'),
        '~': resolve(__dirname, 'resources'),
        'ziggy-js': resolve(__dirname, 'vendor/tightenco/ziggy'),
    },
    extensions: ['.js', '.svelte', '.json'],
}
});
