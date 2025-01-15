import '../css/app.css';
import './bootstrap.js';

import { createInertiaApp } from '@inertiajs/svelte';
import { mount } from 'svelte';
import { route } from 'ziggy-js';
import { Ziggy } from "./ziggy";
window.route = (name, params, absolute, config) =>
  route(name, params, absolute, Ziggy);

import Layout from './Layouts/Public.svelte';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.svelte', { eager: false })
        return pages[`./Pages/${name}.svelte`]()
    },
    setup({ el, App, props }) {
        mount(App, { target: el, props })
    },
    progress: {
        color: "#4B5563",
        showSpinner: true,
    },
})
