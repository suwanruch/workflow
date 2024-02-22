import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { quasar, transformAssetUrls } from "@quasar/vite-plugin";
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue({
            template: { transformAssetUrls },
        }),
        quasar({
            sassVariables: "resources/sass/quasar-variables.sass",
        }),
    ],
    resolve: {
        alias: {
            "@Layouts": path.resolve(__dirname, "resources/js/Layouts"),
        },
    },
});
