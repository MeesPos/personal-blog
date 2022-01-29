<template>
  <div>
    <form @submit.prevent="login">
      <input type="email" v-model="email" class="border">

      <input type="password" v-model="password" class="border">

      <input type="submit" value="Submit">
    </form>
  </div>
</template>

<script>
export default {
  name: "login",
  data() {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    login() {
      this.$auth.loginWith('laravelSanctum', {
        data: {
          email: 'mail@meespostma.nl',
          password: 'secret'
        }
      })
    }
  }
}
</script>

<style scoped>

</style>
