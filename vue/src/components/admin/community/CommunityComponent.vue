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
            Comunidade
            <!--begin::Separator-->
            <span
              class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"
            ></span>
            <!--end::Separator-->
            <!--begin::Description-->
            <span class="text-muted fs-7 fw-bold mt-2"></span>
            <!--end::Description-->
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class="container-fluid">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
          <!--begin::Col-->
          <div class="col-xl-9">
            <!--begin::Feeds Widget 1-->
            <div class="card mb-5 mb-xl-8">
              <!--begin::Body-->
              <div class="card-body pb-0">
                <!--begin::Header-->
                <div class="d-flex align-items-center">
                  <!--begin::User-->
                  <div class="d-flex align-items-center flex-grow-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-45px me-5">
                      <img :src="user.avatar" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="d-flex flex-column">
                      <a
                        href="#"
                        class="text-gray-900 text-hover-primary fs-6 fw-bolder"
                        >{{ user.name }}</a
                      >
                      <span class="text-gray-400 fw-bold">{{
                        user.userTypeName
                      }}</span>
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::User-->
                  <!--begin::Menu-->
                  <div class="my-0">
                    <button
                      type="button"
                      class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                      data-kt-menu-trigger="click"
                      data-kt-menu-placement="bottom-end"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24px"
                          height="24px"
                          viewBox="0 0 24 24"
                        >
                          <g
                            stroke="none"
                            stroke-width="1"
                            fill="none"
                            fill-rule="evenodd"
                          >
                            <rect
                              x="5"
                              y="5"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                            />
                            <rect
                              x="14"
                              y="5"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                              opacity="0.3"
                            />
                            <rect
                              x="5"
                              y="14"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                              opacity="0.3"
                            />
                            <rect
                              x="14"
                              y="14"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                              opacity="0.3"
                            />
                          </g>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 2-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                      data-kt-menu="true"
                    >
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div
                          class="menu-content fs-6 text-dark fw-bolder px-3 py-4"
                        >
                          Quick Actions
                        </div>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator mb-3 opacity-75"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Ticket</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Customer</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div
                        class="menu-item px-3"
                        data-kt-menu-trigger="hover"
                        data-kt-menu-placement="right-start"
                      >
                        <!--begin::Menu item-->
                        <a href="#" class="menu-link px-3">
                          <span class="menu-title">New Group</span>
                          <span class="menu-arrow"></span>
                        </a>
                        <!--end::Menu item-->
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Admin Group</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Staff Group</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Member Group</a>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Contact</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator mt-3 opacity-75"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div class="menu-content px-3 py-3">
                          <a class="btn btn-primary btn-sm px-4" href="#"
                            >Generate Reports</a
                          >
                        </div>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->
                  </div>
                  <!--end::Menu-->
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <div class="mt-5 mb-5 d-grid">
                  <ckeditor
                    :editor="editor"
                    v-model="editorData"
                    @ready="onReady"
                    :config="editorConfig"
                  ></ckeditor>
                </div>

                <div
                  class="d-flex flex-row align-items-center justify-content-end m-5"
                >
                  <button
                    class="btn btn-primary text-center"
                    @click="setPost()"
                    id=""
                  >
                    <span v-if="!loading" class="indicator-label">Postar</span>
                    <span v-if="loading" class=""
                      >Postando...
                      <span
                        class="spinner-border spinner-border-sm align-middle ms-2"
                      ></span
                    ></span>
                  </button>
                </div>
                <!--end::Form-->
              </div>
              <!--end::Body-->
            </div>
            <!--begin::Feeds Widget 2-->
            <div v-for="post in posts" :key="post.id" class="card mb-5 mb-xl-8">
              <!--begin::Body-->
              <div class="card-body pb-0">
                <!--begin::Header-->
                <div class="d-flex align-items-center mb-5">
                  <!--begin::User-->
                  <div class="d-flex align-items-center flex-grow-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-45px me-5">
                      <img :src="post.user.avatar" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="d-flex flex-column">
                      <div class="d-flex flex-row align-items-center">
                        <a
                          href="#"
                          class="text-gray-900 text-hover-primary fs-6 fw-bolder"
                          >{{ post.user.name }}</a
                        >

                        <span class="text-gray-400 font-size-12 m-2">{{
                          $filters
                            .moment(post.created_at)
                            .format("DD/MM/YYYY HH:mm")
                        }}</span>
                      </div>
                      <div>
                        <span class="text-gray-500 fw-bold">{{
                          post.user.email
                        }}</span>
                      </div>
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::User-->
                  <!--begin::Menu-->
                  <div class="my-0">
                    <button
                      type="button"
                      class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                      data-kt-menu-trigger="click"
                      data-kt-menu-placement="bottom-end"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24px"
                          height="24px"
                          viewBox="0 0 24 24"
                        >
                          <g
                            stroke="none"
                            stroke-width="1"
                            fill="none"
                            fill-rule="evenodd"
                          >
                            <rect
                              x="5"
                              y="5"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                            />
                            <rect
                              x="14"
                              y="5"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                              opacity="0.3"
                            />
                            <rect
                              x="5"
                              y="14"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                              opacity="0.3"
                            />
                            <rect
                              x="14"
                              y="14"
                              width="5"
                              height="5"
                              rx="1"
                              fill="currentColor"
                              opacity="0.3"
                            />
                          </g>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 2-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                      data-kt-menu="true"
                    >
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div
                          class="menu-content fs-6 text-dark fw-bolder px-3 py-4"
                        >
                          Quick Actions
                        </div>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator mb-3 opacity-75"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Ticket</a>
                      </div>
                      <!--begin::Menu separator-->
                      <div class="separator mt-3 opacity-75"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div class="menu-content px-3 py-3">
                          <a class="btn btn-primary btn-sm px-4" href="#"
                            >Generate Reports</a
                          >
                        </div>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->
                  </div>
                  <!--end::Menu-->
                </div>
                <!--end::Header-->
                <!--begin::Post-->
                <div class="mb-5">
                  <!--begin::Text-->
                  <div v-html="post.description" class="mb-5"></div>
                  <!--end::Text-->
                  <!--begin::Toolbar-->
                  <!--<div class="d-flex align-items-center mb-5">
                    <a
                      href="#"
                      class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4"
                    >
                      <span class="svg-icon svg-icon-3">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                            fill="currentColor"
                          />
                          <rect
                            x="6"
                            y="12"
                            width="7"
                            height="2"
                            rx="1"
                            fill="currentColor"
                          />
                          <rect
                            x="6"
                            y="7"
                            width="12"
                            height="2"
                            rx="1"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      120</a
                    >
                    <a
                      href="#"
                      class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2"
                    >
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      15</a
                    >
                  </div>-->
                  <!--end::Toolbar-->
                </div>
                <!--end::Post-->
                <!--begin::Separator-->
                <div class="separator mb-4"></div>
                <!--end::Separator-->
                <!--begin::Reply input-->
                <form class="position-relative mb-6">
                  <textarea
                    class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                    data-kt-autosize="true"
                    rows="1"
                    placeholder="Reply.."
                  ></textarea>
                  <div class="position-absolute top-0 end-0 me-n5">
                    <span
                      class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                      <span class="svg-icon svg-icon-3 mb-3">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                            fill="currentColor"
                          />
                          <path
                            d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span
                      class="btn btn-icon btn-sm btn-active-color-primary ps-0"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                      <span class="svg-icon svg-icon-2 mb-3">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                            fill="currentColor"
                          />
                          <path
                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                  </div>
                </form>
                <!--edit::Reply input-->
              </div>
              <!--end::Body-->
            </div>
            <!--end::Feeds Widget 2-->
            <button
              class="btn btn-primary w-100 text-center"
              id="kt_widget_5_load_more_btn"
            >
              <span class="indicator-label">More Feeds</span>
              <span class="indicator-progress"
                >Loading...
                <span
                  class="spinner-border spinner-border-sm align-middle ms-2"
                ></span
              ></span>
            </button>
          </div>
          <!--end::Col-->
          <div class="col-xl-3"></div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Post-->
  </div>
