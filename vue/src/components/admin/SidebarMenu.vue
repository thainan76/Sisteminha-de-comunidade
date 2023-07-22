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
            <span class="menu-icon">
              <span class="material-symbols-outlined">
                {{ menu.classIcon }}
              </span>
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
                <span class="menu-icon">
                  <span class="material-symbols-outlined">
                    {{ child.classIcon }}
                  </span>
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
              <span class="material-symbols-outlined">
                {{ menu.classIcon }}
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
      let width = document.querySelector("html").offsetWidth;
      if (width <= 992) {
        window.KTDrawer.hideAll();
      }
      
      this.$router.push({ name: name });
    },

    setMenu() {
      let menuPermissions = [];
      let menuChildAux = [];
      //console.log(this.$root.configPermissions.menus, "menu db");
      //console.log(menuAdmin, "menu fixed");

      if (this.$root.configPermissions != undefined) {
        menuAdmin.forEach((menuFather) => {
          if (menuFather.private) {
            menuChildAux = [];

            menuFather.children.forEach((menuChild) => {
              // menu está privado
              if (menuChild.private) {
                this.$root.configPermissions.menus.forEach((menuDB) => {
                  /*
                   console.log(menuChild.nameMenu, "menuChild.nameMenu");
                   console.log(menuDB.read, "menuChild.read");
                   console.log(menuDB.menuName, "menuChild.menuName");
                  */
                  if (
                    menuChild.nameMenu.includes(menuDB.menuName) &&
                    menuDB.read
                  ) {
                    // add menu child
                    menuChildAux.push(menuChild);
                  }
                });
              } else {
                // add menu child
                menuChildAux.push(menuChild);
              }
            });

            // caso tenha encontrado alguns menu children
            if (menuChildAux.length) {
              // add menu child in father
              menuFather.children = menuChildAux;

              // add menu father
              menuPermissions.push(menuFather);
            }
          } else {
            // add menu father
            menuPermissions.push(menuFather);
          }
        });
      }

      //console.log(menuPermissions, "menu permissions");

      return menuPermissions;
    },
  },
  async mounted() {
    this.emitter.on("config", (data) => {
      this.$root.configPermissions = data;
      this.menus = this.setMenu();
    });
  },
};
</script>
