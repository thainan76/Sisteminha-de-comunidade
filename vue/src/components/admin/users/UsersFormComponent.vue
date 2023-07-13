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
            Usuários
            <!--begin::Separator-->
            <span
              class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"
            ></span>
            <!--end::Separator-->
            <!--begin::Description-->
            <span v-if="!dataUser.id" class="text-muted fs-7 fw-bold mt-2"
              >Criação
            </span>
            <span v-if="dataUser.id" class="text-muted fs-7 fw-bold mt-2"
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
            v-if="!loading && !dataUser.id"
            @click="create()"
            class="btn btn-sm btn-primary"
          >
            <span class="indicator-label">Criar</span>
          </a>

          <a
            v-if="!loading && dataUser.id"
            @click="update()"
            class="btn btn-sm btn-primary"
          >
            <span class="indicator-label">Atualizar</span>
          </a>

          <a v-if="loading" class="btn btn-sm btn-primary">
            <span>
              Criando...
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
              <div class="row mb-6 w-100">
                <!--begin::Label-->
                <label class="col-lg-12 col-form-label fw-bold fs-6"
                  >Imagem (avatar)</label
                >
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-12">
                  <!--begin::Image input-->
                  <div
                    class="image-input image-input-outline"
                    data-kt-image-input="true"
                    style="
                      background-image: url('assets/media/svg/avatars/blank.svg');
                    "
                  >
                    <!--begin::Preview existing avatar-->
                    <div
                      class="image-input-wrapper w-125px h-125px"
                      :style="styleAvatarBackground"
                    ></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label
                      class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                      data-kt-image-input-action="change"
                      data-bs-toggle="tooltip"
                      title="Change avatar"
                    >
                      <i class="bi bi-pencil-fill fs-7"></i>
                      <!--begin::Inputs-->
                      <input
                        type="file"
                        name="avatar"
                        accept=".png, .jpg, .jpeg"
                        @change="onFileChange"
                      />
                      <!--<input type="hidden" name="avatar_remove" />-->
                      <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span
                      class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                      data-kt-image-input-action="cancel"
                      data-bs-toggle="tooltip"
                      title="Cancel avatar"
                    >
                      <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <!--<span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove"
                    data-bs-toggle="tooltip"
                    title="Remove avatar"
                  >
                    <i class="bi bi-x fs-2"></i>
                  </span>-->
                    <!--end::Remove-->
                  </div>
                  <!--end::Image input-->
                  <!--begin::Hint-->
                  <div class="form-text">
                    Tipos de arquivos permitidos: png, jpg, jpeg.
                  </div>
                  <div
                    v-if="errors.avatar.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.avatar.message }}</div>
                  </div>
                  <!--end::Hint-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <div class="col-12 col-md-7">
                  <div class="form-floating mb-5 w-100">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="name"
                      v-model="dataUser.name"
                      placeholder="Digite seu nome"
                    />
                    <label for="name">Nome Completo</label>
                  </div>
                  <div
                    v-if="errors.name.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.name.message }}</div>
                  </div>
                </div>
                <div class="col-12 col-md-5">
                  <div class="form-floating mb-5 w-100">
                    <input
                      type="email"
                      class="form-control form-control-solid"
                      id="email"
                      v-model="dataUser.email"
                      placeholder="name@example.com"
                    />
                    <label for="email">Email</label>
                  </div>
                  <div
                    v-if="errors.email.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.email.message }}</div>
                  </div>
                </div>
              </div>
              <!--end::Input group-->
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <!--begin::Input group-->
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-7 w-100">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="phone"
                      v-model="dataUser.phone"
                      placeholder="Digite seu telefone"
                      v-mask="'(##) #####-####'"
                    />
                    <label for="phone">Telefone</label>
                  </div>
                  <div
                    v-if="errors.phone.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.phone.message }}</div>
                  </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-7 w-100">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="cpf"
                      v-model="dataUser.cpf"
                      placeholder="Digite seu CPF"
                      v-mask="'###.###.###-##'"
                    />
                    <label for="cpf">CPF</label>
                  </div>
                  <div
                    v-if="errors.cpf.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.cpf.message }}</div>
                  </div>
                </div>
                <!--end::Input group-->
              </div>
              <!--begin::Input group-->
              <!--end::Input group-->
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <!--begin::Input group-->
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-7">
                    <select
                      class="form-select form-select-solid"
                      id="typeUsers"
                      aria-label="Selecione um tipo de usuário"
                      v-model="dataUser.id_users_types"
                    >
                      <option
                        v-for="menu in menus"
                        :key="menu.id"
                        :value="menu.id"
                        :selected="menu.id == dataUser.id_users_types"
                      >
                        {{ menu.name }}
                      </option>
                    </select>
                    <label for="typeUsers">Tipos de usuários</label>
                  </div>
                  <div
                    v-if="errors.usersTypes.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.usersTypes.message }}</div>
                  </div>
                </div>
                <!--end::Input group-->
              </div>
              <!--begin::Input group-->
              <div v-if="!dataUser.id" class="form-floating mb-7 w-100">
                <input
                  type="password"
                  class="form-control form-control-solid"
                  id="password"
                  placeholder="Digite uma senha"
                  v-model="dataUser.password"
                />
                <label for="password">Senha</label>
              </div>
              <!--end::Input group-->
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
      dataUser: {
        id: null,
        name: null,
        email: null,
        password: null,
        avatar: null,
        id_users_types: null,
      },
      menus: [],
      currentEmail: null,
      loading: false,
      styleAvatarBackground:
        'background-image: url("assets/media/avatars/300-1.jpg");',
      errors: {
        email: {
          message: null,
        },
        password: {
          message: null,
        },
        newPassword: {
          message: null,
        },
        confirmPassword: {
          message: null,
        },
        name: {
          message: null,
        },
        usersTypes: {
          message: null,
        },
        phone: {
          message: null,
        },
        avatar: {
          message: null,
        },
        cpf: {
          message: null,
        },
      },
    };
  },
  async mounted() {
    // if have a id in router
    if (this.$route.params.id) {
      await this.getUserById();
    }

    await this.getMenus();
  },
  methods: {
    getMenus() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;
      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(
          `${this.$root.$data.host}/api/permissions/getTypesSimplePaginate`,
          header
        )
        .then((response) => {
          let types = response.data.types;

          this.menus = types.data;
          console.log("menus", this.menus);
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

    onFileChange(e) {
      let files = e.target.files || e.dataTransfer.files;

      if (!files.length) return;

      if (
        files[0].type != "image/png" &&
        files[0].type != "image/jpg" &&
        files[0].type != "image/jpeg"
      ) {
        this.$notify({
          type: "error",
          title: "Erro!",
          text: "Tipos de arquivos permitidos: png, jpg, jpeg.",
        });

        return;
      }

      this.createImage(files[0]);
    },

    createImage(file) {
      var reader = new FileReader();
      var vm = this;

      reader.onload = (e) => {
        vm.dataUser.avatar = e.target.result;
        vm.styleAvatarBackground = `background: url(${vm.dataUser.avatar}); background-size: cover!important`;
      };

      reader.readAsDataURL(file);
    },

    create() {
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
          .post(
            `${this.$root.$data.host}/api/user/register`,
            {
              name: this.dataUser.name,
              email: this.dataUser.email,
              phone: this.dataUser.phone
                .replace("(", "")
                .replace(")", "")
                .replace(" ", "")
                .replace("-", ""),
              cpf: this.dataUser.cpf.replaceAll(".", "").replace("-", ""),
              avatar: this.dataUser.avatar,
              idUsersTypes: this.dataUser.id_users_types,
              password: this.dataUser.password,
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

            this.$router.push({ name: "Users" });

            this.loading = false;
          })
          .catch((error) => {
            if (error.response != undefined) {
              let data = error.response.data;
              console.log(data);
              if (data.message != undefined) {
                this.$notify({
                  type: "error",
                  title: "Erro!",
                  text: data.message,
                  duration: 5000,
                });
              } else {
                this.$notify({
                  type: "error",
                  title: "Erro!",
                  text: data.error,
                  duration: 5000,
                });
              }
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
      console.log(this.dataUser, "datausers");
      if (this.dataUser.avatar == null || this.dataUser.avatar == "") {
        this.errors.avatar.message =
          "Avatar é obrigatório, por favor, fazer upload";
        return false;
      }

      if (this.dataUser.email == null || this.dataUser.email == "") {
        this.errors.email.message = "Email é obrigatório!";
        return false;
      }

      if (this.dataUser.name == null || this.dataUser.name == "") {
        this.errors.name.message = "Nome é obrigatório!";
        return false;
      }

      if (this.dataUser.phone == null || this.dataUser.phone == "") {
        this.errors.phone.message = "Telefone é obrigatório!";
        return false;
      }

      if (this.dataUser.cpf == null || this.dataUser.cpf == "") {
        this.errors.cpf.message = "CPF é obrigatório!";
        return false;
      }

      if (
        this.dataUser.id_users_types == null ||
        this.dataUser.id_users_types == ""
      ) {
        this.errors.usersTypes.message = "Tipo de usuário é obrigatório!";
        return false;
      }

      // if has dataUser id, dont necessary to verify password
      if (!this.dataUser.id) {
        if (this.dataUser.password == null) {
          this.$notify({
            type: "error",
            title: "Erro",
            text: "Senha está vazio, por favor preencher!",
          });

          return false;
        }
      }

      return true;
    },

    getUserById() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;
      let idUser = this.$route.params.id;
      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .post(
          `${this.$root.$data.host}/api/user/getUsersById`,
          { idUser: idUser },
          header
        )
        .then((response) => {
          let data = response.data;
          this.dataUser = data.user;
          this.currentEmail = data.user.email;

          // caso tenha avatar cadastrado
          if (data.user.avatar) {
            this.styleAvatarBackground = `background: url(${data.user.avatar}); background-size: cover!important;`;
          }
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });

          // after 3 seconds go to list of users
          setTimeout(() => {
            this.$router.push({ name: "Users" });
          }, 3000);
        });
    },

    verifyEmailChange() {
      if (this.dataUser.email == this.currentEmail) {
        return false;
      }

      return true;
    },

    update() {
      this.resetErrors();

      let result = this.verifyRequired();

      if (result) {
        let tokenAuth = this.$store.state.userAuth.authorization.token;
        let header = {
          headers: {
            Authorization: "Bearer " + tokenAuth,
          },
        };

        let dataPost = {
          id: this.dataUser.id,
          name: this.dataUser.name,
          phone: this.dataUser.phone,
          cpf: this.dataUser.cpf,
          avatar: this.dataUser.avatar,
          idUsersTypes: this.dataUser.id_users_types,
        };

        let resultEmailEqual = this.verifyEmailChange();
        if (resultEmailEqual) {
          dataPost.email = this.dataUser.email;
        }

        this.axios
          .put(`${this.$root.$data.host}/api/user/update`, dataPost, header)
          .then((response) => {
            let data = response.data;

            this.$notify({
              type: "success",
              title: "Sucesso!",
              text: data.message,
              duration: 5000,
            });

            this.$router.push({ name: "Users" });

            this.loading = false;
          })
          .catch((error) => {
            if (error.response != undefined) {
              let data = error.response.data;
              if (data.message != undefined) {
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
        email: {
          message: null,
        },
        usersTypes: {
          message: null,
        },
        password: {
          message: null,
        },
        newPassword: {
          message: null,
        },
        confirmPassword: {
          message: null,
        },
        name: {
          message: null,
        },
        phone: {
          message: null,
        },
        avatar: {
          message: null,
        },
        cpf: {
          message: null,
        },
      };
    },

    back() {
      this.$router.push({ name: "Users" });
    },
  },
};
</script>
