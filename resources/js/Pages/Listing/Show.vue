<template>
  <div class="flex flex-col-reverse md:grid grid-cols-12 gap-4">
    <Box class=" md:col-span-7 flex items-center w-full">
      <div class="w-full text-center text-gray-500 text-lg font-medium">
        No Images
      </div>
    </Box>

    <div class="flex flex-col gap-4 md:col-span-5">
      <Box>
        <template #header>
          Basic Info
        </template>
        <div class="flex justify-between">
          <ListingAddress :listing="props.listing" />
          <ListingPrice :price="props.listing.price" />
        </div>

        <div>
          <ListingFeatures :listing="props.listing" class="text-gray-300" />
        </div>
      </Box>

      <Box>
        <template #header>
          Monthly Payments
          <div>
            <label class="label">Interest Rate ({{ interestRate }}%)</label>
            <input
              v-model.number="interestRate"
              type="range" min="0.1" max="30" step="0.1"
              class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
            />

            <label class="label">Duration ({{ duration }} years)</label>
            <input
              v-model.number="duration"

              type="range" min="1" max="30" step="0.5"
              class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
            />

            <div class="text-gray-600 dark:text-gray-300 mt-2">
              <div class="text-gray-400">Monthly payment</div>
              <ListingPrice :price="monthlyPayment" class="text-3xl" />
            </div>


            <div class="flex justify-between mt-2 text-gray-500">
              <div>Listing Price</div>
              <div>
                <ListingPrice :price="listing.price" class="font-medium" />
              </div>
            </div>

            <div class="flex justify-between mt-2 text-gray-500">
              <div>Total Interest</div>
              <div>
                <ListingPrice :price="totalInterest" class="font-medium" />
              </div>
            </div>

            <div class="h-0.5 mt-1 bg-gray-400" />

            <div class="flex justify-between mt-2 text-gray-500">
              <div>Total Paid</div>
              <div>
                <ListingPrice :price="totalPaid" class="font-medium" />
              </div>
            </div>
          </div>
        </template>
        <!--        Make and offer-->
      </Box>
    </div>
  </div>
</template>

<script setup>
import ListingAddress from '../../Components/ListingAddress.vue'
import ListingPrice from '../../Components/ListingPrice.vue'
import ListingFeatures from '../../Components/ListingFeatures.vue'
import Box from '../../Components/UI/Box.vue'
import {ref} from 'vue'
import {useMonthlyPayments} from '../Composables/useMonthlyPayments'

const interestRate = ref(3)
const duration = ref(25)

const props = defineProps({
  listing: Object,
})

const {monthlyPayment, totalPaid, totalInterest} = useMonthlyPayments(interestRate, duration, props.listing.price)
</script>

<style scoped>

</style>
