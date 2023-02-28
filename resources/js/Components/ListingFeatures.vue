<template>
  <div>
    <span class="font-bold">{{ listing.beds }}</span><span> bedroom</span>

    &nbsp;<span>|</span>&nbsp;

    <span class="font-bold">{{ listing.baths }}</span><span> baths</span>

    &nbsp;<span>|</span>&nbsp;

    <span class="font-bold">{{ listing.area }}</span><span> m²</span>
  </div>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>

<script>
export default {
  name: 'ListingFeatures',
}
</script>

<style scoped>

</style>
