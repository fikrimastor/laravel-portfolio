import '../css/app.css';
import './bootstrap.js';

import { createInertiaApp } from '@inertiajs/svelte';
import { mount } from 'svelte';
import Layout from './Layouts/Public.svelte';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.svelte', { eager: true })
        let page = pages[`./Pages/${name}.svelte`]
        return { default: page.default, layout: page.layout || Layout }
    },
    setup({ el, App, props }) {
        mount(App, { target: el, props })
    },
    progress: {
        color: "#4B5563",
        showSpinner: true,
    },
}).then(r => {})
