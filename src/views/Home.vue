<template>
  <v-container>
    <v-row justify="center">
      <Introduction />
      <Feed />
    </v-row>
  </v-container>
</template>

<script>
import Introduction from "../components/Introduction";
import Feed from "../components/Feed";

export default {
  components: { Feed, Introduction },
  data: () => ({
    //
  })
};
</script>
