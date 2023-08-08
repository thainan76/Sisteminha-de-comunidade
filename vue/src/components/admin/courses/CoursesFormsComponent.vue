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
            <span class="text-muted fs-7 fw-bold mt-2">Criação de curso</span>
            <!--end::Description-->
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
          <a
            class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
            @click="back()"
          >
            <span class="indicator-label">Voltar</span>
          </a>

          <a v-if="courses.id" @click="update()" class="btn btn-sm btn-primary">
            <span class="indicator-label">Atualizar</span>
          </a>

          <a
            v-if="!loading && !courses.id"
            @click="create()"
            class="btn btn-sm btn-primary"
          >
            <span class="indicator-label">Criar</span>
          </a>
        </div>
      </div>
      <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class="container-xxl">
        <!--begin::About card-->
        <div class="card mb-5">
          <!--begin::Body-->
          <div class="card-body p-lg-17">
            <div
              class="d-flex flex-column align-items-center justify-content-center w-100"
            >
              <!--begin::Input group-->
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <div class="col-12 col-md-12">
                  <div class="form-floating mb-5 w-100">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="name"
                      v-model="courses.name"
                      placeholder="Nome do curso"
                    />
                    <label for="name">Nome do curso</label>
                  </div>
                  <div
                    v-if="errors.name.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.name.message }}</div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="d-flex flex-column align-items-center justify-content-center w-100"
            >
              <!--begin::Input group-->
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <div class="col-12 col-md-8">
                  <div class="form-floating mb-5 w-100">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="price"
                      v-model="courses.price"
                      placeholder="Preço"
                      v-money="currencyMask"
                    />
                    <label for="price">Preço do curso</label>
                  </div>
                  <div
                    v-if="errors.price.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.price.message }}</div>
                  </div>
                </div>

                <div class="col-12 col-md-4">
                  <div class="form-floating mb-5 w-100">
                    <div
                      class="form-check form-switch form-check-custom form-check-solid"
                    >
                      <input
                        class="form-check-input"
                        type="checkbox"
                        :checked="courses.published"
                        id="published"
                        v-on:input="courses.published = $event.target.checked"
                      />
                      <label class="form-check-label" for="published">
                        Ativo/Desativado
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-6 w-100">
              <label class="col-lg-12 col-form-label fw-bold fs-6"
                >Imagem</label
              >
              <div class="col-lg-12">
                <div
                  class="image-input image-input-outline"
                  data-kt-image-input="true"
                  style="
                    background-image: url('assets/media/svg/avatars/blank.svg');
                  "
                >
                  <div
                    class="image-input-wrapper w-125px h-125px"
                    :style="styleAvatarBackground"
                  ></div>
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
                  </label>
                  <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel"
                    data-bs-toggle="tooltip"
                    title="Cancel avatar"
                  >
                    <i class="bi bi-x fs-2"></i>
                  </span>
                </div>
                <div class="form-text">
                  Tipos de arquivos permitidos: png, jpg, jpeg.
                </div>
                <div
                  v-if="errors.imagem.message"
                  class="fv-plugins-message-container invalid-feedback"
                >
                  <div>{{ errors.imagem.message }}</div>
                </div>
              </div>
            </div>

            <div class="mt-5 mb-5">
              <ckeditor
                :editor="editor"
                v-model="editorData"
                @ready="onReady"
                :config="editorConfig"
              ></ckeditor>
              <div
                v-if="errors.description.message"
                class="fv-plugins-message-container invalid-feedback"
              >
                <div>{{ errors.description.message }}</div>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::About card-->

        <!--
    <div class="card mb-5">
      <div class="card-header">
        <div class="card-title">
          <h2>Arquivos</h2>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div
            v-for="documents in [0, 1, 2, 3, 4, 5]"
            :key="documents"
            class="col-md-6 col-lg-4 col-xl-3"
          >
            <div class="card h-100">
              <div
                class="card-body d-flex justify-content-center text-center flex-column p-8"
              >
                <a
                  href="#"
                  class="text-gray-800 text-hover-primary d-flex flex-column"
                >
                  <div class="symbol symbol-60px mb-5">
                    <img src="@/assets/media/svg/files/doc.svg" alt="" />
                  </div>
                  <div class="fs-5 fw-bolder mb-2">CRM App Docs..</div>
                </a>
                <div class="fs-7 fw-bold text-gray-400">3 days ago</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div
              class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8"
            >
              <img
                src="assets/media/svg/files/upload.svg"
                class="mb-5"
                alt=""
              />
              <a href="#" class="text-hover-primary fs-5 fw-bolder mb-2"
                >File Upload</a
              >
              <div class="fs-7 fw-bold text-gray-400">
                Drag and drop files here
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
        <div
          v-if="courses.id != undefined && courses.id != null"
          class="card mb-5"
        >
          <div class="card-header">
            <div
              class="card-title d-flex flex-row justify-content-between w-100"
            >
              <div class="d-flex align-items-center gap-2 gap-lg-3">
                <h2>Aulas</h2>
              </div>
              <div
                class="d-flex align-items-center gap-2 gap-lg-3"
                @click="goToClassesCreate()"
              >
                <a class="btn btn-sm btn-primary">Criar nova aula</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
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
                    <th class="min-w-150px">Aula</th>
                    <th class="w-100">Descrição</th>
                    <th class="min-w-100px">Tempo (minutos)</th>
                    <th class="text-end min-w-40px">Ordernagem</th>
                    <th class="text-end min-w-100px"></th>
                    <th class="text-end min-w-100px"></th>
                  </tr>
                  <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                  <tr
                    v-for="(lesson, key) in [0, 1, 2, 3, 4, 5, 6, 7]"
                    :key="lesson"
                  >
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
                    <td>Aula 1</td>
                    <td class="text-overflow-line-1" style="font-weight: 300">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Quisque hendrerit iaculis congue. Maecenas lobortis
                      scelerisque pretium. In euismod ante quis sem blandit
                      iaculis. Integer lectus libero, iaculis id pretium sit
                      amet, imperdiet vel nulla. Proin tristique varius velit,
                      vitae viverra risus ultrices eget.
                    </td>
                    <td>
                      <div class="badge badge-light fw-bolder">120 min</div>
                    </td>
                    <td>
                      {{ key }}
                    </td>
                    <td>
                      <div class="badge badge-light-success">Publicado</div>
                    </td>
                    <td class="text-end">
                      <button
                        class="btn btn-light btn-active-light-primary btn-sm"
                        :class="{
                          'show menu-dropdown': false,
                        }"
                        data-kt-menu-placement="bottom-end"
                        @click="openDrownDown()"
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
                          'show menu-dropdown position-absolute': false,
                        }"
                      >
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
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
            </div>
          </div>
        </div>
      </div>
      <!--end::Container-->
    </div>
  </div>
