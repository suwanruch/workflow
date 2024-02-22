import "./bootstrap";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";

import { Quasar } from "quasar";
import quasarIconSet from 'quasar/icon-set/material-icons-round'

// Import icon libraries
import '@quasar/extras/material-icons/material-icons.css'
import '@quasar/extras/material-icons-round/material-icons-round.css'

// Import Quasar css
import "quasar/src/css/index.sass";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(Quasar, {
                plugins: {}, // import Quasar plugins and add here
                iconSet: quasarIconSet,
            })
            .mount(el);
    },
});
