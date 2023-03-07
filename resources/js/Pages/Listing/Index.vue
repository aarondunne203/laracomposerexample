<template>
  <ListingsFilter :filters="filters" />

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
    <Listing v-for="listing in listings.data" :key="listing.id" :listing="listing" />
  </div>
  <div
    v-if="listings.data.length" class="w-full flex justify-center mt-4 mb-4"
  >
    <PagePaginator :links="listings.links" />
  </div>
  <div class="text-xs dark:text-gray-200">
    * - Monthly payments based on a repayment plan of 25 years at an interest rate
    of 3%
  </div>
</template>

<script setup>
import Listing from './Index/Components/Listing.vue'
import PagePaginator from '../../Components/UI/PagePaginator.vue'
import ListingsFilter from './Index/Components/ListingsFilter.vue'

defineProps({
  listings: Object,
  filters: Object,
})

</script>

<style scoped>

</style>
