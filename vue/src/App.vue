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
      //host: "http://154.56.40.58",
      theme: false,
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

.p-skeleton {
  background-color: #dee2e6;
  border-radius: 6px;
  overflow: hidden;
}

.p-component {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: normal;
}

.p-skeleton:after {
  background: linear-gradient(
    90deg,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 0.4),
    rgba(255, 255, 255, 0)
  );
}
</style>