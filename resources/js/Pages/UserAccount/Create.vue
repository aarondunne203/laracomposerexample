<template>
  <form @submit.prevent="register">
    <div class="w-1/2 mx-auto">
      <div class="page-heading">
        Register
      </div>
      <div class="mt-4">
        <label for="name" class="label">Name</label>

        <input id="name" v-model="form.name" type="text" class="input" />

        <div v-if="form.errors.name" class="flash-error">
          {{ form.errors.name }}
        </div>
      </div>

      <div class="mt-4">
        <label for="email" class="label">Email</label>

        <input id="email" v-model="form.email" type="text" class="input" />

        <div v-if="form.errors.email" class="flash-error">
          {{ form.errors.email }}
        </div>
      </div>

      <div class="mt-4">
        <label for="password" class="label">Password</label>

        <input id="password" v-model="form.password" type="password" class="input" />

        <div v-if="form.errors.password" class="flash-error">
          {{ form.errors.password }}
        </div>
      </div>

      <div class="mt-4">
        <label for="password_confirmation" class="label">Confirm Password</label>

        <input id="password_confirmation" v-model="form.password_confirmation" type="password" class="input" />

        <div v-if="form.errors.password_confirmation" class="flash-error">
          {{ form.errors.password_confirmation }}
        </div>
      </div>

      <div class="mt-4">
        <button class="button-primary w-full" type="submit">
          Create Account
        </button>

        <div class="mt-4 items-center justify-center flex">
          <div class="font-medium">Have an account?&nbsp;</div>
          <Link :href="route('login')" class="nav-link">Login here</Link>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3'


const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
})
// eslint-disable-next-line no-undef
const register = () => form.post(route('user-account.store'))
</script>

<script>
export default {
  name: 'Create',
}
</script>

<style scoped>

</style>
