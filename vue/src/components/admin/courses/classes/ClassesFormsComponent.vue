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
            Aulas
            <!--begin::Separator-->
            <span
              class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"
            ></span>
            <!--end::Separator-->
            <!--begin::Description-->
            <span class="text-muted fs-7 fw-bold mt-2">Aula do curso</span>
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
          <!--begin::Primary button-->
          <a class="btn btn-sm btn-primary">Criar aula</a>
          <!--end::Primary button-->
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
                      v-model="classe.name"
                      placeholder="Nome do curso"
                    />
                    <label for="name">Nome da aula</label>
                  </div>
                  <div
                    v-if="errors.name.message"
                    class="fv-plugins-message-container invalid-feedback"
                  >
                    <div>{{ errors.name.message }}</div>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row flex-wrap flex-md-nowrap w-100 gap-2">
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-7">
                    <select
                      class="form-select form-select-solid"
                      id="typeUsers"
                      aria-label="Selecione um tipo de usuário"
                      v-model="classe.id_courses_types"
                    >
                      <option
                        v-for="type in courses_types"
                        :key="type.id"
                        :value="type.id"
                        :selected="classe.id_courses_types == type.id"
                      >
                        {{ type.name }}
                      </option>
                    </select>
                    <label for="typeUsers">Tipos de usuários</label>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-7">
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      id="duration"
                      v-model="classe.duration"
                      placeholder="Duração (minutos)"
                    />
                    <label for="typeUsers">Duração do vídeo</label>
                  </div>
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
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::About card-->
        <div class="card mb-5">
          <div class="card-header">
            <div class="card-title">
              <h2>Arquivos</h2>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <!--begin::Col-->
              <div
                v-for="documents in [0]"
                :key="documents"
                class="col-md-6 col-lg-4 col-xl-3"
              >
                <!--begin::Card-->
                <div class="card h-100">
                  <!--begin::Card body-->
                  <div
                    class="card-body d-flex justify-content-center text-center flex-column p-8"
                  >
                    <!--begin::Name-->
                    <a
                      href="#"
                      class="text-gray-800 text-hover-primary d-flex flex-column"
                    >
                      <!--begin::Image-->
                      <div class="symbol symbol-60px mb-5">
                        <img src="@/assets/media/svg/files/doc.svg" alt="" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Title-->
                      <div class="fs-5 fw-bolder mb-2">CRM App Docs..</div>
                      <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-bold text-gray-400">3 days ago</div>
                    <!--end::Description-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div
                  class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8"
                >
                  <!--begin::Image-->
                  <img
                    src="assets/media/svg/files/upload.svg"
                    class="mb-5"
                    alt=""
                  />
                  <!--end::Image-->
                  <!--begin::Link-->
                  <a href="#" class="text-hover-primary fs-5 fw-bolder mb-2"
                    >File Upload</a
                  >
                  <!--end::Link-->
                  <!--begin::Description-->
                  <div class="fs-7 fw-bold text-gray-400">
                    Drag and drop files here
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Card-->
              </div>
              <!--end::Col-->
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

export default {
  data() {
    return {
      classe: {
        name: null,
        description: null,
        duration: 0,
      },
      errors: {
        name: {
          message: null,
        },
        description: {
          message: null,
        },
      },
      editor: DocumentEditor,
      editorData: " ",
      editorConfig: {
        placeholder: "Descrição da aula",
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
      courses_types: [],
    };
  },
  methods: {
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

    back() {
      this.$router.go(-1);
    },

    getCoursesType() {
      this.loading = true;

      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.$root.$data.host}/api/coursesTypes/getCourseTypes`, header)
        .then((response) => {
          let data = response.data;

          this.courses_types = data.data;

          console.log("courses_types", this.courses_types);
          this.loading = false;
        });
    },
  },
  mounted() {
    this.getCoursesType();
  },
};
</script>
<style scoped>
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