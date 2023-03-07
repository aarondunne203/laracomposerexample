<template>
  <Box>
    <div>
      <Link :href="route('listing.show', {listing: props.listing.id})">
        <div>
          <div class="flex w-full items-center gap-2">
            <ListingPrice :price="listing.price" class="text-2xl" />
            <div class="text-xs text-gray-500 flex">
              <ListingPrice :price="monthlyPayment" />&nbsp;p/m*
            </div>
          </div>

          <ListingFeatures :listing="listing" />

          <ListingAddress :listing="listing" class="text-gray-500" />
        </div>

        <div class="flex pt-2 gap-2 justify-between">
          <MainButton
            :action="route('listing.edit', {listing: listing.id})"
            class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md"
          >
            Edit
          </MainButton>

          <Link
            :href="route('listing.destroy', {listing: listing.id})" method="delete"
            class="bg-red-500 hover:bg-red-400 active:bg-red-700 text-white font-medium p-2 rounded-md"
          >
            Delete
          </Link>
        </div>
      </Link>
    </div>
  </Box>
</template>

<script setup>
import Box from '../../../../Components/UI/Box.vue'
import {Link} from '@inertiajs/vue3'
import ListingPrice from '../../../../Components/ListingPrice.vue'
import ListingFeatures from '../../../../Components/ListingFeatures.vue'
import ListingAddress from '../../../../Components/ListingAddress.vue'
import MainButton from '../../../../Components/UI/MainButton.vue'
import {useMonthlyPayments} from '../../../Composables/useMonthlyPayments'

const props = defineProps({
  listing: Object,
})

const {monthlyPayment} = useMonthlyPayments(3, 25, props.listing.price)

</script>


<style scoped>

</style>