</template>
<script>
import DocumentEditor from "@ckeditor/ckeditor5-build-decoupled-document";

export default {
  data() {
    return {
      description: null,
      user: {
        avatar: null,
        name: null,
        userTypeName: null,
      },
      posts: [],
      editor: DocumentEditor,
      editorData: "<p>O que você está pensando?</p>",
      editorConfig: {
        ckfinder: {
          uploadUrl: "https://page.com/api/uploadckeditor",
        },
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
            //"imageUpload",
            //"blockQuote",
            //"insertTable",
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
        mediaEmbed: {
          previewsInData: true,
        },
      },
      loading: false,
    };
  },
  beforeCreate() {
    this.emitter.on("user", (data) => {
      this.user = data;

      if (data.avatar) {
        this.user.avatar = data.avatar;
      }

      if (data.name) {
        this.user.name = data.name;
      }

      if (data.email) {
        this.user.email = data.email;
      }
    });
  },
  async mounted() {
    //window.KTMenu.init();
    //window.KTMenu.initGlobalHandlers();
    //window.KTWidgets.init();

    this.user = this.user.id != undefined ? this.user.id : this.$root.user;

    await this.getAllCommunity();
  },
  methods: {
    getAllCommunity() {
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.$root.$data.host}/api/community/getAllPost`, header)
        .then((response) => {
          let data = response.data;

          if (data.status == "error") {
            this.$notify({
              type: "error",
              title: "Erro!",
              text: data.message,
            });

            return;
          }

          this.posts = data.data.data;

          //console.log(this.posts, "posts");
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },

    setPost() {
      this.loading = true;

      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .post(
          `${this.$root.$data.host}/api/community/createPost`,
          { description: this.editorData },
          header
        )
        .then(() => {
          //let data = response.data;

          this.editorData = "<p>O que você está pensando?</p>";

          this.getAllCommunity();

          this.loading = false;
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },

    onReady(editor) {
      // Insert the toolbar before the editable area.
      editor.ui
        .getEditableElement()
        .parentElement.insertBefore(
          editor.ui.view.toolbar.element,
          editor.ui.getEditableElement()
        );
    },
  },
};
</script>

<style>
.ck-content {
  min-height: 150px;
  border-radius: 0 !important;
}

.ql-container.ql-snow {
  background-color: var(--bs-body-bg) !important;
}

.ck.ck-editor__editable_inline[dir="ltr"] {
  order: 0;
}

.ck.ck-toolbar {
  order: 1;
}

.ck.ck-toolbar.ck-toolbar_grouping > .ck-toolbar__items {
  flex-wrap: wrap !important;
}

.ck.ck-powered-by {
  display: none !important;
}

.ck.ck-editor__editable.ck-focused:not(.ck-editor__nested-editable) {
  border: none !important;
}

.ck.ck-toolbar {
  background: transparent !important;
  border: none !important;
}

.ck-reset_all :not(.ck-reset_all-excluded *),
.ck.ck-reset_all {
  color: var(--bs-active-dark) !important;
}

/*.ck-toolbar__items.ck.ck-button:not(.ck-disabled):hover, a.ck.ck-button:not(.ck-disabled):hover {
  background: transparent !important;
  border: #fff!important;
}*/
</style>