<template>
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <!--begin::Aside -->
      <!-- class="aside aside-dark aside-hoverable" -->
      <div
        id="kt_aside"
        class="aside aside-dark aside-hoverable" data-kt-drawer="true"
				data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
				data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
				data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle"
      >
        <!--begin::Brand-->
        <div class="aside-logo flex-column-auto" id="kt_aside_logo">
          <!--begin::Logo-->
          <a href="../../demo1/dist/index.html">
            <img
              alt="Logo"
              src="@/assets/favicon_movimentesim.png"
              class="h-25px logo"
            />
          </a>
          <!--end::Logo-->
          <!--begin::Aside toggler-->
          <div
            id="kt_aside_toggle"
            class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize"
          >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  opacity="0.5"
                  d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                  fill="currentColor"
                />
                <path
                  d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </div>
          <!--end::Aside toggler-->
        </div>
        <!--end::Brand-->
        <!--begin::Aside menu-->
        <div class="aside-menu flex-column-fluid">
          <!--begin::Aside Menu-->
          <sidebar-menu-vue></sidebar-menu-vue>
          <!--end::Aside Menu-->
        </div>
        <!--end::Aside menu-->
        <!--begin::Footer MENU-->
        <sidebar-menu-footer></sidebar-menu-footer>
        <!--end::Footer-->
      </div>
      <!--end::Aside-->
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" style="" class="header align-items-stretch">
          <!--begin::Container-->
          <div
            class="container-fluid d-flex align-items-stretch justify-content-between"
          >
            <!--begin::Aside mobile toggle-->
            <div
              class="d-flex align-items-center d-lg-none ms-n2 me-2"
              title="Show aside menu"
            >
              <div
                class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle"
              >
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                      fill="currentColor"
                    />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </div>
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
              <a href="#" class="d-lg-none">
                <img
                  alt="Logo"
                  src="data:image/png;base64,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"
                  class="h-30px"
                />
              </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Wrapper-->
            <div
              class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
            >
              <!--begin::Navbar-->
              <navbar-menu></navbar-menu>
              <!--end::Navbar-->
              <!--begin::Toolbar wrapper-->
              <navbar-menu-toolbar></navbar-menu-toolbar>
              <!--end::Toolbar wrapper-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <router-view></router-view>
        <!--end::Content-->
        <!--begin::Footer-->
        <footer-componet></footer-componet>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    <!--begin::Page loading(append to body)-->
    <div
      v-if="loadingGlobal"
      class="page-loader d-flex flex-column align-items-center justify-content-center"
      :class="{ 'd-block': loadingGlobal, 'd-none': !loadingGlobal }"
    >
      <span class="spinner-border text-primary" role="status"></span>
      <span class="text-muted fs-6 fw-semibold mt-5">Loading...</span>
    </div>
    <!--end::Page loading-->
  </div>
</template>

<script>
import FooterComponet from "./FooterComponet.vue";
import NavbarMenu from "./NavbarMenu.vue";
import NavbarMenuToolbar from "./NavbarMenuToolbar.vue";
import SidebarMenuVue from "./SidebarMenu.vue";
import SidebarMenuFooter from "./SidebarMenuFooter.vue";

export default {
  data() {
    return {
      loadingGlobal: true,
      users: null,
    };
  },
  methods: {
    getInformationUser() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .post(
          `${this.$root.$data.host}/api/user/getUsersById`,
          {
            idUser: this.$store.state.userAuth.user.id,
          },
          header
        )
        .then((response) => {
          let data = response.data;
          // add na variavel global
          this.$root.user = data.user;

          // caso tenha avatar cadastrado
          if (data.user.avatar) {
            this.styleAvatarBackground = `background: url(${data.user.avatar}); background-size: cover!important;`;
          }

          // get permissions of users
          this.getPermissions(data.users);

          this.emitter.emit("user", data.user);
        })
        .catch((error) => {
          console.log(error);

          if (error.response != undefined) {
            let data = error.response.data;
            this.$notify({
              type: "error",
              title: "Erro!",
              text: data.message,
              duration: 5000,
            });
          } else if (error) {
            this.$notify({
              type: "error",
              title: "Erro",
              text: error,
              duration: 5000,
            });
          }
        });
    },

    getPermissions() {
      let users = this.$store.state.userAuth.user;
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .post(
          `${this.$root.$data.host}/api/user/getUsersTypesById`,
          {
            id_users_types: users.id_users_types,
          },
          header
        )
        .then((response) => {
          let data = response.data;
          
          // add na variavel config global
          this.$root.configPermissions = data.type;

          this.emitter.emit("config", data.type);

          this.loadingGlobal = false;
        })
        .catch((error) => {
          if (error.response != undefined) {
            let data = error.response.data;
            console.log(data);
            this.$notify({
              type: "error",
              title: "Erro!",
              text: data.message,
              duration: 5000,
            });
          } else if (error) {
            this.$notify({
              type: "error",
              title: "Erro",
              text: error,
              duration: 5000,
            });
          }
        });
    },
  },
  async created() {
    await this.getInformationUser();
  },
  beforeCreate() {
  },
  async mounted() {
    this.emitter.on("user", (data) => {
      if (data.avatar) {
        this.$root.user.avatar = data.avatar;
      }

      if (data.name) {
        this.$root.user.name = data.name;
      }

      if (data.email) {
        this.$root.user.email = data.email;
      }
    });
  },
  components: {
    SidebarMenuVue,
    NavbarMenu,
    NavbarMenuToolbar,
    FooterComponet,
    SidebarMenuFooter,
  },
};
</script>
