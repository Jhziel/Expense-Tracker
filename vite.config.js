import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: "0.0.0.0", // listen on all interfaces
        port: 5173, // optional, make sure matches docker-compose
        strictPort: true,
        hmr: {
            host: "localhost", // your host machine address
            port: 5173,
        },
        watch: {
            usePolling: true, // important for Docker on Linux
        },
    },
});
