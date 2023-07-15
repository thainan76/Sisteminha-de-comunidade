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
            <span class="text-muted fs-7 fw-bold mt-2"
              >Listagem de tipos de usuários</span
            >
            <!--end::Description-->
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div v-if="permissions.create" class="d-flex align-items-center gap-2 gap-lg-3">
          <!--begin::Primary button-->
          <a @click="createTypes()" class="btn btn-sm btn-primary"
            >Novo tipo de usuário</a
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
                    <th class="min-w-200px">Tipo Usuário</th>
                    <th class="min-w-100px"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="type in types.data" :key="type.id">
                    <td>{{ type.name }}</td>
                    <td
                      class="d-flex flex-row align-item-center justify-content-center p-4 h-100 w-100"
                    >
                      <div
                        v-if="permissions.update"
                        class="text-decoration-none cursor-pointer m-2 d-flex flex-row align-item-center justify-content-center"
                        @click="goToEdit(type.id)"
                      >
                        <span class="material-symbols-outlined font-size-22"
                          >edit_square</span
                        >
                      </div>
                      <button
                        v-if="permissions.delete"
                        class="btn-delete text-decoration-none cursor-pointer m-2 d-flex flex-row align-item-center justify-content-center"
                        @click="deletePermission(type.id)"
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
                  v-for="(link, key) in types.links"
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
                    v-else-if="key == types.links.length - 1"
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
      types: [],
      permissions: {}
    };
  },
  beforeCreate() {
    this.emitter.on("config", (data) => {
      this.permissions = data.menus.find((menu) => {
        return menu.menuName.toLowerCase() === "permissões";
      });
    });
  },
  mounted() {
    if (this.$root.configPermissions != undefined) {
      this.setPermissions(this.$root.configPermissions);
    }

    this.getTypes();
  },
  methods: {
    setPermissions() {
      this.permissions = this.$root.configPermissions.menus.find((menu) => {
        return menu.menuName.toLowerCase() === "permissões";
      });
    },

    getTypes() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.$root.$data.host}/api/permissions/getTypes`, header)
        .then((response) => {
          let data = response.data;

          this.types = data.types;
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

        this.types = data.types;
      });
    },

    createTypes() {
      this.$router.push({ name: "UsersPermissionsCreate" });
    },

    goToEdit(id) {
      this.$router.push({ name: "UsersPermissionsEdit", params: { id: id } });
    },

    deletePermission(id) {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .delete(`${this.$root.$data.host}/api/permissions/delete/${id}`, header)
        .then((response) => {
          let data = response.data;

          this.$notify({
            type: "success",
            title: "Sucesso!",
            text: data.message,
            duration: 5000,
          });

          this.getTypes();
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
