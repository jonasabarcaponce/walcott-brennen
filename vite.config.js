import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as glob from 'glob';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...glob.sync('resources/css/*'),
                ...glob.sync('resources/js/*'),
                ...glob.sync('resources/img/*.png'),
                ...glob.sync('resources/img/*.jpg'),
                ...glob.sync('resources/img/*.ico'),
                ...glob.sync('resources/img/*.svg'),
                ...glob.sync('resources/img/screens/*.png'),
            ],
            refresh: true,
        }),
    ],
});
