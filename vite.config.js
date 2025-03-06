import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';
// import commonjs from 'vite-plugin-commonjs';

export default defineConfig({
    resolve: {
        alias: {
            vue: resolve(__dirname, 'node_modules/vue/dist/vue.esm-bundler.js'),
        },
    },
    plugins: [
        // commonjs(), // Adiciona suporte para CommonJS
        vue(),
        laravel({
            input: [
                'resources/js/app.js',
                'public/vendor/bootstrap/js/bootstrap.bundle.min.js',

                'public/vendor/fontawesome-free/css/all.min.css',
                'public/vendor/overlayScrollbars/css/OverlayScrollbars.min.css',
                'public/vendor/adminlte/dist/css/adminlte.min.css',
                'resources/css/app.css',

                'public/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
                'public/vendor/adminlte/dist/js/adminlte.min.js',
                // 'resources/js/custom.js',
                'public/plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js'
            ],
            refresh: true
        })
    ],

    build: {
        outDir: 'public/build', // Certifique-se de que os arquivos vão para public/build
        chunkSizeWarningLimit: 1000 // Ajuste o limite de aviso (opcional)
    },

    optimizeDeps: {
        include: ['jquery', 'admin-lte'], // Certifique-se de incluir o AdminLTE e jQuery
    },

});
