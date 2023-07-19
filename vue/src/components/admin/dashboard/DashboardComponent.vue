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
            Dashboard
            <span
              class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"
            ></span>
            <span class="text-muted fs-7 fw-bold mt-2"></span>
          </h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3"></div>
        <!--end::Actions-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class="container-fluid">
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column" id="kt_post">
          <!--begin::Container-->
          <div id="kt_content_container" class="">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
              <!--begin::Col-->
              <div class="col-xl-12">
                <!--begin::Engage widget 6-->
                <div
                  class="card flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                  style="
                    background-color: #020202;
                    background-image: url('/media/stock/600x600/img-62.jpg');
                  "
                >
                  <!--begin::Body-->
                  <div
                    class="card-body d-flex justify-content-between flex-column ps-xl-18"
                  >
                    <!--begin::Heading-->
                    <div class="mb-20 pt-xl-13">
                      <!--begin::Title-->
                      <h3 class="fw-bolder text-white fs-4x mb-5 ms-n1">
                        Curso XPTO
                      </h3>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <span class="fw-bolder text-white fs-4 mb-8 d-block lh-0"
                        >com Tiago Quintanilha</span
                      >
                      <!--end::Description-->
                      <!--begin::Items-->
                      <div class="d-flex align-items-center">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center me-6">
                          <!--begin::Icon-->
                          <a href="#" class="me-2">
                            <i class="fonticon-play text-primary fs-3"></i>
                          </a>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="fw-bold text-white fs-6"
                            >100+ aulas</span
                          >
                          <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <!--begin::Icon-->
                          <a href="#" class="me-2">
                            <i class="fonticon-headset text-primary fs-3"></i>
                          </a>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="fw-bold text-white fs-6"
                            >30.000 reproduções</span
                          >
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Items-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Action-->
                    <div class="mb-xl-10 mb-3">
                      <a
                        href="#"
                        class="btn btn-primary fw-bold me-2"
                        data-bs-toggle="modal"
                        data-bs-target="#kt_modal_upgrade_plan"
                        >Comprar agora</a
                      >
                      <a
                        href="#"
                        class="btn btn-color-white bg-transparent btn-outline fw-bold"
                        style="border: 1px solid rgba(255, 255, 255, 0.3)"
                        >Ver depois</a
                      >
                    </div>
                    <!--begin::Action-->
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Engage widget 6-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
              <!--begin::Col-->
              <div class="col-xl-8">
                <!--begin::Player widget 1-->
                <div class="card card-flush h-xl-100">
                  <!--begin::Header-->
                  <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label fw-bolder text-dark"
                        >Recently Played</span
                      >
                      <span class="text-gray-400 mt-1 fw-bold fs-6"
                        >Updated 37 minutes ago</span
                      >
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        >History</a
                      >
                    </div>
                    <!--end::Toolbar-->
                  </div>
                  <!--end::Header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-7">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-9 mb-5 mb-xl-9">
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-61.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >Daily Podcast</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Darlene Robertson</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-60.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >Neon Lights</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Wade Warren</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-63.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >Single Eye</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Robert Fox</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-56.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >Radiohead</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Jacob Jones</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-9 mb-xl-3">
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-57.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >It is what it is</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Jane Cooper</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-58.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >Broken Mirros</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Jenny Wilson</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-55.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >The Hood</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Albert Flores</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-sm-3">
                        <!--begin::Player card-->
                        <div class="m-0">
                          <!--begin::User pic-->
                          <div class="card-rounded position-relative mb-5">
                            <!--begin::Img-->
                            <div
                              class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                              style="
                                background-image: url('/media/stock/600x600/img-64.jpg');
                              "
                            ></div>
                            <!--end::Img-->
                            <!--begin::Play-->
                            <button
                              class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                              data-kt-element="list-play-button"
                            >
                              <i
                                class="fonticon-play text-white fs-2x"
                                data-kt-element="list-play-icon"
                              ></i>
                              <i
                                class="fonticon-pause text-white fs-2x d-none"
                                data-kt-element="list-pause-icon"
                              ></i>
                            </button>
                            <!--end::Play-->
                          </div>
                          <!--end::User pic-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <!--begin::Title-->
                            <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                              >Cirle Lights</a
                            >
                            <!--end::Title-->
                            <span
                              class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                              >Dianne Russell</span
                            >
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Player card-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Player widget 1-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-xl-4">
                <!--begin::List widget 24-->
                <div class="card h-xl-100" id="kt_list_widget_24">
                  <!--begin::Header-->
                  <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label fw-bolder text-gray-800"
                        >Top Podcaster</span
                      >
                      <span class="text-gray-400 mt-1 fw-bolder fs-7"
                        >8k social visitors</span
                      >
                    </h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                      <a href="#" class="btn btn-sm btn-light">View All</a>
                    </div>
                    <!--end::Toolbar-->
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-6">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-circle symbol-60px me-4">
                        <img
                          src="/media/avatars/300-28.jpg"
                          class=""
                          alt=""
                        />
                      </div>
                      <!--end::Symbol-->
                      <!--begin::Section-->
                      <div
                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                      >
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                          <a
                            href="../../demo1/dist/pages/user-profile/overview.html"
                            class="text-gray-800 text-hover-primary fs-5 fw-boldest"
                            >Leslie Alexander</a
                          >
                          <span class="text-gray-400 fw-bold d-block fs-6"
                            >Community</span
                          >
                        </div>
                        <!--end:Author-->
                        <!--begin::Follow-->
                        <button
                          class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                          data-kt-element="follow"
                        >
                          Follow
                        </button>
                        <!--end::Follow-->
                      </div>
                      <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-circle symbol-60px me-4">
                        <img
                          src="/media/avatars/300-29.jpg"
                          class=""
                          alt=""
                        />
                      </div>
                      <!--end::Symbol-->
                      <!--begin::Section-->
                      <div
                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                      >
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                          <a
                            href="../../demo1/dist/pages/user-profile/overview.html"
                            class="text-gray-800 text-hover-primary fs-5 fw-boldest"
                            >Jacob Jones</a
                          >
                          <span class="text-gray-400 fw-bold d-block fs-6"
                            >Community</span
                          >
                        </div>
                        <!--end:Author-->
                        <!--begin::Follow-->
                        <button
                          class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bolder"
                          data-kt-element="follow"
                        >
                          Following
                        </button>
                        <!--end::Follow-->
                      </div>
                      <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-circle symbol-60px me-4">
                        <img
                          src="/media/avatars/300-9.jpg"
                          class=""
                          alt=""
                        />
                      </div>
                      <!--end::Symbol-->
                      <!--begin::Section-->
                      <div
                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                      >
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                          <a
                            href="../../demo1/dist/pages/user-profile/overview.html"
                            class="text-gray-800 text-hover-primary fs-5 fw-boldest"
                            >Ronald Richards</a
                          >
                          <span class="text-gray-400 fw-bold d-block fs-6"
                            >Community</span
                          >
                        </div>
                        <!--end:Author-->
                        <!--begin::Follow-->
                        <button
                          class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                          data-kt-element="follow"
                        >
                          Follow
                        </button>
                        <!--end::Follow-->
                      </div>
                      <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-circle symbol-60px me-4">
                        <img
                          src="/media/avatars/300-3.jpg"
                          class=""
                          alt=""
                        />
                      </div>
                      <!--end::Symbol-->
                      <!--begin::Section-->
                      <div
                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                      >
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                          <a
                            href="../../demo1/dist/pages/user-profile/overview.html"
                            class="text-gray-800 text-hover-primary fs-5 fw-boldest"
                            >Courtney Henry</a
                          >
                          <span class="text-gray-400 fw-bold d-block fs-6"
                            >Community</span
                          >
                        </div>
                        <!--end:Author-->
                        <!--begin::Follow-->
                        <button
                          class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                          data-kt-element="follow"
                        >
                          Follow
                        </button>
                        <!--end::Follow-->
                      </div>
                      <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-circle symbol-60px me-4">
                        <img
                          src="/media/avatars/300-27.jpg"
                          class=""
                          alt=""
                        />
                      </div>
                      <!--end::Symbol-->
                      <!--begin::Section-->
                      <div
                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                      >
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                          <a
                            href="../../demo1/dist/pages/user-profile/overview.html"
                            class="text-gray-800 text-hover-primary fs-5 fw-boldest"
                            >Arlene McCoy</a
                          >
                          <span class="text-gray-400 fw-bold d-block fs-6"
                            >Community</span
                          >
                        </div>
                        <!--end:Author-->
                        <!--begin::Follow-->
                        <button
                          class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bolder"
                          data-kt-element="follow"
                        >
                          Following
                        </button>
                        <!--end::Follow-->
                      </div>
                      <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-circle symbol-60px me-4">
                        <img
                          src="/media/avatars/300-30.jpg"
                          class=""
                          alt=""
                        />
                      </div>
                      <!--end::Symbol-->
                      <!--begin::Section-->
                      <div
                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                      >
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                          <a
                            href="../../demo1/dist/pages/user-profile/overview.html"
                            class="text-gray-800 text-hover-primary fs-5 fw-boldest"
                            >Marvin McKinney</a
                          >
                          <span class="text-gray-400 fw-bold d-block fs-6"
                            >Community</span
                          >
                        </div>
                        <!--end:Author-->
                        <!--begin::Follow-->
                        <button
                          class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                          data-kt-element="follow"
                        >
                          Follow
                        </button>
                        <!--end::Follow-->
                      </div>
                      <!--end::Section-->
                    </div>
                    <!--end::Item-->
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::List widget 24-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
              <!--begin::Col-->
              <div class="col-xl-8">
                <!--begin::Engage widget 7-->
                <div class="card card-flush h-xl-100">
                  <!--begin::Header-->
                  <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label fw-bolder text-dark"
                        >Recent Followers</span
                      >
                      <span class="text-gray-400 mt-1 fw-bold fs-6"
                        >Total 424,567 deliveries</span
                      >
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                      <a
                        href="../../demo1/dist/account/statements.html"
                        class="btn btn-sm btn-light"
                        >History</a
                      >
                    </div>
                    <!--end::Toolbar-->
                  </div>
                  <!--end::Header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-7">
                    <!--begin::Row-->
                    <div class="row align-items-end h-100 gx-5 gx-xl-10">
                      <!--begin::Col-->
                      <div class="col-md-4 mb-11 mb-md-0">
                        <!--begin::Overlay-->
                        <a
                          class="d-block overlay"
                          data-fslightbox="lightbox-hot-sales"
                          href="/media/stock/900x600/42.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3"
                            style="height: 266px;background-image:url('/media/stock/900x600/42.jpg')"
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="m-0">
                          <!--begin::Title-->
                          <a
                            href="#"
                            class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                            >Feeling Good</a
                          >
                          <!--end::Title-->
                          <!--begin::Time-->
                          <span
                            class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                            >2 hours</span
                          >
                          <!--end::Time-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-4 mb-11 mb-md-0">
                        <!--begin::Overlay-->
                        <a
                          class="d-block overlay"
                          data-fslightbox="lightbox-hot-sales"
                          href="/media/stock/900x600/40.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3"
                            style="height: 266px;background-image:url('/media/stock/900x600/40.jpg')"
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="m-0">
                          <!--begin::Title-->
                          <a
                            href="#"
                            class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                            >Both Sides</a
                          >
                          <!--end::Title-->
                          <!--begin::Time-->
                          <span
                            class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                            >52 mins</span
                          >
                          <!--end::Time-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-4">
                        <!--begin::Overlay-->
                        <a
                          class="d-block overlay"
                          data-fslightbox="lightbox-hot-sales"
                          href="/media/stock/900x600/41.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3"
                            style="height: 266px;background-image:url('/media/stock/900x600/41.jpg')"
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Info-->
                        <div class="m-0">
                          <!--begin::Title-->
                          <a
                            href="#"
                            class="text-gray-800 text-hover-primary fs-3 fw-bolder d-block mb-2"
                            >Birds in the Sky</a
                          >
                          <!--end::Title-->
                          <!--begin::Time-->
                          <span
                            class="fw-bolder fs-6 text-gray-400 d-block lh-1"
                            >5 hours</span
                          >
                          <!--end::Time-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Engage widget 7-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-xl-4">
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
              <!--begin::Col-->
              <div class="col-xl-8">
                <!--begin::Tables widget 13-->
                <div class="card card-flush h-xl-100">
                  <!--begin::Header-->
                  <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label fw-bolder text-gray-800"
                        >Most Popular Sellers</span
                      >
                      <span class="text-gray-400 mt-1 fw-bold fs-6"
                        >Total 424,567 deliveries</span
                      >
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                      <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                      <div
                        data-kt-daterangepicker="true"
                        data-kt-daterangepicker-opens="left"
                        class="btn btn-sm btn-light d-flex align-items-center px-4"
                      >
                        <!--begin::Display range-->
                        <div class="text-gray-600 fw-bolder">
                          Loading date range...
                        </div>
                        <!--end::Display range-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                        <span class="svg-icon svg-icon-1 ms-2 me-0">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              opacity="0.3"
                              d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                              fill="currentColor"
                            />
                            <path
                              d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                              fill="currentColor"
                            />
                            <path
                              d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                              fill="currentColor"
                            />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-3 pb-4">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                      <!--begin::Table-->
                      <table
                        class="table table-row-dashed align-middle gs-0 gy-4 my-0"
                      >
                        <!--begin::Table head-->
                        <thead>
                          <tr
                            class="fs-7 fw-bolder text-gray-500 border-bottom-0"
                          >
                            <th class="p-0 w-200px w-xxl-450px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-125px"></th>
                            <th class="p-0 min-w-125px"></th>
                            <th class="p-0 w-100px"></th>
                          </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div
                                  class="symbol symbol-circle symbol-40px me-3"
                                >
                                  <img
                                    src="/media/avatars/300-1.jpg"
                                    class=""
                                    alt=""
                                  />
                                </div>
                                <div
                                  class="d-flex justify-content-start flex-column"
                                >
                                  <a
                                    href="#"
                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6"
                                    >Brooklyn Simmons</a
                                  >
                                  <span
                                    class="text-gray-400 fw-bold d-block fs-7"
                                    >Zuid Area</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <span
                                class="text-gray-800 fw-bolder d-block mb-1 fs-6"
                                >1,240</span
                              >
                              <span class="fw-bold text-gray-400 d-block"
                                >Deliveries</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="text-gray-800 fw-bolder text-hover-primary d-block mb-1 fs-6"
                                >$5,400</a
                              >
                              <span class="text-gray-400 fw-bold d-block fs-7"
                                >Earnings</span
                              >
                            </td>
                            <td class="float-end text-end border-0">
                              <div class="rating">
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                              </div>
                              <span
                                class="text-gray-400 fw-bold d-block fs-7 mt-1"
                                >Rating</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px"
                              >
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-gray-700"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                  >
                                    <path
                                      d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div
                                  class="symbol symbol-circle symbol-40px me-3"
                                >
                                  <img
                                    src="/media/avatars/300-2.jpg"
                                    class=""
                                    alt=""
                                  />
                                </div>
                                <div
                                  class="d-flex justify-content-start flex-column"
                                >
                                  <a
                                    href="#"
                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6"
                                    >Annette Black</a
                                  >
                                  <span
                                    class="text-gray-400 fw-bold d-block fs-7"
                                    >Zuid Area</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <span
                                class="text-gray-800 fw-bolder d-block mb-1 fs-6"
                                >6,074</span
                              >
                              <span class="fw-bold text-gray-400 d-block"
                                >Deliveries</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="text-gray-800 fw-bolder text-hover-primary d-block mb-1 fs-6"
                                >$174,074</a
                              >
                              <span class="text-gray-400 fw-bold d-block fs-7"
                                >Earnings</span
                              >
                            </td>
                            <td class="float-end text-end border-0">
                              <div class="rating">
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                              </div>
                              <span
                                class="text-gray-400 fw-bold d-block fs-7 mt-1"
                                >Rating</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px"
                              >
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-gray-700"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                  >
                                    <path
                                      d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div
                                  class="symbol symbol-circle symbol-40px me-3"
                                >
                                  <img
                                    src="/media/avatars/300-12.jpg"
                                    class=""
                                    alt=""
                                  />
                                </div>
                                <div
                                  class="d-flex justify-content-start flex-column"
                                >
                                  <a
                                    href="#"
                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6"
                                    >Esther Howard</a
                                  >
                                  <span
                                    class="text-gray-400 fw-bold d-block fs-7"
                                    >Zuid Area</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <span
                                class="text-gray-800 fw-bolder d-block mb-1 fs-6"
                                >357</span
                              >
                              <span class="fw-bold text-gray-400 d-block"
                                >Deliveries</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="text-gray-800 fw-bolder text-hover-primary d-block mb-1 fs-6"
                                >$2,737</a
                              >
                              <span class="text-gray-400 fw-bold d-block fs-7"
                                >Earnings</span
                              >
                            </td>
                            <td class="float-end text-end border-0">
                              <div class="rating">
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                              </div>
                              <span
                                class="text-gray-400 fw-bold d-block fs-7 mt-1"
                                >Rating</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px"
                              >
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-gray-700"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                  >
                                    <path
                                      d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div
                                  class="symbol symbol-circle symbol-40px me-3"
                                >
                                  <img
                                    src="/media/avatars/300-11.jpg"
                                    class=""
                                    alt=""
                                  />
                                </div>
                                <div
                                  class="d-flex justify-content-start flex-column"
                                >
                                  <a
                                    href="#"
                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6"
                                    >Guy Hawkins</a
                                  >
                                  <span
                                    class="text-gray-400 fw-bold d-block fs-7"
                                    >Zuid Area</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <span
                                class="text-gray-800 fw-bolder d-block mb-1 fs-6"
                                >2,954</span
                              >
                              <span class="fw-bold text-gray-400 d-block"
                                >Deliveries</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="text-gray-800 fw-bolder text-hover-primary d-block mb-1 fs-6"
                                >$59,634</a
                              >
                              <span class="text-gray-400 fw-bold d-block fs-7"
                                >Earnings</span
                              >
                            </td>
                            <td class="float-end text-end border-0">
                              <div class="rating">
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                              </div>
                              <span
                                class="text-gray-400 fw-bold d-block fs-7 mt-1"
                                >Rating</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px"
                              >
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-gray-700"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                  >
                                    <path
                                      d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div
                                  class="symbol symbol-circle symbol-40px me-3"
                                >
                                  <img
                                    src="/media/avatars/300-3.jpg"
                                    class=""
                                    alt=""
                                  />
                                </div>
                                <div
                                  class="d-flex justify-content-start flex-column"
                                >
                                  <a
                                    href="#"
                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6"
                                    >Marvin McKinney</a
                                  >
                                  <span
                                    class="text-gray-400 fw-bold d-block fs-7"
                                    >Zuid Area</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <span
                                class="text-gray-800 fw-bolder d-block mb-1 fs-6"
                                >822</span
                              >
                              <span class="fw-bold text-gray-400 d-block"
                                >Deliveries</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="text-gray-800 fw-bolder text-hover-primary d-block mb-1 fs-6"
                                >$19,842</a
                              >
                              <span class="text-gray-400 fw-bold d-block fs-7"
                                >Earnings</span
                              >
                            </td>
                            <td class="float-end text-end border-0">
                              <div class="rating">
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                                <div class="rating-label checked">
                                  <i class="bi bi-star-fill fs-6s"></i>
                                </div>
                              </div>
                              <span
                                class="text-gray-400 fw-bold d-block fs-7 mt-1"
                                >Rating</span
                              >
                            </td>
                            <td class="text-end">
                              <a
                                href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px"
                              >
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-gray-700"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                  >
                                    <path
                                      d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </a>
                            </td>
                          </tr>
                        </tbody>
                        <!--end::Table body-->
                      </table>
                    </div>
                    <!--end::Table container-->
                  </div>
                  <!--end: Card Body-->
                </div>
                <!--end::Tables widget 13-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-xl-4">

              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Post-->
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {},
  mounted() {},
};
</script>
