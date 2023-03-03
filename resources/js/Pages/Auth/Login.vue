<template>
  <form @submit.prevent="login">
    <div class="w-1/2 mx-auto">
      <div class="page-heading">
        Login
      </div>

      <div class="mt-4">
        <label class="label">Email</label>
        <input id="email" v-model="form.email" type="text" class="input" />
        <div v-if="form.errors.email" class="flash-error">
          {{ form.errors.email }}
        </div>
      </div>

      <div class="mt-4">
        <label class="label">Password</label>
        <input id="password" v-model="form.password" type="password" class="input" />
        <div v-if="form.errors.password" class="flash-error">
          {{ form.errors.password }}
        </div>
      </div>

      <div class="mt-4 gap-4">
        <button class="button-primary w-full" type="submit">
          Login
        </button>

        <div class="mt-4 items-center justify-center flex">
          <div class="font-medium">Don't have an account?&nbsp;</div>
          <Link :href="route('user-account.create')" class="nav-link">Register here</Link>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3'

const form = useForm({
  email: null,
  password: null,
})

// eslint-disable-next-line no-undef
const login = () => form.post(route('login.store'))
</script>

<script>
export default {
  name: 'Login',
}
</script>

<style scoped>

</style>
