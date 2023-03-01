<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Beds</label>
        <input
          v-model.number="form.beds" type="text"
          class="input"
        />
        <div v-if="form.errors.beds" class="error">
          {{ form.errors.beds }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Baths</label>
        <input
          v-model.number="form.baths" type="text"
          class="input"
        />
        <div v-if="form.errors.baths" class="flash-error">
          {{ form.errors.baths }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Area</label>
        <input
          v-model.number="form.area" type="text"
          class="input"
        />
        <div v-if="form.errors.area" class="flash-error">
          {{ form.errors.area }}
        </div>
      </div>

      <div class="col-span-4">
        <label class="label">City</label>
        <input
          v-model="form.city" type="text"
          class="input"
        />
        <div v-if="form.errors.city" class="flash-error">
          {{ form.errors.city }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Post Code</label>
        <input
          v-model="form.code" type="text"
          class="input"
        />
        <div v-if="form.errors.code" class="flash-error">
          {{ form.errors.code }}
        </div>
      </div>

      <div class="col-span-4">
        <label class="label">Street</label>
        <input
          v-model="form.street" type="text"
          class="input"
        />
        <div v-if="form.errors.street" class="flash-error">
          {{ form.errors.street }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Street Nr</label>
        <input
          v-model.number="form.street_number" type="text"
          class="input"
        />
        <div v-if="form.errors.street_number" class="flash-error">
          {{ form.errors.street_number }}
        </div>
      </div>

      <div class="col-span-6">
        <label class="label">Price</label>
        <input
          v-model.number="form.price" type="text"
          class="input"
        />
        <div v-if="form.errors.price" class="flash-error">
          {{ form.errors.price }}
        </div>
      </div>

      <div>
        <button type="submit" class="button-primary">
          Create
        </button>
        <!--        <MainButton-->
        <!--          type="submit"-->
        <!--          class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md"-->
        <!--        >-->
        <!--          Create-->
        <!--        </MainButton>-->
      </div>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'
// import MainButton from '../../UI/MainButton.vue'

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  code: null,
  street: null,
  street_number: 0,
  price: 0,
})

// eslint-disable-next-line no-undef
const create = () => form.post(route('listing.store'))

defineProps({})
</script>

<script>
export default {
  name: 'Create',
}
</script>

<style scoped>
label {
	margin-right: 2em;
}

div {
	padding: 2px
}

.error {
	color: red;
}
</style>
