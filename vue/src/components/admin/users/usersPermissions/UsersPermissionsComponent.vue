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
        <div
          v-if="permissions.create"
          class="d-flex align-items-center gap-2 gap-lg-3"
        >
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
          <div class="card-body">
            <div class="table-responsive">
              <!--begin::Table-->
              <table
                class="table align-middle table-row-dashed fs-6 gy-5"
                id="kt_table_users"
              >
                <!--begin::Table head-->
                <thead>
                  <!--begin::Table row-->
                  <tr
                    class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0"
                  >
                    <th class="w-10px pe-2">
                      <div
                        class="form-check form-check-sm form-check-custom form-check-solid me-3"
                      >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          data-kt-check="true"
                          data-kt-check-target="#kt_table_users .form-check-input"
                          value="1"
                        />
                      </div>
                    </th>
                    <th class="w-100">Tipo Usuário</th>
                    <th class="text-end min-w-100px"></th>
                  </tr>
                  <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                  <tr v-for="type in types.data" :key="type.id">
                    <!--begin::Checkbox-->
                    <td>
                      <div
                        class="form-check form-check-sm form-check-custom form-check-solid"
                      >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                        />
                      </div>
                    </td>
                    <!--end::Checkbox-->
                    <td>
                      <div class="badge badge-light fw-bolder">
                        {{ type.name }}
                      </div>
                    </td>
                    <td class="text-end">
                      <button
                        class="btn btn-light btn-active-light-primary btn-sm"
                        :class="{
                          'show menu-dropdown': type.dropdownAction,
                        }"
                        data-kt-menu-placement="bottom-end"
                        @click="openDrownDown(type.id)"
                      >
                        Ações
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                              fill="currentColor"
                            />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </button>
                      <!--begin::Menu-->
                      <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                        :class="{
                          'show menu-dropdown position-absolute':
                            type.dropdownAction,
                        }"
                      >
                        <!--begin::Menu item-->
                        <div v-if="permissions.update" class="menu-item px-3">
                          <a @click="goToEdit(type.id)" class="menu-link px-3"
                            >Editar</a
                          >
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div v-if="permissions.delete" class="menu-item px-3">
                          <a
                            @click="deletePermission(type.id)"
                            class="menu-link px-3"
                            >Excluir</a
                          >
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                  </tr>
                </tbody>
                <!--end::Table body-->
              </table>
              <!--end::Table-->
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
      permissions: {},
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
    openDrownDown(id) {
      this.types.data.forEach((type) => {
        if (type.id == id && !type.dropdownAction) {
          type.dropdownAction = true;
          return;
        }

        type.dropdownAction = false;
        return;
      });
    },
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
