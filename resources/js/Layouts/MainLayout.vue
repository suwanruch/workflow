<template>
    <q-layout view="hHh lpR fff">
        <q-header class="bg-grey-8 text-white q-pt-xs" height-hint="98">
            <q-toolbar>
                <q-toolbar-title>
                    <q-avatar>
                        <img src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg">
                    </q-avatar>
                    {{ $page.props.appName }}
                </q-toolbar-title>
                <div class="q-gutter-sm">
                    <q-chip>
                        <q-avatar>
                            <img src="https://cdn.quasar.dev/img/boy-avatar.png">
                        </q-avatar>
                        {{ user.name }}
                    </q-chip>
                    <q-btn flat dense icon="room_preferences" />
                    <q-btn flat dense icon="logout" label="Sign out" @click="this.$inertia.post('/logout')" />
                </div>
            </q-toolbar>

            <q-tabs align="left">
                <q-route-tab to="/page1" label="Page One" />
                <q-route-tab to="/page2" label="Page Two" />
                <q-route-tab to="/page3" label="Page Three" />
            </q-tabs>
        </q-header>

        <q-page-container>
            <slot />
        </q-page-container>

        <q-footer bordered class="bg-grey-8 text-white">
            <q-toolbar>
                <q-toolbar-title>
                    <div>Title</div>
                </q-toolbar-title>
            </q-toolbar>
        </q-footer>

    </q-layout>
</template>

<script>
import { usePage } from '@inertiajs/vue3'

export default {
    name: 'MainLayout',
    setup() {
        const page = usePage()
        document.title = page.props.appName
        return {
            page,
            user : page.props.auth
        }
    },
}
</script>