<template>
  <form @submit.prevent="applyFilters">
    <div class="mb-8 mt-4 flex flex-wrap gap-2">
      <div class="flex flex-nowrap items-center">
        <input
          v-model.number="filtersForm.priceFrom" type="text" class="input-round-left w-40"
          placeholder="Price From"
        />
        <div class="w-0.5" />
        <input v-model.number="filtersForm.priceTo" type="text" class="input-round-right w-40" placeholder="To" />
      </div>

      <div class="flex flex-nowrap items-center">
        <select v-model="filtersForm.numOfBeds" class="input-round-left">
          <option :value="null">Beds</option>
          <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>

        <div class="w-0.5" />

        <select v-model="filtersForm.numOfBaths" class="input-round-right">
          <option :value="null">Baths</option>
          <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
      </div>

      <div class="flex flex-nowrap items-center">
        <input v-model.number="filtersForm.areaFrom" type="text" class="input-round-left w-40" placeholder="Area From" />
        <div class="w-0.5" />
        <input v-model.number="filtersForm.areaTo" type="text" class="input-round-right w-40" placeholder="To" />
      </div>

      <button
        type="submit"
        class="w-20 bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md active:bg-indigo-700"
      >
        Filter
      </button>

      <button
        type="reset"
        class="w-20 bg-gray-200 dark:bg-gray-800 hover:bg-gray-300 dark:hover:bg-gray-700 text-gray-500 dark:text-white font-medium p-2 rounded-md active:bg-gray-700"
        @click="clearFilters"
      >
        Clear
      </button>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'

const props = defineProps({
  filters: Object,
})

const filtersForm = useForm({
  priceFrom: props.filters.priceFrom ?? null,
  priceTo: props.filters.priceTo ?? null,
  numOfBeds: props.filters.numOfBeds ?? null,
  numOfBaths: props.filters.numOfBaths ?? null,
  areaFrom: props.filters.areaFrom ?? null,
  areaTo: props.filters.areaTo ?? null,
})

const applyFilters = () => {
  filtersForm.get(
    route('listing.index'),
    {
      preserveScroll: true,
      preserveState: true,
    },
  )
}

const clearFilters = () => {
  filtersForm.priceFrom = null
  filtersForm.priceTo = null
  filtersForm.numOfBeds = null
  filtersForm.numOfBaths = null
  filtersForm.areaFrom = null
  filtersForm.areaTo = null

  applyFilters()
}
</script>

<script>
export default {
  name: 'ListingsFilter',
}
</script>

<style scoped>

</style>
