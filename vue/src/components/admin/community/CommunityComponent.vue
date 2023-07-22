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
        <div class="row g-5 g-xl-8" id="posts">
          <!--begin::Col-->
          <div class="col-xl-9">
            <!-- eslint-disable -->
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
                        <span class="material-symbols-outlined">
                          more_vert
                        </span>
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
            <div
              v-if="loading"
              v-for="skeleton in [0]"
              :key="skeleton"
              class="card mb-5 mb-xl-8"
            >
              <!--begin::Body-->
              <div class="card-body pb-0">
                <!--begin::Header-->
                <div class="d-flex align-items-center mb-5">
                  <!--begin::User-->
                  <div class="d-flex align-items-center flex-grow-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-45px me-5">
                      <v-skeleton
                        width="40px"
                        height="40px"
                        borderRadius=".475rem"
                        class="mb-2"
                      ></v-skeleton>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="d-flex flex-column">
                      <div class="d-flex flex-row align-items-center">
                        <v-skeleton
                          width="100%"
                          height="1rem"
                          class="mb-2"
                        ></v-skeleton>
                        <span class="text-gray-400 font-size-12 m-2">
                          <v-skeleton
                            width="100%"
                            height="1rem"
                            class="mb-2"
                          ></v-skeleton>
                        </span>
                      </div>
                      <div>
                        <span class="text-gray-500 fw-bold w-100">
                          <v-skeleton width="10rem" class="mb-2"></v-skeleton>
                        </span>
                      </div>
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::User-->
                </div>
                <!--end::Header-->
                <!--begin::Post-->
                <div class="mb-5">
                  <v-skeleton
                    width="100%"
                    height="10rem"
                    class="mb-2"
                  ></v-skeleton>
                </div>
                <!--end::Post-->
                <!--begin::Separator-->
                <div class="separator mb-4"></div>
                <!--end::Separator-->
                <!--begin::Reply input-->
                <form class="position-relative mb-6">
                  <v-skeleton
                    width="100%"
                    height="3rem"
                    class="mb-2"
                  ></v-skeleton>
                </form>
                <!--edit::Reply input-->
              </div>
              <!--end::Body-->
            </div>
            <div
              v-if="loadingFirst"
              v-for="post in posts"
              :key="post.id"
              class="card mb-5 mb-xl-8"
            >
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
                        <span
                          class="material-symbols-outlined material-symbols-outlined"
                        >
                          more_vert
                        </span>
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
                  <div class="position-absolute top-0 end-0 me-n5"></div>
                </form>
                <!--edit::Reply input-->
              </div>
              <!--end::Body-->
            </div>
            <div
              v-if="!loadingFirst"
              v-for="skeleton in [0, 1, 2, 3, 4, 5, 6]"
              :key="skeleton"
              class="card mb-5 mb-xl-8"
            >
              <!--begin::Body-->
              <div class="card-body pb-0">
                <!--begin::Header-->
                <div class="d-flex align-items-center mb-5">
                  <!--begin::User-->
                  <div class="d-flex align-items-center flex-grow-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-45px me-5">
                      <v-skeleton
                        width="40px"
                        height="40px"
                        borderRadius=".475rem"
                        class="mb-2"
                      ></v-skeleton>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="d-flex flex-column">
                      <div class="d-flex flex-row align-items-center">
                        <v-skeleton
                          width="100%"
                          height="1rem"
                          class="mb-2"
                        ></v-skeleton>
                        <span class="text-gray-400 font-size-12 m-2">
                          <v-skeleton
                            width="100%"
                            height="1rem"
                            class="mb-2"
                          ></v-skeleton>
                        </span>
                      </div>
                      <div>
                        <span class="text-gray-500 fw-bold w-100">
                          <v-skeleton width="10rem" class="mb-2"></v-skeleton>
                        </span>
                      </div>
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::User-->
                </div>
                <!--end::Header-->
                <!--begin::Post-->
                <div class="mb-5">
                  <v-skeleton
                    width="100%"
                    height="10rem"
                    class="mb-2"
                  ></v-skeleton>
                </div>
                <!--end::Post-->
                <!--begin::Separator-->
                <div class="separator mb-4"></div>
                <!--end::Separator-->
                <!--begin::Reply input-->
                <form class="position-relative mb-6">
                  <v-skeleton
                    width="100%"
                    height="3rem"
                    class="mb-2"
                  ></v-skeleton>
                </form>
                <!--edit::Reply input-->
              </div>
              <!--end::Body-->
            </div>
            <!-- eslint-enable -->

            <div v-if="loadingMore" id="kt_widget_5_load_more_btn">
              <span
                class="d-flex flex-row align-items-center justify-content-center"
                >Carregando mais posts...
                <span
                  class="spinner-border spinner-border-sm align-middle ms-2"
                ></span>
              </span>
            </div>
            <div v-if="!nextPage" id="kt_widget_5_load_more_btn">
              <span
                class="d-flex flex-row align-items-center justify-content-center"
              >
                Acabou os posts, não tem mais nada!
              </span>
            </div>
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
      loadingFirst: false,
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
      nextPage: " ",
      loadingMore: false,
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
  mounted() {
    this.user = this.user.id != undefined ? this.user.id : this.$root.user;

    //const listElm = document.querySelector("#posts");
    const listElm = document.documentElement;
    window.onscroll = () => {
      //console.log(e, listElm);
      if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
        if (this.nextPage) {
          if (!this.loadingMore) {
            this.loadMore();
          }
        }
      }
    };

    this.getAllCommunity();
  },
  methods: {
    loadMore() {
      this.loadingMore = true;
      let tokenAuth = this.$store.state.userAuth.authorization.token;

      let header = {
        headers: {
          Authorization: "Bearer " + tokenAuth,
        },
      };

      this.axios
        .get(`${this.nextPage}`, header)
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

          this.nextPage = data.data.next_page_url;

          this.posts.push(...data.data.data);

          this.loadingMore = false;
        })
        .catch((error) => {
          this.$notify({
            type: "error",
            title: "Erro!",
            text: error.response.data.message,
          });
        });
    },

    setLoadingFirst() {
      this.loadingFirst = true;
    },

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

          this.nextPage = data.data.next_page_url;

          this.posts = data.data.data;

          if (!this.loadingFirst) {
            this.setLoadingFirst();
          }

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

p > img {
  width: 100%;
}
</style>