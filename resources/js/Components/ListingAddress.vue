<template>
  <span>

    {{ listing.street }}
    {{ listing.street_number }}
    {{ listing.city }}
  </span>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>

<script>
export default {
  name: 'ListingAddress',
}
</script>

<style scoped>

</style>
