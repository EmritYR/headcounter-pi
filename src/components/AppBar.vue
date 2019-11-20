<template>
  <v-app-bar app class="stallions-appbar">
    <v-toolbar-title class="headline text-uppercase">
      <span>Stallions |</span>
      <span class="font-weight-light"> Developers </span>
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn text href="/">
      <span class="mr-2">Home</span>
    </v-btn>
    <v-btn text href="/account">
      <span class="mr-2">Account</span>
    </v-btn>
  </v-app-bar>
</template>

<script>
export default {
  name: "AppBar"
};
</script>

<style scoped>
.stallions-appbar {
  background-color: #6497b1 !important;
}
</style>
