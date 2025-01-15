import { createInertiaApp } from '@inertiajs/svelte'
import createServer from '@inertiajs/svelte/server'
import { render } from 'svelte/server';
import Layout from './Layouts/Public.svelte';
import { route } from 'ziggy-js';
import { Ziggy } from './ziggy.js';

global.route = (name, params, absolute, config) =>
  route(name, params, absolute, Ziggy);

createServer(page =>
    createInertiaApp({
        id: 'my-app',
        page,
        resolve: name => {
            const pages = import.meta.glob('./Pages/**/*.svelte', { eager: true })
            let page = pages[`./Pages/${name}.svelte`]
            return { default: page.default, layout: page.layout || Layout }
        },
        setup({ App, props }) {
            return render(App, { props })
        }
    }),
)