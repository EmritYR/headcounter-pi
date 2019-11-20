<template>
  <v-footer color="primary darken-1" padless dark>
    <v-row justify="center" no-gutters>
      <v-btn
        v-for="link in links"
        :key="link"
        color="white"
        text
        rounded
        class="my-2"
        :href="link.href"
      >
        {{ link.text }}
      </v-btn>
      <v-col class="primary darken-3 py-4 text-center white--text" cols="12">
        {{ new Date().getFullYear() }} — <strong>Stallions</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>

<script>
export default {
  data: () => ({
    links: [
      {
        text: "Home",
        href: "/home"
      },
      {
        text: "About Us",
        href: "/about"
      },
      {
        text: "Team",
        href: "/team"
      },
      {
        text: "Services",
        href: "/services"
      },
      {
        text: "Blog",
        href: "/blog"
      },
      {
        text: "Contact Us",
        href: "/contact"
      }
    ]
  }),
  name: "AppFooter"
};
</script>

<style scoped></style>
