<template>
    <q-page class="flex flex-center">
        <auth-card>
            <q-card-section class="text-center">
                <q-icon name="password" color="secondary" size="4rem" />
            </q-card-section>
            <q-card-section>
                <div class="q-gutter-md q-mb-lg">
                    <q-input outlined label="Email" />
                </div>
                <q-btn no-caps unelevated color="secondary" label="Send" class="full-width q-mb-sm" />
                <q-btn no-caps flat label="Sign in" href="/login" class="full-width" />
            </q-card-section>
        </auth-card>
    </q-page>
</template>

<script>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import AuthCard from '@/Components/AuthCard.vue'
export default {
    layout: AuthLayout,
    components: { AuthCard },
}
</script>