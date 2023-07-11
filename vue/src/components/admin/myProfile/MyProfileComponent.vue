<template>
  <!--begin::Container-->
  <div id="kt_content_container" class="container-xxl">
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
      <!--begin::Card header-->
      <div
        class="card-header border-0 cursor-pointer"
        role="button"
        data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details"
        aria-expanded="true"
        aria-controls="kt_account_profile_details"
      >
        <!--begin::Card title-->
        <div class="card-title m-0">
          <h3 class="fw-bolder m-0">Meu Perfil</h3>
        </div>
        <!--end::Card title-->
      </div>
      <!--begin::Card header-->
      <!--begin::Content-->
      <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <div>
          <!--begin::Card body-->
          <div class="card-body border-top p-9">
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label fw-bold fs-6"
                >Imagem (avatar)</label
              >
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8">
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
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label required fw-bold fs-6"
                >Nome completo</label
              >
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                  <!--begin::Col-->
                  <div class="col-lg-12 fv-row">
                    <input
                      type="text"
                      v-model="user.name"
                      name="name"
                      class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                      placeholder="Nome Completo"
                    />
                    <div
                      v-if="errors.name.message"
                      class="fv-plugins-message-container invalid-feedback"
                    >
                      <div>{{ errors.name.message }}</div>
                    </div>
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label fw-bold fs-6">
                <span class="required">Telefone</span>
              </label>
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8 fv-row">
                <input
                  type="tel"
                  name="phone"
                  v-model="user.phone"
                  class="form-control form-control-lg form-control-solid"
                  placeholder="Digite seu telefone"
                  v-mask="'(##) #####-####'"
                />
                <div
                  v-if="errors.phone.message"
                  class="fv-plugins-message-container invalid-feedback"
                >
                  <div>{{ errors.phone.message }}</div>
                </div>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label fw-bold fs-6">
                <span class="required">CPF</span>
              </label>
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8 fv-row">
                <input
                  type="text"
                  v-model="user.cpf"
                  name="cpf"
                  class="form-control form-control-lg form-control-solid"
                  placeholder="Digita seu CPF"
                  v-mask="'###.###.###-##'"
                />
                <div
                  v-if="errors.cpf.message"
                  class="fv-plugins-message-container invalid-feedback"
                >
                  <div>{{ errors.cpf.message }}</div>
                </div>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label fw-bold fs-6">
                <span class="required">Tipo Usuário</span>
              </label>
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8 fv-row">
                <input
                  type="text"
                  v-model="user.userTypeName"
                  disabled
                  name="userTypeName"
                  class="form-control form-control-lg form-control-solid"
                />
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Card body-->
          <!--begin::Actions-->
          <div class="card-footer d-flex justify-content-end py-6 px-9">
            <!--<button
          type="reset"
          class="btn btn-light btn-active-light-primary me-2"
        >
          Cancelar
        </button>-->
            <button @click="updateUser()" class="btn btn-primary">
              Atualizar
            </button>
          </div>
          <!--end::Actions-->
        </div>
        <!--end::Form-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <!--begin::Sign-in Method-->
    <div class="card mb-5 mb-xl-10">
      <!--begin::Card header-->
      <div
        class="card-header border-0 cursor-pointer"
        role="button"
        data-bs-toggle="collapse"
        data-bs-target="#kt_account_signin_method"
      >
        <div class="card-title m-0">
          <h3 class="fw-bolder m-0">Alterar e-mail e senha</h3>
        </div>
      </div>
      <!--end::Card header-->
      <!--begin::Content-->
      <div id="kt_account_settings_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
          <!--begin::Email Address-->
          <div class="d-flex flex-wrap align-items-center">
            <!--begin::Label-->
            <div
              :class="{
                'd-none': this.divEmail,
                'd-block': !this.divEmail,
              }"
            >
              <div class="fs-6 fw-bolder mb-1">E-mail</div>
              <div class="fw-bold text-gray-600">{{ user.email }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Edit-->
            <div
              class="flex-row-fluid"
              :class="{
                'd-none': !this.divEmail,
                'd-block': this.divEmail,
              }"
            >
              <!--begin::Form-->
              <form
                id="kt_signin_change_email"
                class="form"
                novalidate="novalidate"
              >
                <div class="row mb-6">
                  <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="fv-row mb-0">
                      <label
                        for="emailaddress"
                        class="form-label fs-6 fw-bolder mb-3"
                        >Entre com um novo endereço de email</label
                      >
                      <input
                        type="email"
                        class="form-control form-control-lg form-control-solid"
                        id="newEmail"
                        placeholder="Digite o seu novo email"
                        name="newEmail"
                        v-model="user.newEmail"
                      />
                      <div
                        v-if="errors.email.message"
                        class="fv-plugins-message-container invalid-feedback"
                      >
                        <div>{{ errors.email.message }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="fv-row mb-0">
                      <label
                        for="confirmemailpassword"
                        class="form-label fs-6 fw-bolder mb-3"
                        >Confirmar a senha</label
                      >
                      <input
                        type="password"
                        v-model="user.confirmPasswordEmail"
                        class="form-control form-control-lg form-control-solid"
                        name="confirmemailpassword"
                        id="confirmemailpassword"
                      />
                      <div
                        v-if="errors.password.message"
                        class="fv-plugins-message-container invalid-feedback"
                      >
                        <div>{{ errors.password.message }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex">
                  <button
                    @click="updateEmail()"
                    type="button"
                    class="btn btn-primary me-2 px-6"
                  >
                    Atualizar Email
                  </button>
                  <button
                    @click="changeEmail()"
                    type="button"
                    class="btn btn-color-gray-400 btn-active-light-primary px-6"
                  >
                    Cancelar
                  </button>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Edit-->
            <!--begin::Action-->
            <div
              class="ms-auto"
              :class="{
                'd-none': this.divEmail,
                'd-block': !this.divEmail,
              }"
            >
              <button
                @click="changeEmail()"
                class="btn btn-light btn-active-light-primary"
              >
                Alterar Email
              </button>
            </div>
            <!--end::Action-->
          </div>
          <!--end::Email Address-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Password-->
          <div class="d-flex flex-wrap align-items-center mb-10">
            <!--begin::Label-->
            <div
              :class="{
                'd-none': this.divPassword,
                'd-block': !this.divPassword,
              }"
            >
              <div class="fs-6 fw-bolder mb-1">Senha</div>
              <div class="fw-bold text-gray-600">************</div>
            </div>
            <!--end::Label-->
            <!--begin::Edit-->
            <div
              class="flex-row-fluid"
              :class="{
                'd-none': !this.divPassword,
                'd-block': this.divPassword,
              }"
            >
              <!--begin::Form-->
              <form class="form" novalidate="novalidate">
                <div class="row mb-1">
                  <div class="col-lg-4">
                    <div class="fv-row mb-0">
                      <label
                        for="currentpassword"
                        class="form-label fs-6 fw-bolder mb-3"
                        >Senha Atual</label
                      >
                      <input
                        type="password"
                        class="form-control form-control-lg form-control-solid"
                        name="currentpassword"
                        id="currentpassword"
                        v-model="user.currentPassword"
                      />
                      <div
                        v-if="errors.password.message"
                        class="fv-plugins-message-container invalid-feedback"
                      >
                        <div>{{ errors.password.message }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="fv-row mb-0">
                      <label
                        for="newpassword"
                        class="form-label fs-6 fw-bolder mb-3"
                        >Nova senha</label
                      >
                      <input
                        type="password"
                        class="form-control form-control-lg form-control-solid"
                        name="newpassword"
                        id="newpassword"
                        v-model="user.newPassword"
                      />
                      <div
                        v-if="errors.newPassword.message"
                        class="fv-plugins-message-container invalid-feedback"
                      >
                        <div>{{ errors.newPassword.message }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="fv-row mb-0">
                      <label
                        for="confirmpassword"
                        class="form-label fs-6 fw-bolder mb-3"
                        >Confirma nova senha</label
                      >
                      <input
                        type="password"
                        class="form-control form-control-lg form-control-solid"
                        name="confirmpassword"
                        id="confirmpassword"
                        v-model="user.confirmPassword"
                      />
                      <div
                        v-if="errors.confirmPassword.message"
                        class="fv-plugins-message-container invalid-feedback"
                      >
                        <div>{{ errors.confirmPassword.message }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-text mb-5">
                  Obs: Senha deve ter pelo menos 8 caracteres
                </div>
                <div class="d-flex">
                  <button
                    @click="updatePassword()"
                    type="button"
                    class="btn btn-primary me-2 px-6"
                  >
                    Atualizar senha
                  </button>
                  <button
                    @click="changePassword()"
                    type="button"
                    class="btn btn-color-gray-400 btn-active-light-primary px-6"
                  >
                    Cancelar
                  </button>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Edit-->
            <!--begin::Action-->
            <div
              class="ms-auto"
              :class="{
                'd-none': this.divPassword,
                'd-block': !this.divPassword,
              }"
            >
              <button
                class="btn btn-light btn-active-light-primary"
                @click="changePassword()"
              >
                Alterar senha
              </button>
            </div>
            <!--end::Action-->
          </div>
          <!--end::Password-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Sign-in Method-->
    <!--begin::Deactivate Account-->
    <!--<div class="card mb-5">
      <div
        class="card-header border-0 cursor-pointer"
        role="button"
        data-bs-toggle="collapse"
        data-bs-target="#kt_account_deactivate"
        aria-expanded="true"
        aria-controls="kt_account_deactivate"
      >
        <div class="card-title m-0">
          <h3 class="fw-bolder m-0">Desativar Conta</h3>
        </div>
      </div>
      <div id="kt_account_settings_deactivate" class="collapse show">
        <form id="kt_account_deactivate_form" class="form">
          <div class="card-body border-top p-9">
            <div
              class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6"
            >
              <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <rect
                    opacity="0.3"
                    x="2"
                    y="2"
                    width="20"
                    height="20"
                    rx="10"
                    fill="currentColor"
                  />
                  <rect
                    x="11"
                    y="14"
                    width="7"
                    height="2"
                    rx="1"
                    transform="rotate(-90 11 14)"
                    fill="currentColor"
                  />
                  <rect
                    x="11"
                    y="17"
                    width="2"
                    height="2"
                    rx="1"
                    transform="rotate(-90 11 17)"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <div class="d-flex flex-stack flex-grow-1">
                <div class="fw-bold">
                  <h4 class="text-gray-900 fw-bolder">
                    Você está desativando sua conta
                  </h4>
                  <div class="fs-6 text-gray-700">
                    Para mais segurança, isso requer que você confirme seu
                    e-mail ou número de telefone quando você redefinir sua
                    senha.
                    <br />
                    <a class="fw-bolder" href="#">Ler mais</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-check form-check-solid fv-row">
              <input
                name="deactivate"
                class="form-check-input"
                type="checkbox"
                value=""
                id="deactivate"
              />
              <label
                class="form-check-label fw-bold ps-2 fs-6"
                for="deactivate"
              >
                Eu confirmo que minha conta seja desativada
              </label>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button class="btn btn-danger fw-bold">Desativar Conta</button>
          </div>
        </form>
      </div>
    </div>-->
    <!--end::Deactivate Account-->
  </div>
  <!--end::Container-->
</template>
<script>
export default {
  data() {
    return {
      userAuth: this.$store.state.userAuth.user,
      user: {
        id: null,
        name: null,
        email: null,
        password: null,
        avatar: null,
      },
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
      divEmail: false,
      divPassword: false,
      loading: false,
    };
  },
  mounted() {
    this.getInformationUser();
  },
  methods: {
    back() {
      this.$router.push({ name: "Users" });
    },

    changeEmail() {
      this.divEmail = !this.divEmail;
      this.divPassword = false;

      this.resetErrors();
    },

    changePassword() {
      this.divPassword = !this.divPassword;
      this.divEmail = false;

      this.resetErrors();
    },

    // função que verifica os campos do e-mail,
    // pois não quero que faça requisição desnecessária
    verifyEmailUpdate() {
      if (this.user.email == this.user.newEmail) {
        this.errors.email.message = "E-mail novo deve ser diferente do atual!";
        return false;
      }

      if (this.user.newEmail == null || this.user.newEmail == "") {
        this.errors.email.message =
          "E-mail não pode está vazio, por favor preencher!";
        return false;
      }

      if (
        this.user.confirmPasswordEmail == null ||
        this.user.confirmPasswordEmail == ""
      ) {
        this.errors.password.message =
          "A senha não pode está vazio, precisa confirmar para alterar o e-mail!";
        return false;
      }

      return true;
    },

    // função que verifica os campso da senha,
    // pois não quero que faça requisição desnecessária
    verifyPasswordUpdate() {
      if (
        this.user.currentPassword == null ||
        this.user.currentPassword == ""
      ) {
        this.errors.password.message =
          "O campo da senha atual não pode está vazia!";
        return false;
      }

      if (this.user.newPassword == null || this.user.newPassword == "") {
        this.errors.newPassword.message =
          "O campo nova senha não pode está vazia!";
        return false;
      }

      if (
        this.user.confirmPassword == null ||
        this.user.confirmPassword == ""
      ) {
        this.errors.confirmPassword.message =
          "O campo da confirmação de senha não pode está vazia!";
        return false;
      }

      if (this.user.newPassword !== this.user.confirmPassword) {
        this.errors.confirmPassword.message =
          "A confirmação de senha está difente!";
        return false;
      }

      return true;
    },

    // função que verifica os campso da senha,
    // pois não quero que faça requisição desnecessária
    verifyInformationUserToUpdate() {
      if (this.user.avatar == null || this.user.avatar == "") {
        this.errors.avatar.message =
          "Avatar é obrigatório, por favor, fazer upload";
        return false;
      }

      if (this.user.name == null || this.user.name == "") {
        this.errors.name.message = "Nome é obrigatório!";
        return false;
      }

      if (this.user.phone == null || this.user.phone == "") {
        this.errors.phone.message = "Telefone é obrigatório!";
        return false;
      }

      if (this.user.cpf == null || this.user.cpf == "") {
        this.errors.cpf.message = "CPF é obrigatório!";
        return false;
      }

      return true;
    },

    resetErrors() {
      this.errors = {
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

    updateEmail() {
      this.resetErrors();
      let resultVerify = this.verifyEmailUpdate();

      if (!resultVerify) {
        return false;
      }

      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .put(
          `${this.$root.$data.host}/api/user/updateEmail`,
          {
            id: this.user.id,
            email: this.user.email,
            newEmail: this.user.newEmail,
            confirmPasswordEmail: this.user.confirmPasswordEmail,
          },
          header
        )
        .then((response) => {
          let data = response.data;

          this.$notify({
            type: "success",
            title: "E-mail",
            text: data.message,
          });

          this.changeEmail();
          this.getInformationUser();
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
        });
    },

    updatePassword() {
      this.resetErrors();
      let resultVerify = this.verifyPasswordUpdate();

      if (!resultVerify) {
        return false;
      }

      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .put(
          `${this.$root.$data.host}/api/user/updatePassword`,
          {
            id: this.user.id,
            newPassword: this.user.newPassword,
            password: this.user.currentPassword,
          },
          header
        )
        .then((response) => {
          let data = response.data;

          this.$notify({
            type: "success",
            title: "E-mail",
            text: data.message,
          });

          this.changePassword();
          this.getInformationUser();
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },

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
            idUser: this.userAuth.id,
          },
          header
        )
        .then((response) => {
          let data = response.data;

          this.user = data.user;

          // caso tenha avatar cadastrado
          if (data.user.avatar) {
            this.styleAvatarBackground = `background: url(${data.user.avatar}); background-size: cover!important;`;
          }

          this.emitUpdateInformationUser(data.user);
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
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
        vm.user.avatar = e.target.result;
        vm.styleAvatarBackground = `background: url(${vm.user.avatar}); background-size: cover!important`;
      };

      reader.readAsDataURL(file);
    },

    emitUpdateInformationUser(data) {
      this.emitter.emit("user", data);
    },

    updateUser() {
      this.resetErrors();

      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      let result = this.verifyInformationUserToUpdate();

      if (result) {
        this.axios
          .put(
            `${this.$root.$data.host}/api/user/updateUserInformation`,
            {
              id: this.user.id,
              name: this.user.name,
              cpf: this.user.cpf.replaceAll(".", "").replace("-", ""),
              phone: this.user.phone
                .replace("(", "")
                .replace(")", "")
                .replace(" ", "")
                .replace("-", ""),
              avatar: this.user.avatar,
            },
            header
          )
          .then((response) => {
            let data = response.data;

            this.$notify({
              type: "success",
              title: "E-mail",
              text: data.message,
            });

            this.getInformationUser();
          })
          .catch((error) => {
            this.$notify({
              type: "error",
              title: "Erro!",
              text: error.response.data.message,
            });
          });
      }
    },
  },
};
</script>
