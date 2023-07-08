<template>
  <notifications />
  <router-view></router-view>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      host: "http://127.0.0.1:8000",
      theme: false
    };
  },
  components: {},
  mounted() {
    this.emitter.on("theme", (data) => {
      this.theme = data;
    });
  },
};
</script>

<style>
@import "@/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css";
@import "@/assets/plugins/custom/datatables/datatables.bundle.css";
@import "@/assets/plugins/global/plugins.bundle.css";
@import "@/assets/css/style.css";

.material-symbols-outlined {
  font-variation-settings: "FILL" 0, "wght" 200, "GRAD" 0, "opsz" 48;
}
</style>