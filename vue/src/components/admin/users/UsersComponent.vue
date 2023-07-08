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
            <span class="text-muted fs-7 fw-bold mt-2"
              >Listagem de usuários</span
            >
            <!--end::Description-->
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
          <!--begin::Primary button-->
          <a @click="createUser()" class="btn btn-sm btn-primary"
            >Novo usuário</a
          >
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
            <div class="table-responsive">
              <table class="table table-striped gy-7 gs-7">
                <thead>
                  <tr
                    class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200"
                  >
                    <th class="min-w-50px"></th>
                    <th class="min-w-200px">Nome</th>
                    <th class="min-w-300px">Email</th>
                    <th class="min-w-200px">Data de criação</th>
                    <th class="min-w-100px"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in users.data" :key="user.id">
                    <td>
                      <div
                        class="cursor-pointer symbol symbol-30px symbol-md-40px"
                        data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end"
                      >
                        <img v-if="user.avatar" :src="user.avatar" style="object-fit:cover;" />
                        <img v-else src="@/assets/media/avatars/blank.png" />
                      </div>
                    </td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                      {{
                        $filters.moment(user.created_at).format("DD/MM/YYYY")
                      }}
                    </td>
                    <td
                      class="d-flex flex-row align-item-center justify-content-center p-4 h-100 w-100"
                    >
                      <div
                        class="text-decoration-none cursor-pointer m-2 d-flex flex-row align-item-center justify-content-center"
                        @click="goToEdit(user.id)"
                      >
                        <span class="material-symbols-outlined font-size-22"
                          >edit_square</span
                        >
                      </div>
                      <button
                        v-if="myId != user.id"
                        class="btn-delete text-decoration-none cursor-pointer m-2 d-flex flex-row align-item-center justify-content-center"
                        @click="deleteUser(user.id)"
                      >
                        <span class="material-symbols-outlined font-size-22"
                          >delete</span
                        >
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <ul class="pagination pagination-circle pagination-outline">
                <li
                  class="page-item m-1"
                  :class="{ active: link.active, disabled: !link.url }"
                  v-for="(link, key) in users.links"
                  :key="link.id"
                >
                  <a
                    href="#"
                    @click="paginate(link.url)"
                    class="page-link"
                    v-if="key == 0"
                  >
                    <i class="previous"></i>
                  </a>
                  <a
                    href="#"
                    @click="paginate(link.url)"
                    class="page-link"
                    v-else-if="key == users.links.length - 1"
                  >
                    <i class="next"></i>
                  </a>
                  <a
                    href="#"
                    class="page-link"
                    @click="paginate(link.url)"
                    v-else
                    >{{ link.label }}</a
                  >
                </li>
              </ul>
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
      users: [],
      myId: this.$store.state.userAuth.user.id,
    };
  },
  mounted() {
    this.getUsers();
  },
  methods: {
    getUsers() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.$root.$data.host}/api/user/getUsers`, header)
        .then((response) => {
          let data = response.data;

          this.users = data.user;
        });
    },

    paginate(url) {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios.get(url, header).then((response) => {
        let data = response.data;

        this.users = data.user;
      });
    },

    createUser() {
      this.$router.push({ name: "UsersCreate" });
    },

    goToEdit(id) {
      this.$router.push({ name: "UsersEdit", params: { id: id } });
    },

    deleteUser(id) {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .delete(`${this.$root.$data.host}/api/user/delete/${id}`, header)
        .then((response) => {
          let data = response.data;

          this.$notify({
            type: "success",
            title: "Sucesso!",
            text: data.message,
            duration: 5000,
          });

          this.getUsers();
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },
  },
};
</script>
