<template>
  <div>Index</div>
  <Link href="/home">Show Page</Link>
  <div>Message: {{ $props.message }}</div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({
  message: String,
})
</script>

<script>
import MainLayout from '../../Layouts/MainLayout.vue'

export default {
  layout: MainLayout,
}
</script>

<style scoped>

</style>
