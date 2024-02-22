<template>
    <q-card class="auth-card shadow-2">
        <q-card-section>
            <slot />
        </q-card-section>
    </q-card>
</template>

<style lang="sass" scoped>
.auth-card
  width: 95%
  max-width: 356px
</style>

<script setup></script>