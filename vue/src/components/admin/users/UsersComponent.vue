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
        <div
          v-if="permissions.create"
          class="d-flex align-items-center gap-2 gap-lg-3"
        >
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
          <!--begin::Card body-->
          <div class="card-body py-4">
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
                    <th class="min-w-80px">Usuários</th>
                    <th class="min-w-125px">Tipo usuário</th>
                    <th class="min-w-125px">Data de criação</th>
                    <th class="min-w-125px">Último login</th>
                    <th class="text-end min-w-100px"></th>
                  </tr>
                  <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                  <!-- eslint-disable -->
                  <tr v-if="loading" v-for="skeleton in [0,1,2,3,4,5,6,7,8,9]" :key="skeleton">
                    <td>
                      <v-skeleton width="100%" height="4rem"></v-skeleton>
                    </td>
                    <td class="d-flex align-items-center">
                      <v-skeleton width="100%" height="4rem"></v-skeleton>
                    </td>
                    <td>
                      <v-skeleton width="100%" height="4rem"></v-skeleton>
                    </td>
                    <td>
                      <v-skeleton width="100%" height="4rem"></v-skeleton>
                    </td>
                    <td>
                      <v-skeleton width="100%" height="4rem"></v-skeleton>
                    </td>
                    <td class="text-end">
                      <v-skeleton width="100%" height="4rem"></v-skeleton>
                    </td>
                  </tr>
                  <tr v-if="!loading" v-for="user in users.data" :key="user.id">
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
                    <td class="d-flex align-items-center">
                      <div
                        class="symbol symbol-circle symbol-50px overflow-hidden me-3"
                      >
                        <div class="symbol-label">
                          <img
                            v-if="user.avatar"
                            :src="user.avatar"
                            :alt="user.name"
                            class="w-100"
                            style="object-fit: cover"
                          />
                          <img
                            v-else
                            src="@/assets/media/avatars/blank.png"
                            class="w-100"
                            style="object-fit: cover"
                          />
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <a
                          href="#"
                          class="text-gray-800 text-hover-primary mb-1"
                          >{{ user.name }}</a
                        >
                        <span>{{ user.email }}</span>
                      </div>
                    </td>
                    <td>
                      <div class="badge badge-light fw-bolder">
                        {{ user.userTypeName }}
                      </div>
                    </td>
                    <td>
                      {{
                        $filters.moment(user.created_at).format("DD/MM/YYYY")
                      }}
                    </td>
                    <td>
                      {{
                        user.last_login ? $filters.moment(user.last_login).format("DD/MM/YYYY HH:mm:ss") : null
                      }}
                      </td>
                    <td class="text-end position-relative">
                      <button
                        v-if="permissions.update || permissions.delete"
                        class="btn btn-light btn-active-light-primary btn-sm"
                        :class="{
                          'show menu-dropdown': user.dropdownAction,
                        }"
                        data-kt-menu-placement="bottom-end"
                        @click="openDrownDown(user.id)"
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
                            user.dropdownAction,
                        }"
                      >
                        <!--begin::Menu item-->
                        <div v-if="permissions.update" class="menu-item px-3">
                          <a @click="goToEdit(user.id)" class="menu-link px-3"
                            >Editar</a
                          >
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div
                          v-if="myId != user.id && permissions.delete"
                          class="menu-item px-3"
                        >
                          <a @click="deleteUser(user.id)" class="menu-link px-3"
                            >Excluir</a
                          >
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                  </tr>
                  <!-- eslint-enable -->
                </tbody>
                <!--end::Table body-->
              </table>
              <!--end::Table-->
            </div>
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
          <!--end::Card body-->
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
      permissions: {
        create: 0,
        delete: 0,
        update: 0,
        read: 0,
      },
      loading: false,
    };
  },
  beforeCreate() {
    this.emitter.on("config", (data) => {
      this.permissions = data.menus.find((menu) => {
        return menu.menuName.toLowerCase() === "usuários";
      });
    });
  },
  mounted() {
    console.log(this.$root.configPermissions);
    if (this.$root.configPermissions != undefined) {
      this.setPermissions(this.$root.configPermissions);
    }

    this.getUsers();
  },
  methods: {
    openDrownDown(id) {
      this.users.data.forEach((user) => {
        if (user.id == id && !user.dropdownAction) {
          user.dropdownAction = true;
          return;
        }

        user.dropdownAction = false;
        return;
      });
    },
    setPermissions() {
      this.permissions = this.$root.configPermissions.menus.find((menu) => {
        return menu.menuName.toLowerCase() === "usuários";
      });
    },
    getUsers() {
      this.loading = true;

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

          this.loading = false;
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
