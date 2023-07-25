<template>
  <div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Theme mode-->
    <!--<div class="d-flex align-items-center ms-1 ms-lg-3">
                <a
                  class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                  href="../../demo1/dist/documentation/getting-started/dark-mode.html"
                >
                  <i class="fonticon-sun fs-2"></i>
                </a>
              </div>
              -->
    <!--end::Theme mode-->
    <div
      class="d-flex align-items-center ms-1 ms-lg-3"
      id="kt_header_user_menu_toggle"
    >
      <!--begin::Menu wrapper-->
      <div
        class="cursor-pointer symbol symbol-30px symbol-md-40px"
        data-kt-menu-trigger="click"
        data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end"
      >
        <img
          :src="user.avatar ? $root.$data.host + user.avatar : '@/assets/media/avatars/300-1.jpg'"
          alt="user"
          style="object-fit: cover"
        />
      </div>
      <!--begin::User account menu-->
      <div
        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
        data-kt-menu="true"
      >
        <!--begin::Menu item-->
        <div class="menu-item px-3">
          <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
              <img
                alt="Logo"
                :src="
                  user.avatar ? $root.$data.host + user.avatar : '@/assets/media/avatars/300-1.jpg'
                "
              />
            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
              <div class="fw-bolder d-flex align-items-center fs-5">
                {{ user.name }}
                <!--<span
                            class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"
                            >Pro</span
                          >-->
              </div>
              <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{
                user.email
              }}</a>
            </div>
            <!--end::Username-->
          </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
          <a class="menu-link px-5" @click="goTo('MyProfile')">Meu perfil</a>
        </div>
        <div class="separator my-2"></div>
        <!--end::Menu separator-->

        <!--<div class="menu-item px-5 my-1">
                    <a
                      href="../../demo1/dist/account/settings.html"
                      class="menu-link px-5"
                      >Configurações</a
                    >
                  </div>-->
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
          <a @click="logout()" class="menu-link px-5">Sair</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <!--<div class="separator my-2"></div>-->
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
          <div class="menu-content px-5">
            <label
              class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
              for="themeMode"
            >
              <input
                class="form-check-input w-30px h-20px"
                type="checkbox"
                v-model="theme"
                name="mode"
                id="themeMode"
                @click="changeTheme()"
              />
              <span class="pulse-ring ms-n1"></span>
              <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
            </label>
          </div>
        </div>
        <!--end::Menu item-->
      </div>
      <!--end::User account menu-->
      <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    <!--div
      class="d-flex align-items-center d-lg-none ms-2 me-n3"
      title="Show header menu"
    >
      <div
        class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
        id="kt_header_menu_mobile_toggle"
      >
        <span class="svg-icon svg-icon-1">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
              fill="currentColor"
            />
            <path
              opacity="0.3"
              d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
              fill="currentColor"
            />
          </svg>
        </span>
      </div>
    </div>-->
    <!--end::Header menu toggle-->
  </div>
</template>
<script>
import { mapMutations } from "vuex";

export default {
  data() {
    return {
      user: {
        avatar: null,
        id: null,
      },
      themeLight: true,
    };
  },
  methods: {
    ...mapMutations(["setAuth"]),
    goTo(nameRouter) {
      this.$router.push({ name: nameRouter });
    },

    logout() {
      this.setAuth(null);
      this.$router.push("/logout");
    },

    changeTheme() {
      if (!this.themeLight) {
        this.themeLight = true;
        window.KTApp.setThemeMode("light");
      } else {
        this.themeLight = false;
        window.KTApp.setThemeMode("dark");
      }

      window.KTApp.initPageLoader();
    },
  },
  mounted() {
    this.emitter.on("user", (data) => {
      if (data.avatar) {
        this.user.avatar = data.avatar;
      }

      if (data.name) {
        this.user.name = data.name;
      }

      if (data.email) {
        this.user.email = data.email;
      }
    });
  },
};
</script>