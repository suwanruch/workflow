<template>
    <q-layout view="hHh lpR fff">
        <q-page-container>
            <slot />
        </q-page-container>
    </q-layout>
</template>

<script>
import { usePage } from '@inertiajs/vue3'

export default {
    name: 'AuthLayout',
    setup() {
        const page = usePage()
        document.title = page.props.appName
        return {
            page
        }
    },
}
</script>