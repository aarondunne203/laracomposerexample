<template>
  <div class="flex md:grid grid-cols-12 gap-4">
    <Box class=" md:col-span-7 flex items-center w-full">
      <div class="w-full text-center text-gray-500 text-lg font-medium">
        No Images
      </div>
    </Box>

    <Box class=" md:col-span-5">
      <div>
        <div class="flex justify-between">
          <ListingAddress :listing="listing" />
          <ListingPrice :price="listing.price" />
        </div>
      </div>

      <div>
        <ListingFeatures :listing="listing" class="text-gray-500" />
      </div>
    </Box>
  </div>
</template>

<script setup>
import ListingAddress from '../../Components/ListingAddress.vue'
import ListingPrice from '../../Components/ListingPrice.vue'
import ListingFeatures from '../../Components/ListingFeatures.vue'
import Box from '../../UI/Box.vue'

defineProps({
  listing: Object,
})
</script>

<style scoped>

</style>
