<template>
    <div class="q-pa-md">
        <q-carousel v-model="slide" transition-prev="jump-right" transition-next="jump-left" swipeable animated
            control-color="white" prev-icon="arrow_left" next-icon="arrow_right" navigation-icon="radio_button_unchecked"
            navigation padding arrows height="300px" class="bg-grey text-white shadow-1 rounded-borders">
            <q-carousel-slide name="style" class="column no-wrap flex-center">
                <q-icon name="style" size="56px" />
                <div class="q-mt-md text-center">
                    {{ lorem }}
                </div>
            </q-carousel-slide>
            <q-carousel-slide name="tv" class="column no-wrap flex-center">
                <q-icon name="live_tv" size="56px" />
                <div class="q-mt-md text-center">
                    {{ lorem }}
                </div>
            </q-carousel-slide>
            <q-carousel-slide name="layers" class="column no-wrap flex-center">
                <q-icon name="layers" size="56px" />
                <div class="q-mt-md text-center">
                    {{ lorem }}
                </div>
            </q-carousel-slide>
            <q-carousel-slide name="map" class="column no-wrap flex-center">
                <q-icon name="terrain" size="56px" />
                <div class="q-mt-md text-center">
                    {{ lorem }}
                </div>
            </q-carousel-slide>
        </q-carousel>
    </div>
</template>
<script>
import { ref } from 'vue'
import MainLayout from '@Layouts/MainLayout.vue';

export default {
    layout: MainLayout,
    setup() {
        return {
            slide: ref('style'),
            lorem: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.'
        }
    }
}
</script>