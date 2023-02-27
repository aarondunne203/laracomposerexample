<template>
  <span>
    {{ listing.street }}
    {{ listing.street_number }}
    {{ listing.city }}
    ${{ listing.price }}
		
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
