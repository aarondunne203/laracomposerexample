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

        <div>
          <div v-if="user" class="flex gap-4 items-center">
            <div class="font-medium hover:text-indigo-600 dark:hover:text-indigo-300">
              <Link>{{ user.name }}</Link>
            </div>

            <MainButton :action="route('listing.create')" class="button-primary">
              New Listing
            </MainButton>

            <div v-if="user" class="font-medium hover:text-indigo-600 dark:hover:text-indigo-300">
              <Link :href="route('logout')" method="delete">Logout</Link>
            </div>
          </div>


          <div v-else class="gap-4 flex">
            <div class="nav-link">
              <Link :href="route('user-account.create')">Register</Link>
            </div>
            <div class="nav-link">
              <Link :href="route('login')">Login</Link>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
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

const user = computed(() =>
  usePage().props.user,
)
</script>
