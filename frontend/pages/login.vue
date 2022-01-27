<template>
  <form>
    <input type="email" v-model="email">

    <input type="password" v-model="password">
  </form>
</template>

<script>
export default {
  name: "login",
  data() {
    return {
      'email': '',
      'password': ''
    }
  },
  methods: {
    submit() {
      this.$auth.loginWith('laravelSanctum', {
        data: {
          email: this.email,
          password: this.password
        }
      })
    }
  }
}
</script>

<style scoped>

</style>
