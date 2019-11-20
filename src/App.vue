<template>
  <v-app>
    <AppBar />
    <v-content class="stallions-content">
      <Contents />
    </v-content>
    <AppFooter />
  </v-app>
</template>

<script>
import Contents from "./components/Contents";
import AppBar from "./components/AppBar";
import AppFooter from "./components/AppFooter";

export default {
  name: "App",
  components: { AppFooter, AppBar, Contents },
  data: () => ({
    //
  })
};
</script>

<style scoped>
.stallions-content {
  background-color: #b3cde0;
}
</style>
