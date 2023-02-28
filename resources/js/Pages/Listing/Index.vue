<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', {listing: listing.id})">
          <div class="flex justify-between">
            <ListingAddress :listing="listing" />
            <ListingPrice :price="listing.price" />
          </div>
        </Link>
      </div>

      <div>
        <ListingFeatures :listing="listing" class="text-gray-500" />
      </div>

      <div class=" flex pt-2 gap-2 justify-between">
        <MainButton class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
          Edit
        </MainButton>

        <MainButton class="bg-red-500 hover:bg-red-400 text-white font-medium p-2 rounded-md">
          Delete
        </MainButton>
      </div>
    </Box>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import ListingAddress from '../../Components/ListingAddress.vue'
import Box from '../../UI/Box.vue'
import MainButton from '../../UI/MainButton.vue'
import ListingPrice from '../../Components/ListingPrice.vue'
import ListingFeatures from '../../Components/ListingFeatures.vue'

defineProps({
  listings: Array,
})
</script>

<style scoped>

</style>
