<template>
  <div
    class="hover-scroll-overlay-y my-5 my-lg-5"
    id="kt_aside_menu_wrapper"
    data-kt-scroll="true"
    data-kt-scroll-activate="{default: false, lg: true}"
    data-kt-scroll-height="auto"
    data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
    data-kt-scroll-wrappers="#kt_aside_menu"
    data-kt-scroll-offset="0"
  >
    <!--begin::Menu-->
    <div
      class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
      id="#kt_aside_menu"
      data-kt-menu="true"
      data-kt-menu-expand="false"
    >
      <!--<div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                  <span class="menu-section text-muted text-uppercase fs-8 ls-1"
                    >Crafted</span
                  >
                </div>
              </div>-->
      <div
        data-kt-menu-trigger="click"
        class="menu-item menu-accordion"
        v-for="menu in menus"
        :key="menu.name"
      >
        <div
          v-if="menu.children.length > 0"
          data-kt-menu-trigger="click"
          class="menu-item menu-accordion"
        >
          <span class="menu-link">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">{{ menu.nameMenu }}</span>
            <span class="menu-arrow"></span>
          </span>
          <div
            v-for="child in menu.children"
            :key="child.name"
            class="menu-sub menu-sub-accordion menu-active-bg"
          >
            <div class="menu-item">
              <a class="menu-link" @click="goTo(child.name)">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">{{ child.nameMenu }}</span>
              </a>
            </div>
          </div>
        </div>
        <div v-else class="menu-item">
          <a
            class="menu-link"
            @click="goTo(menu.name)"
            title="Dashboard"
            data-bs-toggle="tooltip"
            data-bs-trigger="hover"
            data-bs-dismiss="click"
            data-bs-placement="right"
          >
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
              <span class="svg-icon svg-icon-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <rect
                    x="2"
                    y="2"
                    width="9"
                    height="9"
                    rx="2"
                    fill="currentColor"
                  ></rect>
                  <rect
                    opacity="0.3"
                    x="13"
                    y="2"
                    width="9"
                    height="9"
                    rx="2"
                    fill="currentColor"
                  ></rect>
                  <rect
                    opacity="0.3"
                    x="13"
                    y="13"
                    width="9"
                    height="9"
                    rx="2"
                    fill="currentColor"
                  ></rect>
                  <rect
                    opacity="0.3"
                    x="2"
                    y="13"
                    width="9"
                    height="9"
                    rx="2"
                    fill="currentColor"
                  ></rect>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">{{ menu.nameMenu }}</span>
          </a>
        </div>
        <!--<div class="menu-item">
            <div class="menu-content">
              <div class="separator mx-1 my-4"></div>
            </div>
        </div>
        -->
      </div>
      <!--end::Menu-->
    </div>
  </div>
</template>

<script>
import menuAdmin from "@/menuAdmin.js";

export default {
  data() {
    return {
      menus: null,
    };
  },
  methods: {
    goTo(name) {
      this.$router.push({ name: name });
    },
  },
  mounted() {
    this.menus = menuAdmin;
  },
};
</script>
