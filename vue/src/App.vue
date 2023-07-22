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

.symbol > img {
  object-fit: cover;
}

:root {
  --ck-color-table-column-resizer-hover: #002457;
  --ck-table-column-resizer-width: 7px;
  --ck-table-column-resizer-position-offset: calc(
    var(--ck-table-column-resizer-width) * -0.5 - 0.5px
  );
}

body {
  --fc-event-border-color: #002457;
  --fc-event-bg-color: #002457;
  --fc-event-text-color: #ffffff;
}

.btn.btn-active-color-primary.active .svg-icon {
  color: #fff !important;
}

.btn.btn-active-color-primary:hover:not(.btn-active) .svg-icon {
  color: #fff !important;
}

.btn.btn-primary {
  color: #fff !important;
  border-color: #002457 !important;
  background-color: #002457 !important;
}

.btn.btn-primary:hover {
  color: #fff !important;
  border-color: #002457 !important;
  background-color: #002457 !important;
}

.btn-check:active + .btn.btn-primary,
.btn-check:checked + .btn.btn-primary,
.btn.btn-primary.active,
.btn.btn-primary.show,
.btn.btn-primary:active:not(.btn-active),
.btn.btn-primary:focus:not(.btn-active),
.btn.btn-primary:hover:not(.btn-active),
.show > .btn.btn-primary {
  color: #fff !important;
  border-color: #002457 !important;
  background-color: #002457 !important;
}

.aside-dark
  .menu
  .menu-item.hover:not(.here)
  > .menu-link:not(.disabled):not(.active):not(.here)
  .menu-icon,
.aside-dark
  .menu
  .menu-item.hover:not(.here)
  > .menu-link:not(.disabled):not(.active):not(.here)
  .menu-icon
  .svg-icon,
.aside-dark
  .menu
  .menu-item.hover:not(.here)
  > .menu-link:not(.disabled):not(.active):not(.here)
  .menu-icon
  i,
.aside-dark
  .menu
  .menu-item:not(.here)
  .menu-link:hover:not(.disabled):not(.active):not(.here)
  .menu-icon,
.aside-dark
  .menu
  .menu-item:not(.here)
  .menu-link:hover:not(.disabled):not(.active):not(.here)
  .menu-icon
  .svg-icon,
.aside-dark
  .menu
  .menu-item:not(.here)
  .menu-link:hover:not(.disabled):not(.active):not(.here)
  .menu-icon
  i {
  color: #fff !important;
}

.page-item.active .page-link {
  background-color: #002457 !important;
}

.page-link:hover {
  color: #002457 !important;
}

.menu-state-primary
  .menu-item.hover:not(.here)
  > .menu-link:not(.disabled):not(.active):not(.here),
.menu-state-primary
  .menu-item:not(.here)
  .menu-link:hover:not(.disabled):not(.active):not(.here) {
  transition: color 0.2s ease, background-color 0.2s ease;
  color: #002457;
}

.btn-check:active + .btn.btn-active-light-primary,
.btn-check:checked + .btn.btn-active-light-primary,
.btn.btn-active-light-primary.active,
.btn.btn-active-light-primary.show,
.btn.btn-active-light-primary:active:not(.btn-active),
.btn.btn-active-light-primary:focus:not(.btn-active),
.btn.btn-active-light-primary:hover:not(.btn-active),
.show > .btn.btn-active-light-primary {
  color: #002457 !important;
  border-color: #f1faff;
  background-color: #f1faff !important;
}

.btn-check:active + .btn.btn-active-light-primary .svg-icon,
.btn-check:active + .btn.btn-active-light-primary i,
.btn-check:checked + .btn.btn-active-light-primary .svg-icon,
.btn-check:checked + .btn.btn-active-light-primary i,
.btn.btn-active-light-primary.active .svg-icon,
.btn.btn-active-light-primary.active i,
.btn.btn-active-light-primary.show .svg-icon,
.btn.btn-active-light-primary.show i,
.btn.btn-active-light-primary:active:not(.btn-active) .svg-icon,
.btn.btn-active-light-primary:active:not(.btn-active) i,
.btn.btn-active-light-primary:focus:not(.btn-active) .svg-icon,
.btn.btn-active-light-primary:focus:not(.btn-active) i,
.btn.btn-active-light-primary:hover:not(.btn-active) .svg-icon,
.btn.btn-active-light-primary:hover:not(.btn-active) i,
.show > .btn.btn-active-light-primary .svg-icon,
.show > .btn.btn-active-light-primary i {
  color: #002457 !important;
}

.menu-state-bg-light-primary
  .menu-item.hover:not(.here)
  > .menu-link:not(.disabled):not(.active):not(.here),
.menu-state-bg-light-primary
  .menu-item:not(.here)
  .menu-link:hover:not(.disabled):not(.active):not(.here) {
  transition: color 0.2s ease, background-color 0.2s ease;
  background-color: #f1faff;
  color: #002457 !important;
}

.text-hover-primary:hover {
  transition: color 0.2s ease, background-color 0.2s ease;
  color: #002457 !important;
}

.pulse.pulse-success .pulse-ring {
  border-color: #fff !important;
}

.form-check.form-check-solid .form-check-input:checked {
  background-color: #002457 !important;
}

.btn.btn-light-primary {
  color: #002457 !important;
  border-color: #f1faff;
  background-color: #f1faff;
}

.btn-check:active+.btn.btn-light-primary, .btn-check:checked+.btn.btn-light-primary, .btn.btn-light-primary.active, .btn.btn-light-primary.show, .btn.btn-light-primary:active:not(.btn-active), .btn.btn-light-primary:focus:not(.btn-active), .btn.btn-light-primary:hover:not(.btn-active), .show>.btn.btn-light-primary {
  background-color: #002457!important;
  color: #fff!important;
}

.btn-check:active+.btn.btn-active-color-primary, .btn-check:checked+.btn.btn-active-color-primary, .btn.btn-active-color-primary.active, .btn.btn-active-color-primary.show, .btn.btn-active-color-primary:active:not(.btn-active), .btn.btn-active-color-primary:focus:not(.btn-active), .btn.btn-active-color-primary:hover:not(.btn-active), .show>.btn.btn-active-color-primary {
    color: #002457 !important;
}
</style>