<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
        <div v-if="form.errors.beds" class="error">
          {{ form.errors.beds }}
        </div>
      </div>

      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="text" />
        <div v-if="form.errors.baths" class="error">
          {{ form.errors.baths }}
        </div>
      </div>

      <div>
        <label>Area</label>
        <input v-model.number="form.area" type="text" />
        <div v-if="form.errors.area" class="error">
          {{ form.errors.area }}
        </div>
      </div>

      <div>
        <label>City</label>
        <input v-model="form.city" type="text" />
        <div v-if="form.errors.city" class="error">
          {{ form.errors.city }}
        </div>
      </div>

      <div>
        <label>Post Code</label>
        <input v-model="form.code" type="text" />
        <div v-if="form.errors.code" class="error">
          {{ form.errors.code }}
        </div>
      </div>

      <div>
        <label>Street</label>
        <input v-model="form.street" type="text" />
        <div v-if="form.errors.street" class="error"> {{ form.errors.street }}</div>
      </div>

      <div>
        <label>Street Nr</label>
        <input v-model.number="form.street_number" type="text" />
        <div v-if="form.errors.street_number" class="error">
          {{ form.errors.street_number }}
        </div>
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
        <div v-if="form.errors.price" class="error">
          {{ form.errors.price }}
        </div>
      </div>

      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'

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
const create = () => form.post(route('listing.create'))

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
