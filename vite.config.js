import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/pages/main.js",
                "resources/js/pages/wefts.js",
                "resources/js/pages/tape-hair.js",
                "resources/js/pages/pre-bonded-hair.js",
                "resources/js/pages/bleached-russian-hair.js",
                "resources/js/pages/gray-russian-hair-wholesale.js",
                "resources/js/pages/training.js",
                "resources/js/pages/contact.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
