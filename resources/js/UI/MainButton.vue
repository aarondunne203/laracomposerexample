<template>
  <div class="text-lg font-medium">
    <Link
      :href="action"
    >
      <!--      class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md"-->

      <slot />
    </Link>
  </div>
</template>
<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({
  action: Object,
})
</script>

<script>
export default {
  name: 'MainButton',
}
</script>
