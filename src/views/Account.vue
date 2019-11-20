<template>
  <v-container>
    <v-layout text-center wrap>
      <v-flex mb-10 xs12>
        <h1 class="headline font-weight-bold mb-3">Account</h1>
        <Login />
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import Login from "../components/Login";
export default {
  name: "Account",
  components: { Login }
};
</script>

<style scoped></style>
