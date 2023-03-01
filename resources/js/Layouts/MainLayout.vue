<template>
  <header class="main-header">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">
            Listings
          </Link>
        </div>

        <div class="text-xl font-bold text-indigo-600 dark:text-indigo-300 text-center">
          <Link :href="route('listing.index')">
            LaraCompose
          </Link>
        </div>

        <MainButton :action="route('listing.create')" class="button-primary">
          New Listing
        </MainButton>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4">
    <div
      v-if="flashSuccess"
      class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-100 dark:bg-green-900 p-2"
    >
      {{ flashSuccess }}
    </div>

    <slot>
      Default
    </slot>
  </main>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3'
import {computed} from 'vue'
import MainButton from '../UI/MainButton.vue'

const flashSuccess = computed(() =>
  usePage().props.flash.success,
)
</script>

<style scoped>
.success {
	background-color: green;
	color: white;
}
</style>