</template>
<script>
import DocumentEditor from "@ckeditor/ckeditor5-build-decoupled-document";
//import {VMoney} from 'v-money';

export default {
  data() {
    return {
      currencyMask: {
        decimal: ",",
        thousands: ".",
        prefix: "R$ ",
        suffix: "",
        precision: 2,
        masked: false,
      },
      loading: false,
      courses: {
        id: null,
        name: null,
        imagem: null,
      },
      errors: {
        name: {
          message: null,
        },
        description: {
          message: null,
        },
        imagem: {
          message: null,
        },
        price: {
          message: null,
        },
        published: {
          message: null,
        },
      },
      editor: DocumentEditor,
      editorData: " ",
      editorConfig: {
        placeholder: "Descrição do curso",
        toolbar: {
          items: [
            "heading",
            "|",
            "bold",
            "italic",
            "link",
            "bulletedList",
            "numberedList",
            "|",
            "outdent",
            "indent",
            "|",
            "imageUpload",
            "blockQuote",
            "insertTable",
            "mediaEmbed",
            "undo",
            "redo",
            "alignment",
            "codeBlock",
            "fontBackgroundColor",
            "fontColor",
            "fontFamily",
            "fontSize",
            "highlight",
            "horizontalLine",
            "htmlEmbed",
            "imageInsert",
            "pageBreak",
            "removeFormat",
            "strikethrough",
            "underline",
            "style",
          ],
        },
        language: "pt-br",
        image: {
          toolbar: [
            "imageTextAlternative",
            "imageStyle:inline",
            "imageStyle:block",
            "imageStyle:side",
            "imageStyle:alignLeft",
            "imageStyle:alignRight",
            "imageStyle:alignCenter",
            "imageStyle:alignBlockLeft",
            "imageStyle:alignBlockRight",
            "linkImage",
          ],
        },
        table: {
          contentToolbar: [
            "tableColumn",
            "tableRow",
            "mergeTableCells",
            "tableCellProperties",
            "tableProperties",
          ],
        },
        fontFamily: {
          options: [
            "default",
            "indieflowerregular",
            "Arial, sans-serif",
            "Verdana, sans-serif",
            "Trebuchet MS",
            "Apple Color Emoji",
            "Segoe UI Emoji",
            "Segoe UI Symbol",
          ],
        },
        licenseKey: "",
      },
      styleAvatarBackground: " ",
    };
  },
  methods: {
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

      this.courses.imagem = files[0];

      this.createImage(files[0]);
    },

    createImage(file) {
      var reader = new FileReader();
      var vm = this;

      reader.onload = (e) => {
        //vm.dataUser.avatar = e.target.result;
        vm.styleAvatarBackground = `background: url(${e.target.result}); background-size: cover!important`;
      };

      reader.readAsDataURL(file);

      // se estiver editando o usuario
      /*if (this.$route.params.id) {
    this.updateOrCreateImagem();
  }*/
    },

    back() {
      this.$router.push({ name: "Courses" });
    },

    openDrownDown() {},

    onReady(editor) {
      // Insert the toolbar before the editable area.
      editor.ui
        .getEditableElement()
        .parentElement.insertBefore(
          editor.ui.view.toolbar.element,
          editor.ui.getEditableElement()
        );
    },

    goToClassesCreate() {
      this.$router.push({ name: "ClassesCreate" });
    },

    verifyRequired() {
      if (this.courses.name == null || this.courses.name == "") {
        this.errors.name.message =
          "Nome do curso é obrigatório, por favor preencher";
        return false;
      }

      if (this.editorData == null || this.editorData == "") {
        this.errors.description.message =
          "Descrição do curso é obrigatório, por favor preencher";
        return false;
      }

      if (this.courses.imagem == null || this.courses.imagem == "") {
        this.errors.imagem.message =
          "Imagem é obrigatório, por favor, fazer upload";
        return false;
      }

      if (this.courses.price == null || this.courses.price == 0) {
        this.errors.price.message = "Preço não pode ser menor do que zero!";
        return false;
      }

      return true;
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
            `${this.$root.$data.host}/api/courses/create`,
            {
              name: this.courses.name,
              description: this.editorData,
              price: parseFloat(
                this.courses.price
                  .replace("R$", "")
                  .trim()
                  .replaceAll(".", "")
                  .replaceAll(",", ".")
              ),
              published: this.courses.published,
            },
            header
          )
          .then((response) => {
            let data = response.data;

            if (data.message) {
              this.courses.id = data.course_id;
              this.updateOrCreateImagem();
            }
          })
          .catch((error) => {
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

            this.loading = false;
          });
      }
    },

    update() {
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
            `${this.$root.$data.host}/api/courses/updateCourse`,
            {
              id: this.courses.id,
              name: this.courses.name,
              description: this.editorData,
              published: this.courses.published,
              price: parseFloat(
                this.courses.price
                  .replace("R$", "")
                  .trim()
                  .replaceAll(".", "")
                  .replaceAll(",", ".")
              ),
            },
            header
          )
          .then((response) => {
            let data = response.data;

            if (data.message) {
              if (!this.courses.image_course.includes("storage")) {
                this.updateOrCreateImagem();
              } else {
                this.$notify({
                  type: "success",
                  title: "Sucesso!",
                  text: data.message,
                  duration: 5000,
                });
              }
            }
          })
          .catch((error) => {
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

            this.loading = false;
          });
      }
    },

    updateOrCreateImagem() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
          "content-type": "multipart/form-data",
        },
      };

      const formdata = new FormData();
      formdata.append("image_course", this.courses.imagem);
      formdata.append("idCourse", this.courses.id);

      this.axios
        .post(
          `${this.$root.$data.host}/api/courses/createOrUpdateImagem`,
          formdata,
          header
        )
        .then((response) => {
          let data = response.data;

          this.$notify({
            type: "success",
            title: "Sucesso",
            text: data.message,
          });

          //this.$router.push({ name: "Courses" });
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },

    getCourse(id) {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.$root.$data.host}/api/courses/getCourseById/${id}`, header)
        .then((response) => {
          let data = response.data;

          this.courses = data.course;

          this.courses.imagem = data.course.image_course;

          this.editorData = data.course.description;
          this.styleAvatarBackground = `background: url(${this.$root.$data.host}${data.course.image_course})`;
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },

    getClasses() {},
  },
  mounted() {
    if (this.$route.params.id) {
      this.getCourse(this.$route.params.id);
    }
  },
};
</script>

<style scoped>
.image-input .image-input-wrapper {
  width: 560px !important;
  max-width: 100% !important;
  height: 400px !important;
  background-size: cover !important;
}

.ck-rounded-corners .ck.ck-toolbar,
.ck.ck-toolbar.ck-rounded-corners {
  border-radius: 0px !important;
}
.ck-toolbar {
  border-radius: 0px !important;
}

.ck-rounded-corners .ck.ck-toolbar,
.ck.ck-toolbar.ck-rounded-corners {
  background: var(--bs-body-bg) !important;
  border: 1px solid var(--bs-body-bg) !important;
  padding: 0 var(--ck-spacing-small);
}

.ck.ck-editor__editable_inline {
  border: 1px solid #ffffff00;
  border-radius: 0 !important;
  background: #f5f8fa;
  overflow: auto;
  padding: 0 var(--ck-spacing-standard);
}

.ck.ck-editor__editable.ck-focused:not(.ck-editor__nested-editable) {
  border: none !important;
  border-color: transparent !important;
}

.ck.ck-balloon-panel.ck-powered-by-balloon[class*="position_border"] {
  display: none !important;
}

.ck.ck-balloon-panel.ck-powered-by-balloon .ck.ck-powered-by a {
  display: none !important;
}

.text-overflow-line-1 {
  overflow: hidden !important;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}

.ck.ck-editor__editable_inline {
  background: var(--bs-body-bg) !important;
}
</style>