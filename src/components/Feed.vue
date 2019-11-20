<template>
  <v-container>
    <v-layout text-center wrap>
      <v-flex mb-10 xs12>
        <h2 class="headline font-weight-bold mb-3">Current Projects</h2>
        <v-layout justify-center>
          <a
            v-for="(next, i) in whatsNext"
            :key="i"
            :href="next.href"
            class="subheading mx-3"
          >
            {{ next.text }}
          </a>
        </v-layout>
      </v-flex>

      <v-flex xs12 mb-5>
        <h2 class="headline font-weight-bold mb-3">Past Projects Links</h2>
        <v-layout justify-center>
          <a
            v-for="(link, i) in importantLinks"
            :key="i"
            :href="link.href"
            class="subheading mx-3"
          >
            {{ link.text }}
          </a>
        </v-layout>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    importantLinks: [
      {
        text: "Imgur App",
        href: "https://gentle-peak-15231.herokuapp.com/"
      }
    ],
    whatsNext: [
      {
        text: "Software Engineering II",
        href: "/COMP3613"
      },
      {
        text: "Human Computer Interaction",
        href: "/COMP3603"
      }
    ]
  }),
  name: "Feed"
};
</script>

<style scoped></style>
