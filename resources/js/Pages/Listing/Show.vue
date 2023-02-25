<template>
  <div>
    {{ listing.street }}
    {{ listing.street_number }}
    {{ listing.city }}
    {{ listing.price }}
  </div>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>

<style scoped>

</style>
