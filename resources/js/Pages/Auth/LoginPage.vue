<template>
    <q-page class="flex flex-center">
        <auth-card>
            <div class="doc-card-title ">

            </div>
            <q-card-section class="text-center">
                <q-icon name="key" color="secondary" class="rotate-45" size="4rem" />
            </q-card-section>
            <q-card-section>
                <form @submit.prevent="form.post('/login')">
                    <div class="q-gutter-md q-mb-lg">
                        <q-input outlined label="Username" type="text" v-model="form.username" :rules="[
                            val => !!val || 'Field is required',
                            val => /^[A-Za-z]+$/.test(val) || 'Please check your username'
                        ]" />
                        <q-input outlined label="Password" type="password" v-model="form.password" />
                        <q-checkbox dense label="Remember me" v-model="form.remember" />
                    </div>
                    <q-btn no-caps type="submit" unelevated color="secondary" label="Sign in" class="full-width q-mb-sm" />
                    <q-btn no-caps href="/password/forgot" flat label="Forgot Password?" />
                </form>
            </q-card-section>
        </auth-card>
    </q-page>
</template>

<script>
import AuthLayout from '@/Layouts/AuthLayout.vue'
import AuthCard from '@/Components/AuthCard.vue'
import { useForm } from '@inertiajs/vue3'

export default {
    layout: AuthLayout,
    components: { AuthCard },
    data: () => ({
        rememberMe: true,
    }),
    setup() {
        const form = useForm({
            username: null,
            password: null,
            remember: false,
        })

        return {
            form
        }
    }
}
</script>