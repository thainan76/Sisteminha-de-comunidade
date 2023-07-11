<template>
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
      <!--begin::Container-->
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div
          data-kt-swapper="true"
          data-kt-swapper-mode="prepend"
          data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
          class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0"
        >
          <!--begin::Title-->
          <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
            Permissões
            <!--begin::Separator-->
            <span
              class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"
            ></span>
            <!--end::Separator-->
            <!--begin::Description-->
            <span v-if="!type.id" class="text-muted fs-7 fw-bold mt-2"
              >Criação
            </span>
            <span v-if="type.id" class="text-muted fs-7 fw-bold mt-2"
              >Edição
            </span>
            <!--end::Description-->
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
          <a
            @click="back()"
            class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
          >
            <span class="indicator-label">Voltar</span>
          </a>

          <a
            v-if="!loading && !type.id"
            @click="create()"
            class="btn btn-sm btn-primary"
          >
            <span class="indicator-label">Criar</span>
          </a>

          <a
            v-if="!loading && type.id"
            @click="update()"
            class="btn btn-sm btn-primary"
          >
            <span class="indicator-label">Atualizar</span>
          </a>

          <a v-if="loading" class="btn btn-sm btn-primary">
            <span>
              <span v-if="!type.id">Criando...</span>
              <span v-if="type.id">Atualizando...</span>
              <span
                class="spinner-border spinner-border-sm align-middle ms-2"
              ></span
            ></span>
          </a>
          <!--end::Primary button-->
        </div>
        <!--end::Actions-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class="container-xxl">
        <!--begin::About card-->
        <div class="card">
          <!--begin::Body-->
          <div class="card-body p-lg-17">
            <div
              class="d-flex flex-column align-items-center justify-content-center w-100"
            >
              <!--begin::Input group-->
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <div class="col-12 col-md-7 mb-4">
                  <div class="form-floating w-100">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="name"
                      v-model="type.userTypeName"
                      placeholder="Digite seu nome"
                    />
                    <label for="name">Nome do tipo de usuário</label>
                  </div>
                  <div
                    v-if="errors.userTypeName.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.userTypeName.message }}</div>
                  </div>
                </div>
                <div class="col-12 col-md-5"></div>
              </div>
              <!--end::Input group-->
              <div
                class="d-flex flex-column flex-wrap flex-md-nowrap w-100 gap-2 rounded border p-10"
              >
                <div
                  class="d-flex flex-column flex-wrap flex-md-nowrap w-100 gap-2 p-5"
                >
                  <h3>Menus:</h3>
                  <!--<div
                    class="row d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2 p-5"
                  >-->
                  <div
                    class="row p-5"
                  >
                    <div
                      class="col-12 col-md-6 mb-5"
                      v-for="menu in type.menus"
                      :key="menu.id_users_menus"
                    >
                      <label class="form-label font-size-16">{{
                        menu.menuName
                      }}</label>
                      <div class="d-flex flex-column gap-2">
                        <div class="col-12 col-md-12">
                          <div
                            class="form-check form-switch form-check-custom form-check-solid"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              :checked="menu.read"
                              :id="'view' + menu.id_users_menu_views"
                              v-on:input="menu.read = $event.target.checked"
                            />
                            <label
                              class="form-check-label"
                              :for="'view' + menu.id_users_menu_views"
                            >
                              Visualizar
                            </label>
                          </div>
                        </div>
                        <div class="col-12 col-md-12">
                          <div
                            class="form-check form-switch form-check-custom form-check-solid"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              :checked="menu.create"
                              :id="'create' + menu.id_users_menu_views"
                              v-on:input="menu.create = $event.target.checked"
                            />
                            <label
                              class="form-check-label"
                              :for="'create' + menu.id_users_menu_views"
                            >
                              Criar
                            </label>
                          </div>
                        </div>
                        <div class="col-12 col-md-12">
                          <div
                            class="form-check form-switch form-check-custom form-check-solid"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              :checked="menu.update"
                              :id="'update' + menu.id_users_menu_views"
                              v-on:input="menu.update = $event.target.checked"
                            />
                            <label
                              class="form-check-label"
                              :for="'update' + menu.id_users_menu_views"
                            >
                              Atualizar
                            </label>
                          </div>
                        </div>
                        <div class="col-12 col-md-12">
                          <div
                            class="form-check form-switch form-check-custom form-check-solid"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              :checked="menu.delete"
                              :id="'delete' + menu.id_users_menu_views"
                              v-on:input="menu.delete = $event.target.checked"
                            />
                            <label
                              class="form-check-label"
                              :for="'delete' + menu.id_users_menu_views"
                            >
                              Deletar
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::About card-->
      </div>
      <!--end::Container-->
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      type: {
        id: null,
        userTypeName: null,
        menus: [
          {
            id_users_menu_views: null,
          },
        ],
      },
      loading: false,
      errors: {
        userTypeName: {
          message: null,
        },
      },
    };
  },
  mounted() {
    // if have a id in router
    if (this.$route.params.id) {
      this.getTypeById();
    } else {
      this.getMenus();
    }
  },
  methods: {
    getMenus() {
        this.loading = true;

        let tokenAuth = this.$store.state.userAuth.authorization.token;
        let header = {
          headers: {
            Authorization: "Bearer " + tokenAuth,
          },
        };

        this.axios
          .get(
            `${this.$root.$data.host}/api/permissions/getMenus`,
            header
          )
          .then((response) => {
            let data = response.data;

            this.type.menus = data.menus;
            this.loading = false;
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

            this.loading = false;
          });
      
    },

    create() {
      let result = this.verifyRequired();

      if (result) {
        this.loading = true;

        let tokenAuth = this.$store.state.userAuth.authorization.token;
        let header = {
          headers: {
            Authorization: "Bearer " + tokenAuth,
          },
        };

        this.axios
          .post(
            `${this.$root.$data.host}/api/permissions/create`,
            {
              userTypeName: this.type.userTypeName,
              menus: this.type.menus,
            },
            header
          )
          .then((response) => {
            let data = response.data;

            this.$notify({
              type: "success",
              title: "Sucesso!",
              text: data.message,
              duration: 5000,
            });

            this.loading = false;

            this.$router.push({ name: "UsersPermissions" });
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

            this.loading = false;
          });
      }
    },

    verifyRequired() {
      if (this.type.userTypeName == null || this.type.userTypeName == "") {
        this.errors.userTypeName.message =
          "Nome do tipo de usuário é obrigatório, por favor preencher";

        return false;
      }

      return true;
    },

    getTypeById() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;
      let typeId = this.$route.params.id;
      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .post(
          `${this.$root.$data.host}/api/permissions/getUsersTypesById`,
          {
            id_users_types: typeId,
          },
          header
        )
        .then((response) => {
          let data = response.data;
          this.type = data.type;
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });

          // after 3 seconds go to list of users
          setTimeout(() => {
            this.$router.push({ name: "UsersPermissions" });
          }, 3000);
        });
    },

    update() {
      this.resetErrors();

      let result = this.verifyRequired();

      if (result) {
        this.loading = true;

        let tokenAuth = this.$store.state.userAuth.authorization.token;
        let header = {
          headers: {
            Authorization: "Bearer " + tokenAuth,
          },
        };

        this.axios
          .put(
            `${this.$root.$data.host}/api/permissions/update`,
            this.type,
            header
          )
          .then((response) => {
            let data = response.data;

            this.$notify({
              type: "success",
              title: "Sucesso!",
              text: data.message,
              duration: 5000,
            });

            this.$router.push({ name: "UsersPermissions" });

            this.loading = false;
          })
          .catch((error) => {
            if (error.response != undefined) {
              let data = error.response.data;
              console.log(data);
              if (data.message) {
                this.$notify({
                  type: "error",
                  title: "Erro!",
                  text: data.message,
                  duration: 5000,
                });

                return;
              }

              this.$notify({
                type: "error",
                title: "Erro!",
                text: data.error,
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

            this.loading = false;
          });
      }
    },

    resetErrors() {
      this.errors = {
        userTypeName: {
          message: null,
        },
      };
    },

    back() {
      this.$router.push({ name: "UsersPermissions" });
    },
  },
};
</script>
