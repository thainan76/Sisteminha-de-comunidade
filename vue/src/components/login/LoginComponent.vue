<template>
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root h-100">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <div
        class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-1 order-lg-1 backgroundImage"
      >
        <!--begin::Wrapper-->
        <div
          class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100"
        >
          <!--begin::Content-->
          <div class="d-flex flex-row-fluid flex-column text-center">
            <!--begin::Logo-->
            <a href="#" class="py-5">
              <img
                alt="Logo"
                src="@/assets/favicon_movimentesim.png"
                class="h-60px"
              />
            </a>
            <!--end::Logo-->
            <!--begin::Title-->
            <h1 class="fw-bolder fs-2qx pb-3 pb-md-5" style="color: #fff">
              Bem-vindo ao <br />
              MovimentoSIM
            </h1>
            <!--end::Title-->
            <!--begin::Description-->
            <p class="fw-bold fs-2" style="color: #fff">
              Tornamos as coisas melhores
            </p>
            <!--end::Description-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Wrapper-->
      </div>
      <div
        class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-2 order-lg-2 bg-login"
      >
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-lg-row-fluid w-100">
          <!--begin::Wrapper-->
          <div class="w-lg-500px p-10">
            <!--begin::Form-->
            <div
              class="form w-100"
              novalidate="novalidate"
              id="kt_sign_in_form"
            >
              <!--begin::Heading-->
              <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Logue com sua conta</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <!--<div class="text-gray-400 fw-bold fs-4">
                  É novo aqui?
                  <a href="#" class="link-movimentesim-verde fw-bolder"
                    >Crie sua conta</a
                  >
                </div>-->
                <!--end::Link-->
              </div>
              <!--begin::Heading-->
              <!--begin::Input group-->
              <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="form-label fs-6 fw-bolder text-dark"
                  >E-mail</label
                >
                <!--end::Label-->
                <!--begin::Input-->
                <input
                  class="form-control form-control-lg form-control-solid"
                  type="text"
                  name="email"
                  autocomplete="off"
                  v-model="email"
                />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                  <!--begin::Label-->
                  <label class="form-label fw-bolder text-dark fs-6 mb-0"
                    >Senha</label
                  >
                  <!--end::Label-->
                  <!--begin::Link-->
                  <!--<a href="#" class="link-movimentesim-verde fs-6 fw-bolder"
                    >Esqueceu a senha ?</a
                  >-->
                  <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <input
                  class="form-control form-control-lg form-control-solid"
                  type="password"
                  name="password"
                  autocomplete="off"
                  v-model="password"
                />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Actions-->
              <div class="text-center">
                <!--begin::Submit button-->
                <button
                  id="kt_sign_in_submit"
                  class="btn btn-lg btn-movimentesim-verde w-100 mb-5"
                  @click="login()"
                  @keyup.enter="login()"
                >
                  <span v-if="!loading" class="indicator-label">Entrar</span>
                  <span v-if="loading">
                    Espere um pouco...
                    <span
                      class="spinner-border spinner-border-sm align-middle ms-2"
                    ></span
                  ></span>
                </button>
                <!--end::Submit button-->
                <!--begin::Separator-->
                <!--<div
                  class="text-center text-muted text-uppercase fw-bolder mb-5"
                >
                  or
                </div>-->
                <!--end::Separator-->
                <!--begin::Google link-->
                <!-- <a
                  href="#"
                  class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5"
                >
                  <img
                    alt="Logo"
                    src="@/assets/media/svg/brand-logos/google-icon.svg"
                    class="h-20px me-3"
                  />Continue com Google</a
                > -->
                <!--end::Google link-->
                <!--begin::Google link-->
                <!--<a
                  href="#"
                  class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5"
                >
                  <img
                    alt="Logo"
                    src="@/assets/media/svg/brand-logos/facebook-4.svg"
                    class="h-20px me-3"
                  />Continue com Facebook</a
                >-->
                <!--end::Google link-->
                <!--begin::Google link-->
                <!--<a
                  href="#"
                  class="btn btn-flex flex-center btn-light btn-lg w-100"
                >
                  <img
                    alt="Logo"
                    src="@/assets/media/svg/brand-logos/apple-black.svg"
                    class="h-20px me-3"
                  />Continue com Apple</a
                >-->
                <!--end::Google link-->
              </div>
              <!--end::Actions-->
            </div>
            <!--end::Form-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <!--<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
          <div class="d-flex flex-center fw-bold fs-6">
            <a
              href="https://keenthemes.com"
              class="text-muted text-hover-primary px-2"
              target="_blank"
              >About</a
            >
            <a
              href="https://devs.keenthemes.com"
              class="text-muted text-hover-primary px-2"
              target="_blank"
              >Support</a
            >
            <a
              href="https://1.envato.market/EA4JP"
              class="text-muted text-hover-primary px-2"
              target="_blank"
              >Purchase</a
            >
          </div>
        </div>-->
        <!--end::Footer-->
      </div>
    </div>
    <!--end::Authentication - Sign-in-->
  </div>
  <!--end::Root-->
</template>

<style scoped>
.backgroundImage {
  background: url(https://images.pexels.com/photos/6111611/pexels-photo-6111611.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)
      no-repeat center,
    linear-gradient(
      96.37deg,
      #228b3c 0.2%,
      #228b3c 22.59%,
      #798f28 46.48%,
      #f1960f 68.88%,
      #fbb040 95.75%
    );
  background-blend-mode: multiply;
  /*background-size: cover;*/
  background-position: inherit;
}

.link-movimentesim-verde {
  color: #009e48;
}

.btn-movimentesim-verde {
  color: #fff;
  background: #1abd44;
}

.bg-login {
  --bg-color: 255, 255, 255;
  background-color: #fff;
}
</style>

<script>
import { mapMutations } from 'vuex';

export default {
  data() {
    return {
      email: null,
      password: null,
      loading: false
    };
  },
  mounted() {
    window.KTApp.setThemeMode("light");
  },
  methods: {
    ...mapMutations([
      'setAuth',
      'getAuth'
    ]),

    login() {
      let result = this.verifyRequired();

      if (result) {
        this.loading = true;
        this.axios
          .post(`${this.$root.$data.host}/api/login`, {
            email: this.email,
            password: this.password,
          })
          .then((response) => {
            let data = response.data;

            // set user information authentication
            this.setAuth(data);

            //console.log(this.$store.getters.getAuth, 'this.store.getters.getAuth');
            this.$router.push({ name: 'Dashborad' });

            // desse jeito da reload indo para rota 
            //const url = new URL('/admin/dashboard', window.location.origin);
            //window.location.href = url.toString();

            this.loading = false;
          })
          .catch((error) => {

            if (error.response != undefined) {
              let data = error.response.data;
              this.$notify({
                type: "error",
                title: "Erro",
                text: data.message,
                duration: 5000
              });
            } else {
              this.$notify({
                type: "error",
                title: "Erro",
                text: error,
                duration: 5000
              });
            }
          
            this.loading = false;
          });
      }
    },

    verifyRequired() {
      if (this.email == null) {
        this.$notify({
          type: "error",
          title: "Erro",
          text: "E-mail está vazio, por favor preencher!",
        });

        return false;
      }

      if (this.password == null) {
        this.$notify({
          type: "error",
          title: "Erro",
          text: "Senha está vazio, por favor preencher!",
        });

        return false;
      }

      return true;
    },
  },
};
</script>
