<template>
  <span>
    <div class="font-bold">
      {{ formattedListingPrice }}
    </div>
  </span>
</template>

<script setup>
import {computed} from 'vue'

const props = defineProps({
  price: [Number, String],
})

const formattedListingPrice = computed(
  () => Number(props.price)
    .toLocaleString('en-IE', {
      style: 'currency',
      currency: 'EUR',
      maximumFractionDigits: 0,
    }))
</script>

<style scoped>

</style>
