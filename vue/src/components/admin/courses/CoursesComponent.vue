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
            Cursos
            <!--begin::Separator-->
            <span
              class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"
            ></span>
            <!--end::Separator-->
            <!--begin::Description-->
            <span class="text-muted fs-7 fw-bold mt-2">Listagem de cursos</span>
            <!--end::Description-->
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
          <!--begin::Primary button-->
          <a @click="create()" class="btn btn-sm btn-primary">Criar curso</a>
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
                    <th class="min-w-150px">Nome curso</th>
                    <th class="w-100">Descrição</th>
                    <th class="min-w-100px">Preço</th>
                    <th>Ativo/Desativo</th>
                    <th class="text-end min-w-100px"></th>
                  </tr>
                  <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                  <tr v-for="course in courses" :key="course.id">
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
                    <td>{{ course.name }}</td>
                    <td style="font-weight: 300">
                      <span class="text-overflow-line-1" v-html="course.description"></span
                      >
                    </td>
                    <td>
                      <div class="badge badge-light fw-bolder">R$ {{ course.price.toLocaleString('pt-br', {minimumFractionDigits: 2}) }}</div>
                    </td>
                    <td>
                      <div v-if="course.published" class="badge badge-light-success">Publicado</div>
                      <div v-if="!course.published" class="badge badge-light-danger">Desativado</div>
                    </td>
                    <td class="text-end">
                      <button
                        class="btn btn-light btn-active-light-primary btn-sm"
                        :class="{
                          'show menu-dropdown': course.dropdownAction,
                        }"
                        data-kt-menu-placement="bottom-end"
                        @click="openDrownDown(course.id)"
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
                          'show menu-dropdown position-absolute': course.dropdownAction,
                        }"
                      >
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" @click="edit(course.id)">
                          <a class="menu-link px-3">Editar</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                          <a class="menu-link px-3">Excluir</a>
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
      courses: [],
      errors: {
        name: {
          message: null,
        },
        description: {
          message: null,
        },
      },
    };
  },
  methods: {
    openDrownDown(id) {
      this.courses.forEach((course) => {
        if (course.id == id && !course.dropdownAction) {
          course.dropdownAction = true;
          return;
        }

        course.dropdownAction = false;
        return;
      });
    },

    edit (id) {
      this.$router.push({ name: "CoursesEdit", params: { id: id } });
    },

    create() {
      this.$router.push({ name: "CoursesCreate" });
    },

    getCourses() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.$root.$data.host}/api/courses/getMyCoursesAuthor`, header)
        .then((response) => {
          let data = response.data;

          this.courses = data.data.data;

          console.log(this.courses);
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
  mounted() {
    this.getCourses();
  },
};
</script>

<style scoped>
.text-overflow-line-1 {
  overflow: hidden !important;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}
</style>