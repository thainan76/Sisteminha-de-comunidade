
<template>
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Header Section-->
    <div class="mb-0" id="home">
      <!--begin::Wrapper-->
      <div
        class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
        style="
          background: url(@/assets/vantagens-bg.png) no-repeat center 10.8rem,
            linear-gradient(
              96.37deg,
              #228b3c 0.2%,
              #228b3c 22.59%,
              #798f28 46.48%,
              #f1960f 68.88%,
              #fbb040 95.75%
            );
          background-blend-mode: soft-light;
          background-size: cover;
        "
      >
        <!--begin::Header-->
        <div
          class="landing-header"
          data-kt-sticky="true"
          data-kt-sticky-name="landing-header"
          data-kt-sticky-offset="{default: '200px', lg: '300px'}"
        >
          <!--begin::Container-->
          <div class="container">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center justify-content-between">
              <!--begin::Logo-->
              <div class="d-flex align-items-center flex-equal">
                <!--begin::Mobile menu toggle-->
                <button
                  class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                  id="kt_landing_menu_toggle"
                >
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                  <span class="svg-icon svg-icon-2hx">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                        fill="currentColor"
                      />
                      <path
                        opacity="0.3"
                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </button>
                <!--end::Mobile menu toggle-->
                <!--begin::Logo image-->
                <div
                  class="d-flex flex-row align-items-center justify-content-center"
                >
                  <h1 class="text-white lh-base fw-bolder fs-1x fs-lg-2x">
                    <span
                      style="
                        background: linear-gradient(
                          to right,
                          #12ce5d 0%,
                          #ffd80c 100%
                        );
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                      "
                    >
                      <span id="kt_landing_hero_text">MovimenteSIM</span>
                    </span>
                  </h1>
                </div>
                <!--end::Logo image-->
              </div>
              <!--end::Logo-->
              <!--begin::Menu wrapper-->
              <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div
                  class="d-lg-block p-5 p-lg-0"
                  data-kt-drawer="true"
                  data-kt-drawer-name="landing-menu"
                  data-kt-drawer-activate="{default: true, lg: false}"
                  data-kt-drawer-overlay="true"
                  data-kt-drawer-width="200px"
                  data-kt-drawer-direction="start"
                  data-kt-drawer-toggle="#kt_landing_menu_toggle"
                  data-kt-swapper="true"
                  data-kt-swapper-mode="prepend"
                  data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}"
                >
                  <!--begin::Menu-->
                  <div
                    class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold"
                    id="kt_landing_menu"
                  >
                    <!--begin::Menu item-->
                    <div class="menu-item">
                      <!--begin::Menu link-->
                      <a
                        class="menu-link nav-link active py-3 px-4 px-xxl-6"
                        href="#kt_body"
                        data-kt-scroll-toggle="true"
                        data-kt-drawer-dismiss="true"
                        >Home</a
                      >
                      <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                      <!--begin::Menu link-->
                      <a
                        class="menu-link nav-link py-3 px-4 px-xxl-6"
                        href="#how-it-works"
                        data-kt-scroll-toggle="true"
                        data-kt-drawer-dismiss="true"
                        >Sobre</a
                      >
                      <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                      <!--begin::Menu link-->
                      <a
                        class="menu-link nav-link py-3 px-4 px-xxl-6"
                        href="#team"
                        data-kt-scroll-toggle="true"
                        data-kt-drawer-dismiss="true"
                        >Equipe</a
                      >
                      <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                      <!--begin::Menu link-->
                      <a
                        class="menu-link nav-link py-3 px-4 px-xxl-6"
                        href="#portfolio"
                        data-kt-scroll-toggle="true"
                        data-kt-drawer-dismiss="true"
                        >Produtos</a
                      >
                      <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                      <!--begin::Menu link-->
                      <a
                        class="menu-link nav-link py-3 px-4 px-xxl-6"
                        href="#clients"
                        data-kt-scroll-toggle="true"
                        data-kt-drawer-dismiss="true"
                        >Depoimentos</a
                      >
                      <!--end::Menu link-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <!--<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing"
												data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
										</div>-->
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu-->
                </div>
              </div>
              <!--end::Menu wrapper-->
              <!--begin::Toolbar-->
              <div class="flex-equal text-end ms-1">
                <a
                  href="https://api.whatsapp.com/message/UZUG2BWPZ5WZF1?autoload=1&app_absent=0"
                  class="btn btn-success"
                  target="_blank"
                  >Entre em contato</a
                >
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Landing hero-->
        <div
          class="d-flex flex-row flex-center w-100 min-h-350px min-h-lg-500px px-9"
        >
          <!--begin::Heading-->
          <div class="d-flex flex-column flex-center w-100 d-block d-sm-none">
            <div
              class="d-flex flex-column align-items-center justify-content-center mt-10"
            >
              <h1 class="text-white fw-bold" style="font-size: 28px !important">
                E-commerce de produtos Ortopédico & Fisioterapêuticos
              </h1>
              <span
                class="text-white"
                style="font-size: 14px; color: #ffffffc2 !important"
              >
                O MovimenteSim é uma loja on-line de produtos ortopédicos e
                fisioterapêuticos, que apresenta variedade e qualidade nos
                produtos, além de apresentar facilidade na compra, entrega e
                forma de pagamento!
              </span>
            </div>

            <div
              class="d-flex flex-row align-items-center justify-content-center"
            >
              <div>
                <img src="@/assets/_img/foto_capa.png" style="height: 420px" />
              </div>
            </div>
          </div>

          <div
            class="text-center mb-5 mb-lg-10 py-10 py-lg-20 d-none d-lg-block"
            style="width: 40%"
          >
            <!--begin::Title-->
            <h1 class="text-white text-start fw-bold fs-2x fs-lg-3x mb-10">
              E-commerce de produtos <br />
              Ortopédico & Fisioterapêuticos

              <!--<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">The Best Theme Ever</span>
							</span>-->
            </h1>
            <span
              class="text-white text-start"
              style="font-size: 14px; line-height: 1"
            >
              O MovimenteSim é uma loja on-line de produtos ortopédicos e
              fisioterapêuticos, que apresenta variedade e qualidade nos
              produtos, além de apresentar facilidade na compra, entrega e forma
              de pagamento!
            </span>
            <!--end::Title-->
            <!--begin::Action-->
            <!--<a href="../../demo1/dist/index.html" class="btn btn-primary">Try </a>-->
            <!--end::Action-->
          </div>
          <div
            class="text-center mb-5 mb-lg-10 py-10 py-lg-20 d-none d-lg-block"
            style="width: 40%"
          >
            <img src="@/assets/_img/foto_capa.png" />
          </div>

          <!--end::Heading-->
          <!--begin::Clients-->
          <!-- <div class="d-flex flex-center flex-wrap position-relative px-5">
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
							<img src="@/assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
							<img src="@/assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
							<img src="@/assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
							<img src="@/assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
							<img src="@/assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px"
								alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
							title="AON - Empower Results">
							<img src="@/assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
							<img src="@/assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
						<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
							<img src="@/assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt="" />
						</div>
					</div> -->
          <!--end::Clients-->
        </div>
        <!--end::Landing hero-->
      </div>
      <!--end::Wrapper-->
      <!--begin::Curve bottom-->
      <!--<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
				<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
						fill="currentColor"></path>
				</svg>
			</div>-->
      <!--end::Curve bottom-->
    </div>
    <!--end::Header Section-->
    <!--begin::How It Works Section-->
    <div class="mb-n10 mb-lg-n20 z-index-2">
      <!--begin::Container-->
      <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17 mt-15">
          <!--begin::Title-->
          <h3
            class="fs-3hx text-dark mb-5"
            id="how-it-works"
            data-kt-scroll-offset="{default: 100, lg: 150}"
          >
            Porque utilizar e comprar com o MovimentoSim?
          </h3>
          <!--end::Title-->
          <!--begin::Text-->
          <div class="fs-5 text-muted fw-bold">
            No MovimenteSim temos produtos de diversos segmentos, como
            dispositivos de auxílio à marcha (andadores, bengalas e muletas),
            materiais para exercícios (bola, elástico, caneleira), exercitadores
            respiratórios (respiron, shaker) e órteses de Neoprene (joelheira,
            suporte para bolsa de gel, coxal)
            <br /><br />
            Isso significa que os produtos MovimenteSim são para fisioterapeutas
            e profissionais que trabalham com o movimento, pessoas que gostam de
            fazer exercício, pacientes/clientes dos profissionais citados.
            <br />
          </div>
          <!--end::Text-->
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div
          class="row d-flex flex-row align-items-center justify-content-center w-100 gy-10 mb-md-20"
        >
          <!--begin::Col-->
          <div class="col-md-3 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
              <!--begin::Illustration-->
              <svg
                width="150"
                height="150"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <rect
                  width="24"
                  height="24"
                  stroke="none"
                  fill="#000000"
                  opacity="0"
                />

                <g transform="matrix(0.2 0 0 0.2 12 12)">
                  <g style="">
                    <g transform="matrix(1 0 0 1 27 -37)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(241, 188, 25);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-77, -13)"
                        d="M 77 12 C 76.44771525016921 12 76 12.447715250169207 76 13 C 76 13.552284749830793 76.44771525016921 14 77 14 C 77.55228474983079 14 78 13.552284749830793 78 13 C 78 12.447715250169207 77.55228474983079 12 77 12 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 0)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(230, 237, 183);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-50, -50)"
                        d="M 50 13 C 29.565464256260643 13 13 29.565464256260643 13 50 C 13 70.43453574373936 29.565464256260643 87 50 87 C 70.43453574373936 87 87 70.43453574373936 87 50 C 87 29.56546425626064 70.43453574373936 13 50 13 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 33 -35)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(241, 188, 25);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-83, -15)"
                        d="M 83 11 C 80.79086100067683 11 79 12.790861000676827 79 15 C 79 17.209138999323173 80.79086100067683 19 83 19 C 85.20913899932317 19 87 17.209138999323173 87 15 C 87 12.790861000676827 85.20913899932317 11 83 11 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 37 -26)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(136, 174, 69);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-87, -24)"
                        d="M 87 22 C 85.8954305003384 22 85 22.895430500338414 85 24 C 85 25.104569499661586 85.8954305003384 26 87 26 C 88.1045694996616 26 89 25.104569499661586 89 24 C 89 22.895430500338414 88.1045694996616 22 87 22 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -3 18.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(251, 205, 89);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-47, -68.5)"
                        d="M 81 74 C 79.8954305003384 74 79 74.8954305003384 79 76 C 79 77.1045694996616 79.8954305003384 78 81 78 C 82.1045694996616 78 83 77.1045694996616 83 76 C 83 74.8954305003384 82.1045694996616 74 81 74 z M 15 59 C 12.790861000676827 59 11 60.79086100067683 11 63 C 11 65.20913899932317 12.790861000676827 67 15 67 C 17.209138999323173 67 19 65.20913899932317 19 63 C 19 60.79086100067683 17.209138999323173 59 15 59 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -25 37)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(136, 174, 69);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-25, -87)"
                        d="M 25 85 C 23.895430500338414 85 23 85.8954305003384 23 87 C 23 88.1045694996616 23.895430500338414 89 25 89 C 26.104569499661586 89 27 88.1045694996616 27 87 C 27 85.8954305003384 26.104569499661586 85 25 85 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -1.5 -7)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(255, 255, 255);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-48.5, -43)"
                        d="M 18.5 49 C 17.119288125423015 49 16 50.11928812542302 16 51.5 C 16 52.88071187457698 17.119288125423015 54 18.5 54 C 19.880711874576985 54 21 52.88071187457698 21 51.5 C 21 50.11928812542302 19.880711874576985 49 18.5 49 z M 79.5 32 C 78.67157287525382 32 78 32.67157287525381 78 33.5 C 78 34.32842712474619 78.67157287525382 35 79.5 35 C 80.32842712474618 35 81 34.32842712474619 81 33.5 C 81 32.67157287525381 80.32842712474618 32 79.5 32 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.01 7.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(189, 151, 124);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-49.99, -57.5)"
                        d="M 72.25 40.761 L 72.25 42.398 L 72.25 69.18 C 72.25 71.96700000000001 70.019 74.248 67.292 74.248 L 32.685 74.248 C 29.958000000000002 74.248 27.727000000000004 71.967 27.727000000000004 69.18 L 27.727000000000004 42.347 L 27.727000000000004 40.761"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.01 7.85)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-49.99, -57.85)"
                        d="M 67.292 74.947 L 32.685 74.947 C 29.565 74.947 27.027 72.35900000000001 27.027 69.179 L 27.027 40.761 L 28.427 40.761 L 28.427 69.18 C 28.427 71.58800000000001 30.337 73.54700000000001 32.684 73.54700000000001 L 67.292 73.54700000000001 C 69.64 73.54700000000001 71.549 71.58800000000001 71.549 69.18 L 71.549 40.761 L 72.94900000000001 40.761 L 72.94900000000001 69.18 C 72.95 72.359 70.412 74.947 67.292 74.947 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 14.03 -2.59)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(238, 62, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-64.03, -47.41)"
                        d="M 61.768 44.199 L 61.768 50.617 L 64.034 48.73 L 66.3 50.617 L 66.3 44.199 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 14 -2.18)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-64, -47.81)"
                        d="M 67 51.63 L 64.03 49.357 L 61 51.613 L 61 44 L 67 44 L 67 51.63 z M 62 45 L 62 49.621 L 64.038 48.102000000000004 L 66 49.604 L 66 45 L 62 45 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 -12.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(246, 204, 164);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-50, -37.5)"
                        d="M 29.3 44.3 C 27.315 44.3 25.7 42.452999999999996 25.7 40.184 L 25.7 30.7 L 74.3 30.7 L 74.3 40.183 C 74.3 42.453 72.685 44.299 70.7 44.299 L 29.3 44.299 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 -12.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-50, -37.5)"
                        d="M 73.6 31.4 L 73.6 40.184 C 73.6 42.068 72.29899999999999 43.601 70.69999999999999 43.601 L 29.3 43.601 C 27.701 43.601 26.400000000000002 42.068 26.400000000000002 40.184 L 26.400000000000002 31.4 L 73.6 31.4 M 74.748 30 L 25.412 30 C 25.185 30 25 30.208 25 30.461 L 25 40.183 C 25 42.833 26.935 45 29.3 45 L 70.7 45 C 73.065 45 75 42.833 75 40.184 L 75 30.281999999999996 C 75 30.126 74.887 30 74.748 30 L 74.748 30 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 14.03 -3.37)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-64.03, -46.63)"
                        d="M 64.035 48.875 C 63.901999999999994 48.875 63.793 48.766 63.793 48.633 L 63.793 44.634 C 63.793 44.501 63.902 44.392 64.035 44.392 C 64.16799999999999 44.392 64.277 44.501000000000005 64.277 44.634 L 64.277 48.633 C 64.277 48.766 64.168 48.875 64.035 48.875 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 15.09 -1.86)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-65.09, -48.14)"
                        d="M 66.008 49.043 C 65.978 49.043 65.94699999999999 49.032 65.922 49.012 L 64.091 47.478 C 64.03399999999999 47.431000000000004 64.026 47.346000000000004 64.074 47.289 C 64.12 47.231 64.206 47.226 64.26299999999999 47.272 L 66.094 48.806 C 66.151 48.852999999999994 66.15899999999999 48.937999999999995 66.11099999999999 48.995 C 66.085 49.025 66.047 49.043 66.008 49.043 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 15.09 -3.23)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-65.09, -46.77)"
                        d="M 66.008 47.667 C 65.978 47.667 65.94699999999999 47.656 65.922 47.636 L 64.091 46.102000000000004 C 64.03399999999999 46.05500000000001 64.026 45.970000000000006 64.074 45.913000000000004 C 64.12 45.856 64.206 45.85 64.26299999999999 45.896 L 66.094 47.43 C 66.151 47.477 66.15899999999999 47.562 66.11099999999999 47.619 C 66.085 47.651 66.047 47.667 66.008 47.667 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 10.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-50, -60.5)"
                        d="M 65.188 71 L 34.813 71 C 32.71 71 31 69.29 31 67.188 L 31 50.5 C 31 50.224 31.224 50 31.5 50 C 31.776 50 32 50.224 32 50.5 L 32 67.188 C 32 68.738 33.262 70 34.813 70 L 65.188 70 C 66.738 70 68 68.738 68 67.188 L 68 62.5 C 68 62.224 68.224 62 68.5 62 C 68.776 62 69 62.224 69 62.5 L 69 67.188 C 69 69.29 67.29 71 65.188 71 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 15.33 -4.3)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-65.33, -45.7)"
                        d="M 66.241 46.598 C 66.211 46.598 66.17999999999999 46.586999999999996 66.155 46.567 L 64.324 45.033 C 64.267 44.986000000000004 64.259 44.901 64.307 44.844 C 64.354 44.787 64.43900000000001 44.779 64.496 44.827 L 66.327 46.361 C 66.384 46.407999999999994 66.392 46.492999999999995 66.344 46.55 C 66.318 46.581 66.279 46.598 66.241 46.598 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.5 15.26)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-49.5, -65.26)"
                        d="M 49.5 70.75 C 49.224 70.75 49 70.526 49 70.25 L 49 60.272 C 49 59.995999999999995 49.224 59.772 49.5 59.772 C 49.776 59.772 50 59.995999999999995 50 60.272 L 50 70.25 C 50 70.526 49.776 70.75 49.5 70.75 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.5 -1.38)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-49.5, -48.63)"
                        d="M 49.5 50.5 C 49.224 50.5 49 50.276 49 50 L 49 47.25 C 49 46.974 49.224 46.75 49.5 46.75 C 49.776 46.75 50 46.974 50 47.25 L 50 50 C 50 50.276 49.777 50.5 49.5 50.5 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 18.5 8)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-68.5, -58)"
                        d="M 68.5 60 C 68.224 60 68 59.776 68 59.5 L 68 56.5 C 68 56.224 68.224 56 68.5 56 C 68.776 56 69 56.224 69 56.5 L 69 59.5 C 69 59.776 68.776 60 68.5 60 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.87 2.59)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(253, 252, 238);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-49.13, -52.59)"
                        d="M 54.022 54.625 L 44.229 54.625 C 43.278999999999996 54.625 42.501 53.712 42.501 52.594 L 42.501 52.594 C 42.501 51.477000000000004 43.278 50.563 44.229 50.563 L 54.022 50.563 C 54.972 50.563 55.75 51.476 55.75 52.594 L 55.75 52.594 C 55.75 53.71 54.972 54.625 54.022 54.625 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.83 2.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-49.17, -52.5)"
                        d="M 53.832 55 L 44.5 55 C 43.122 55 42 53.879 42 52.5 C 42 51.121 43.122 50 44.5 50 L 53.832 50 C 55.21 50 56.332 51.121 56.332 52.5 C 56.332 53.879 55.21 55 53.832 55 z M 44.5 51 C 43.673 51 43 51.673 43 52.5 C 43 53.327 43.673 54 44.5 54 L 53.832 54 C 54.659 54 55.332 53.327 55.332 52.5 C 55.332 51.673 54.659 51 53.832 51 L 44.5 51 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -9.5 13)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-40.5, -63)"
                        d="M 37.5 65.5 C 37.224 65.5 37 65.276 37 65 L 37 59 C 37 58.724 37.224 58.5 37.5 58.5 C 37.776 58.5 38 58.724 38 59 L 38 65 C 38 65.276 37.777 65.5 37.5 65.5 z M 46.001 67.5 L 35 67.5 C 34.724 67.5 34.5 67.276 34.5 67 C 34.5 66.724 34.724 66.5 35 66.5 L 46.001 66.5 C 46.277 66.5 46.501 66.724 46.501 67 C 46.501 67.276 46.277 67.5 46.001 67.5 z M 43.5 65.5 C 43.224 65.5 43 65.276 43 65 L 43 59 C 43 58.724 43.224 58.5 43.5 58.5 C 43.776 58.5 44 58.724 44 59 L 44 65 C 44 65.276 43.777 65.5 43.5 65.5 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -9.5 9)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(71, 43, 41);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-40.5, -59)"
                        d="M 37.5 57 L 35 61 L 40 61 z M 43.5 57 L 41 61 L 46 61 z"
                        stroke-linecap="round"
                      />
                    </g>
                  </g>
                </g>
              </svg>
              <!--end::Illustration-->
              <!--begin::Heading-->
              <div class="d-flex flex-center mb-5">
                <!--begin::Badge-->
                <span
                  class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3"
                >
                  <span class="material-symbols-outlined"> check </span>
                </span>
                <!--end::Badge-->
                <!--begin::Title-->
                <div class="fs-5 fs-lg-3 fw-bolder text-dark">
                  Produtos de qualidade
                </div>
                <!--end::Title-->
              </div>
              <!--end::Heading-->
              <!--begin::Description-->
              <div class="fw-bold fs-6 fs-lg-4 text-muted">
                Adquirir produtos de alta qualidade
              </div>
              <!--end::Description-->
            </div>
            <!--end::Story-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-md-3 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
              <!--begin::Illustration-->
              <svg
                width="150"
                height="150"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <rect
                  width="24"
                  height="24"
                  stroke="none"
                  fill="#000000"
                  opacity="0"
                />
                <g transform="matrix(0.31 0 0 0.31 12 12)">
                  <g style="">
                    <g transform="matrix(1 0 0 1 0 -20)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(206, 216, 237);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32, -12)"
                        d="M 56 17 L 8 17 L 8 9 C 8 7.895 8.895 7 10 7 L 54 7 C 55.105 7 56 7.895 56 9 L 56 17 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 10)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(250, 239, 222);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32, -42)"
                        d="M 56 27 L 8 27 L 8 57 L 56 57 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0.01 -7)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(237, 120, 153);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32.01, -25)"
                        d="M 56.015 17 L 59.839 28.235 C 60.035 28.823 60.061 29.462 59.866 30.05 C 59.473 31.234 58.281 33 55.015 33 C 51.015 33 49.015 29 47.015 29 C 45.015 29 45.015 33 40.015 33 C 36.026 33 34.002 29.023 32.007000000000005 29 C 30.013000000000005 29.023 27.988000000000007 33 23.999000000000006 33 C 18.999000000000006 33 18.999000000000006 29 16.999000000000006 29 C 14.999000000000006 29 12.999000000000006 33 8.999000000000006 33 C 5.733000000000006 33 4.541000000000006 31.234 4.148000000000006 30.05 C 3.953000000000006 29.462 3.979000000000006 28.823 4.175000000000006 28.235 L 8 17 L 56.015 17 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0.01 -12.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(242, 131, 165);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32.01, -19.5)"
                        d="M 57.717 22 L 56.015 17 L 8 17 L 6.298 22 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 20)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(239, 216, 190);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32, -52)"
                        d="M 8 47 L 56 47 L 56 55 C 56 56.105 55.105 57 54 57 L 10 57 C 8.895 57 8 56.105 8 55 L 8 47 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19 -20)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(237, 120, 153);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-13, -12)"
                        d="M 13 10 C 11.895430500338414 10 11 10.895430500338414 11 12 C 11 13.104569499661586 11.895430500338414 14 13 14 C 14.104569499661586 14 15 13.104569499661586 15 12 C 15 10.895430500338414 14.104569499661586 10 13 10 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -13 -20)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(255, 235, 155);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-19, -12)"
                        d="M 19 10 C 17.895430500338414 10 17 10.895430500338414 17 12 C 17 13.104569499661586 17.895430500338414 14 19 14 C 20.104569499661586 14 21 13.104569499661586 21 12 C 21 10.895430500338414 20.104569499661586 10 19 10 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -7 -20)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(114, 202, 175);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-25, -12)"
                        d="M 25 10 C 23.895430500338414 10 23 10.895430500338414 23 12 C 23 13.104569499661586 23.895430500338414 14 25 14 C 26.104569499661586 14 27 13.104569499661586 27 12 C 27 10.895430500338414 26.104569499661586 10 25 10 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -10 15)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(249, 221, 143);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-22, -47)"
                        d="M 17 37 L 27 37 C 27.552 37 28 37.448 28 38 L 28 57 L 16 57 L 16 38 C 16 37.448 16.448 37 17 37 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 10 10)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(187, 222, 249);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-42, -42)"
                        d="M 37 37 L 47 37 C 47.552 37 48 37.448 48 38 L 48 46 C 48 46.552 47.552 47 47 47 L 37 47 C 36.448 47 36 46.552 36 46 L 36 38 C 36 37.448 36.448 37 37 37 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0.01 4.99)">
                      <path
                        style="
                          stroke: rgb(141, 108, 159);
                          stroke-width: 2;
                          stroke-dasharray: none;
                          stroke-linecap: round;
                          stroke-dashoffset: 0;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                          fill: none;
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32.01, -36.99)"
                        d="M 56.015 17 L 59.839 28.235 C 60.035 28.823 60.061 29.462 59.866 30.05 C 59.473 31.234 58.281 33 55.015 33 C 51.015 33 49.015 29 47.015 29 C 45.015 29 45.015 33 40.015 33 C 36.026 33 34.002 29.023 32.007000000000005 29 C 30.013000000000005 29.023 27.988000000000007 33 23.999000000000006 33 C 18.999000000000006 33 18.999000000000006 29 16.999000000000006 29 C 14.999000000000006 29 12.999000000000006 33 8.999000000000006 33 C 5.733000000000006 33 4.541000000000006 31.234 4.148000000000006 30.05 C 3.953000000000006 29.462 3.979000000000006 28.823 4.175000000000006 28.235 L 8 17 M 32 22 L 32 29 M 18.716 16.993 L 17 25 M 45.283 16.988 L 47 25 M 47 47 L 37 47 C 36.448 47 36 46.552 36 46 L 36 38 C 36 37.448 36.448 37 37 37 L 47 37 C 47.552 37 48 37.448 48 38 L 48 46 C 48 46.552 47.552 47 47 47 z M 16 57 L 16 38 C 16 37.448 16.448 37 17 37 L 27 37 C 27.552 37 28 37.448 28 38 L 28 57 M 12 51 L 12 53 M 24 46 L 24 48 M 32 51 L 32 53 M 37 51 L 37 53 M 42 51 L 42 53 M 47 51 L 47 53 M 52 51 L 52 53"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 0 0)">
                      <path
                        style="
                          stroke: rgb(141, 108, 159);
                          stroke-width: 2;
                          stroke-dasharray: none;
                          stroke-linecap: round;
                          stroke-dashoffset: 0;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                          fill: none;
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-32, -32)"
                        d="M 56 17 L 8 17 L 8 9 C 8 7.895 8.895 7 10 7 L 54 7 C 55.105 7 56 7.895 56 9 L 56 17 z M 56 33 L 56 55 C 56 56.105 55.105 57 54 57 L 10 57 C 8.895 57 8 56.105 8 55 L 8 33 M 8 47 L 15.836 47 M 28 47 L 32 47 M 52 47 L 56 47"
                        stroke-linecap="round"
                      />
                    </g>
                  </g>
                </g>
              </svg>
              <!--end::Illustration-->
              <!--begin::Heading-->
              <div class="d-flex flex-center mb-5">
                <!--begin::Badge-->
                <span
                  class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3"
                >
                  <span class="material-symbols-outlined"> check </span>
                </span>
                <!--end::Badge-->
                <!--begin::Title-->
                <div class="fs-5 fs-lg-3 fw-bolder text-dark">
                  Facilitar na compra e na consulta online
                </div>
                <!--end::Title-->
              </div>
              <!--end::Heading-->
              <!--begin::Description-->
              <div class="fw-bold fs-6 fs-lg-4 text-muted">
                Compras realizadas com facilidade através do WhatsApp/Loja
              </div>
              <!--end::Description-->
            </div>
            <!--end::Story-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-md-3 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
              <!--begin::Illustration-->
              <svg
                width="150"
                height="150"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <rect
                  width="24"
                  height="24"
                  stroke="none"
                  fill="#000000"
                  opacity="0"
                />
                <g transform="matrix(0.42 0 0 0.42 12 12)">
                  <g style="">
                    <g transform="matrix(1 0 0 1 -16.34 19.2)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(237, 34, 36);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-7.66, -43.2)"
                        d="M 10.08 42.78 C 10.43 42.99 10.82 43.28 10.81 43.69 C 10.781107646995222 44.01696034429986 10.561232570062172 44.29573053112569 10.25 44.4 C 9.944913928960638 44.48798792953966 9.62676916116097 44.52183311760346 9.31 44.5 C 8.27 44.47 7.24 44.44 6.210000000000001 44.41 C 5.941722568534174 44.41576968197441 5.674463301898775 44.37517333767536 5.420000000000001 44.29 C 4.940261407640599 44.030959015913695 4.626918524459635 43.5439562215722 4.59 43 C 4.538124613204329 42.64886593530103 4.508066966134125 42.29485364758532 4.499999999999998 41.94 C 5.63 42.04 7.08 42.16 8.2 42.16 C 8.278224796836989 42.16783337091443 8.35658327103546 42.14646287795121 8.42 42.099999999999994 C 8.424782232820686 42.03268068096858 8.418018093365111 41.965039286412825 8.4 41.89999999999999 C 8.975166537803615 42.16342056833032 9.535954457890101 42.45716662170895 10.080000000000005 42.78 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -7.59 17.47)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(197, 101, 40);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-16.41, -41.47)"
                        d="M 16.12 38.44 C 16.880000000000003 38.33 17.57 40 17.830000000000002 40.699999999999996 C 17.785868930068734 40.70416749695219 17.744033709799318 40.72159883873111 17.71 40.74999999999999 C 17.675312400335432 40.80406245233428 17.65468739166892 40.86593747833383 17.650000000000002 40.92999999999999 C 17.590000000000003 41.63999999999999 17.560000000000002 42.349999999999994 17.570000000000004 43.059999999999995 C 17.563365831076666 43.292466817414066 17.604197373574603 43.5238455582357 17.690000000000005 43.739999999999995 C 17.66726805187986 43.79200112100756 17.64052050309506 43.84215277497905 17.610000000000007 43.88999999999999 C 17.399885307604098 44.25753540714218 17.01320758200066 44.48878385088541 16.590000000000007 44.49999999999999 C 16.304041458315606 44.472954733127466 16.03256052239037 44.36157793890173 15.810000000000008 44.17999999999999 C 15.513484399924108 43.994022141970355 15.285379051424753 43.71678641071729 15.160000000000007 43.38999999999999 C 15.098340369788406 43.14844728813058 15.08139472141428 42.89765169219355 15.110000000000007 42.64999999999999 C 15.138461955827301 42.05292584308008 15.121747667892894 41.45455433502828 15.060000000000006 40.85999999999999 C 14.957240585403868 40.37877091223671 14.981362981459243 39.87909270823253 15.130000000000006 39.40999999999999 C 15.252866317417974 39.16001250411328 15.422608286504598 38.93595310491894 15.630000000000006 38.74999999999999 C 15.752766591740802 38.593328917617114 15.925844544798947 38.48383062078441 16.12 38.44 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 2.18 15.32)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(192, 230, 237);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-26.18, -39.32)"
                        d="M 30.61 37.65 C 31.656939212551915 39.61809146323549 33.080604333045585 41.36114684942464 34.800000000000004 42.78 C 34.63104221575911 42.993844973631866 34.432363309856804 43.18242156228491 34.209999999999994 43.34 C 33.701133218344246 43.65399519566959 33.13234427834655 43.85835050345319 32.53999999999999 43.940000000000005 C 30.66368857510147 44.182111501112765 28.77060611407058 44.26907288624846 26.879999999999992 44.2 C 24.129999999999992 44.24 21.359999999999992 44.28 18.609999999999992 44.160000000000004 C 18.336298568295938 44.17184199534415 18.066131859566905 44.09465150713586 17.839999999999993 43.940000000000005 C 17.77839492820616 43.8828824067815 17.727583469387486 43.815133795023264 17.689999999999994 43.74 C 17.604197373574593 43.523845558235706 17.563365831076656 43.29246681741407 17.569999999999993 43.06 C 17.55999999999999 42.35 17.589999999999993 41.64 17.64999999999999 40.93 C 17.654687391668908 40.865937478333834 17.67531240033542 40.804062452334286 17.70999999999999 40.75 C 17.744033709799307 40.72159883873112 17.785868930068723 40.704167496952195 17.82999999999999 40.7 C 17.862654423174835 40.6917342380694 17.89635541452552 40.68836413893433 17.929999999999993 40.690000000000005 C 18.48999999999999 40.67 19.039999999999992 40.660000000000004 19.599999999999994 40.64000000000001 C 20.10651535494337 38.93815699617359 20.968894801553603 37.363377137146216 22.129999999999995 36.02000000000002 C 23.29443870239044 34.71518465712755 25.071124772322882 34.13823928818175 26.779999999999994 34.51000000000001 C 27.504306112990193 34.80457812210042 28.212021964374863 35.13840635388565 28.89999999999999 35.51000000000001 C 29.419637314541003 35.68674277680869 29.91909058147261 35.918033215857555 30.38999999999999 36.20000000000001 C 30.31493087998532 36.38710235154745 30.28412905370395 36.58902543494755 30.299999999999994 36.79000000000001 C 30.341432137271674 37.0953442106788 30.447085134857474 37.38844607494907 30.61 37.65 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -17.83 9.03)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(188, 188, 188);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-6.17, -33.03)"
                        d="M 8.05 40.23 C 8.06 40.3 8.32 41.419999999999995 8.4 41.88999999999999 L 8.4 41.89999999999999 C 8.418018093365111 41.965039286412825 8.424782232820686 42.03268068096858 8.42 42.099999999999994 C 8.35658327103546 42.14646287795121 8.278224796836989 42.16783337091443 8.2 42.16 C 7.079999999999999 42.16 5.629999999999999 42.04 4.499999999999999 41.94 C 4.469999999999999 41.94 4.429999999999999 41.93 4.3999999999999995 41.93 C 4.4399999999999995 38.82 4.47 35.72 4.51 32.62 C 4.60022291819049 31.120004344190097 4.45513407811765 29.615129398318302 4.08 28.159999999999997 C 3.79 27.479999999999997 3.18 27.429999999999996 3 26.729999999999997 C 2.717631459043275 25.948043661718255 2.7176314590432753 25.091956338281737 3 24.309999999999995 C 3.065235662232864 24.16590536517566 3.1386898409709483 24.025674660312042 3.219999999999999 23.889999999999993 C 5.109323335442624 25.31903927957599 7.2595795257656555 26.365293476447228 9.549999999999994 26.96999999999999 C 9.46 27.449999999999992 9.34 27.91999999999999 9.23 28.409999999999993 C 9.08 29.129999999999992 8.85 29.679999999999993 8.72 30.409999999999993 C 8.4917195946381 31.39969464369225 8.318123345451388 32.401211465923275 8.199999999999998 33.41000000000002 C 8.15 36.43 7.53 37.23 8.05 40.23 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 17.85 13.58)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(56, 180, 123);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-41.85, -37.58)"
                        d="M 42.32 36.23 C 42.8883048554092 38.22519980311063 43.624258519974255 40.16878652634831 44.52000000000001 42.040000000000006 C 44.09671012552272 42.321083635817715 43.65201120329925 42.56851010382175 43.190000000000005 42.78 L 43.18000000000001 42.79 C 42.900000000000006 42.89 42.70000000000001 43.19 42.440000000000005 43.03 C 42.23289805281293 42.80945515044977 42.06392526605134 42.55599597030739 41.940000000000005 42.28 C 40.8179132784715 40.29849998020266 39.90948347223251 38.20341278869209 39.230000000000004 36.03 L 39.17 35.85 C 39.57 35.230000000000004 40 34.63 40.45 34.050000000000004 C 40.9054419216783 33.52934829677077 41.27354210939027 32.938361756866236 41.540000000000006 32.300000000000004 C 41.569282118855114 32.228694059514375 41.59269323083002 32.15511627902181 41.61000000000001 32.080000000000005 C 41.70599934477268 33.483750294829214 41.9438790833109 34.87417411867937 42.31999999999999 36.22999999999999 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 10.07 11.36)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(56, 180, 123);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-34.07, -35.36)"
                        d="M 28.45 27.61 C 30.981232174617322 28.20747520714768 33.59811788454562 28.353045822318336 36.17999999999999 28.04 C 36.79280581278156 27.945375379848137 37.41044719588644 27.885280542573064 38.029999999999994 27.859999999999996 C 38.387837282095745 28.605370646966175 39.213887221751385 29.00386710026739 40.02 28.82 C 40.25 28.79 40.480000000000004 28.76 40.71 28.72 C 40.86 28.82 41 28.919999999999998 41.14 29.029999999999998 C 41.331615035147664 29.163138657895523 41.49478996440266 29.33311254253615 41.62 29.529999999999998 C 41.73659305122125 29.807852851982226 41.78461145130149 30.109682795343694 41.76 30.409999999999997 C 41.78053389798851 30.96083717630046 41.730120146773714 31.512027522915595 41.61 32.05 L 41.61 32.08 C 41.592693230830015 32.155116279021804 41.56928211885511 32.22869405951437 41.54 32.3 C 41.27354210939026 32.93836175686623 40.905441921678296 33.52934829677076 40.449999999999996 34.05 C 39.99999999999999 34.629999999999995 39.56999999999999 35.23 39.169999999999995 35.849999999999994 C 37.84054153905719 37.891918949612375 36.7722175222964 40.092397663380666 35.989999999999995 42.4 C 35.87 42.75999999999999 35.60999999999999 43.19999999999999 35.24999999999999 43.08999999999999 C 35.159917777548145 43.063284414403704 35.077596007839894 43.01526338207389 35.00999999999999 42.94999999999999 C 34.93999999999999 42.889999999999986 34.86999999999999 42.82999999999999 34.79999999999999 42.77999999999999 C 33.08060433304558 41.36114684942463 31.656939212551904 39.61809146323547 30.609999999999992 37.64999999999999 C 30.447085134857463 37.38844607494905 30.341432137271667 37.09534421067878 30.29999999999999 36.789999999999985 C 30.284129053703946 36.58902543494752 30.314930879985315 36.38710235154742 30.38999999999999 36.19999999999998 C 30.55222618172072 35.81909396240185 30.771394794917132 35.46505235646918 31.03999999999999 35.149999999999984 C 32.00955951230783 33.88239958699163 32.834663430258956 32.51058047137371 33.499999999999986 31.059999999999988 C 32.33161459403444 30.950308884372138 31.17637212798043 30.729305977822676 30.049999999999986 30.399999999999984 C 29.519999999999985 30.259999999999984 28.989999999999988 30.119999999999983 28.449999999999985 29.979999999999983 C 27.706708929500973 29.82702019675464 27.002382594854573 29.524193898283478 26.379999999999985 29.089999999999982 L 26.439999999999984 29.089999999999982 C 27.13 29.07 28.35 28.41 28.45 27.61 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 20.44 19.29)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(252, 191, 149);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.44, -43.29)"
                        d="M 45.96 43.92 C 45.511541327049784 44.3692668421814 44.87924159366487 44.58373107923593 44.25 44.5 C 43.79 44.5 42.79 44.75 42.7 43.87 C 42.68675840465537 43.45560442434444 42.863534173767 43.05785894384328 43.18 42.79 L 43.19 42.78 C 43.652011203299246 42.56851010382175 44.096710125522705 42.321083635817715 44.519999999999996 42.04 C 44.951069403853694 42.07481186137994 45.35870305962468 42.250516023350194 45.67999999999999 42.54 C 45.93572719926963 42.68531326667414 46.11753991547789 42.932578560717374 46.17999999999999 43.22 C 46.20300150903673 43.47334065949702 46.123793442636895 43.72536632531469 45.96 43.92 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 2.11 3.09)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(252, 191, 149);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-26.11, -27.09)"
                        d="M 27.69 25.84 C 27.76870422597052 26.1185269689346 27.879443950881928 26.38698690811377 28.02 26.64 C 28.157896173784263 26.806040461324745 28.281661034211034 26.98332526139552 28.39 27.169999999999998 C 28.4482998774001 27.30885071594133 28.468994213510737 27.460609180752652 28.45 27.610000000000003 C 28.349999999999998 28.410000000000004 27.13 29.070000000000004 26.439999999999998 29.090000000000003 L 26.38 29.090000000000003 C 25.52 29.080000000000002 24.669999999999998 28.220000000000002 24.14 27.640000000000004 C 23.946012335136913 27.463693383908847 23.81590076616714 27.22808594820683 23.77 26.970000000000002 C 23.73 26.51 24.18 26.150000000000002 24.63 26.080000000000002 C 25.08120810301842 26.05839535750826 25.533446114361748 26.08184473587421 25.979999999999997 26.150000000000002 C 26.07629499388553 26.169604048936595 26.17644157397173 26.151720731064056 26.26 26.1 C 26.48 25.96 26.35 25.62 26.430000000000003 25.37 C 26.498387403497894 25.242119351162792 26.615086528687637 25.14690743136235 26.75409180841321 25.105581537389885 C 26.893097088138784 25.064255643417415 27.042857498175266 25.080249863556006 27.17 25.150000000000002 C 27.422140992103404 25.30838722633827 27.60722267710024 25.55397638527638 27.69 25.84 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -5.04 -0.36)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(252, 191, 149);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-18.96, -23.64)"
                        d="M 20.32 23.05 C 20.12 23.61 20.830000000000002 23.96 20.98 24.43 C 21.06158389747258 24.680556818622772 21.027053420868853 24.954453351717433 20.88583471912571 25.176921169531973 C 20.74461601738257 25.399388987346512 20.51145496599762 25.547198286014833 20.25 25.58 C 19.08 25.97 18.12 25.11 17.38 24.299999999999997 C 17.09690809416452 24.09703704606694 16.844343920154543 23.854575439017363 16.63 23.58 C 16.66 23.58 16.689999999999998 23.569999999999997 16.709999999999997 23.569999999999997 C 16.8430224263956 23.542835310169576 16.97114925724312 23.495630688278386 17.089999999999996 23.429999999999996 C 17.578935976952604 23.171749979723966 18.01890566244588 22.82992737791765 18.389999999999997 22.419999999999995 C 18.522656936728286 22.29095367091215 18.61030379206417 22.122671708667248 18.639999999999997 21.939999999999994 L 18.639999999999997 21.919999999999995 C 18.92044156924008 22.0081680410643 19.221684398882335 22.00466521746381 19.499999999999996 21.909999999999993 C 20.309999999999995 21.499999999999993 21.499999999999996 21.409999999999993 21.249999999999996 22.159999999999993 C 21.03 22.81 20.58 22.63 20.32 23.05 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 16.73 1.08)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(252, 191, 149);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-40.73, -25.08)"
                        d="M 43.51 23.36 C 43.623657375005855 23.77056978550564 43.68415154006404 24.194028940912947 43.69 24.62 C 43.6252269767136 25.365948217041964 43.40009345713091 26.08910437085303 43.03 26.740000000000002 C 42.836222722744054 27.220992134699422 42.55478187162993 27.66180310632397 42.2 28.040000000000003 C 41.776003403864976 28.400455954120112 41.26011622085947 28.63589440005551 40.71 28.720000000000002 C 40.480000000000004 28.76 40.25 28.790000000000003 40.02 28.820000000000004 C 39.213887221751385 29.003867100267392 38.387837282095745 28.60537064696618 38.03 27.860000000000003 C 37.39 26.520000000000003 38 24.160000000000004 38.74 23.010000000000005 C 39.16941276818654 22.26311996532237 39.84970812795771 21.692663960514256 40.660000000000004 21.400000000000006 C 41.48157940696262 21.12505678141638 42.38792156361989 21.369375101906602 42.96 22.020000000000007 C 43.23828028508697 22.42152807128058 43.42594676926542 22.878751869097172 43.51 23.36 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -11 -15.3)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(252, 191, 149);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-13, -8.7)"
                        d="M 15.87 6.35 C 16.28015991506371 7.215200094024118 16.330505997223096 8.207737142309158 16.009999999999998 9.11 C 15.684600404924373 10.006405959452808 15.149755116888787 10.812102386942312 14.449999999999998 11.459999999999999 C 13.990938269461948 11.963578932519441 13.392058156846101 12.318728766745117 12.729999999999997 12.479999999999999 C 12.643828157157651 12.492016982456366 12.556995947890465 12.498696383169227 12.469999999999997 12.499999999999998 C 11.485180973370166 12.503098852725627 10.583145046873382 11.949488820583824 10.139999999999997 11.069999999999999 C 9.983788691009893 10.807876531947997 9.875435245381894 10.52006269199862 9.819999999999997 10.219999999999999 C 9.656133351774635 8.843076281533918 10.114354975975951 7.464745635936356 11.069999999999997 6.459999999999998 C 12.44 4.87 14.65 4 15.87 6.35 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -13.35 -4.97)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(116, 204, 207);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-10.65, -19.03)"
                        d="M 15.86 23.32 C 14.552596256999712 22.584018740187265 13.340239942217995 21.690703560874418 12.25 20.659999999999997 C 12.063423489076449 20.490001604324974 11.8864815947904 20.309721183731643 11.719999999999999 20.120000000000005 C 11.382176117942127 21.020531198071655 10.988065300778938 21.89893073124046 10.540000000000001 22.75 C 10.044476316970332 23.670453195564743 9.852006528529921 24.723787855938625 9.990000000000002 25.759999999999998 C 10.15731598971309 26.196052179397558 10.218998799636998 26.66552689937396 10.170000000000002 27.129999999999995 C 9.959999999999999 27.08 9.75 27.029999999999998 9.55 26.97 C 7.259579525765662 26.365293476447235 5.109323335442623 25.319039279575996 3.219999999999998 23.89 C 3.1200000000000006 23.82 3.0300000000000007 23.75 2.9400000000000004 23.68 C 2.800967522150502 23.599045159014704 2.7001321091405384 23.465798363251537 2.66 23.31 C 2.658606779659368 23.169136808226686 2.704367508663506 23.031854621214272 2.79 22.919999999999998 C 4.640000000000001 19.81 4.78 15.909999999999998 6.63 12.799999999999999 C 7.026973271187541 12.006800144630471 7.698652123373435 11.384875281495383 8.519999999999998 11.049999999999999 C 9.049444130327306 10.891591412904477 9.614627963450525 10.898568991091182 10.14 11.069999999999999 C 10.583145046873385 11.949488820583824 11.485180973370168 12.503098852725627 12.469999999999999 12.499999999999998 C 12.700861559562545 12.768346978773511 12.880504914037596 13.076791228909919 13 13.409999999999998 C 13.118071465200638 13.914300141685704 13.15186140770013 14.434665256177876 13.100000000000001 14.949999999999996 C 13.073317053790914 15.109219697066909 13.07670893013538 15.272029761601292 13.11 15.43 C 13.176268256213392 15.664285713915255 13.296087812222423 15.87996091473151 13.459999999999999 16.06 C 14.777945883065525 17.939853036671693 16.33427553206056 19.64072302023862 18.089999999999996 21.119999999999997 C 18.36 21.33 18.669999999999998 21.589999999999996 18.64 21.919999999999998 L 18.64 21.939999999999998 C 18.610303792064173 22.12267170866725 18.522656936728286 22.290953670912153 18.39 22.419999999999998 C 18.01890566244589 22.829927377917652 17.578935976952607 23.17174997972397 17.09 23.43 C 16.971149257243123 23.49563068827839 16.843022426395603 23.54283531016958 16.71 23.57 C 16.69 23.57 16.66 23.580000000000002 16.630000000000003 23.580000000000002 C 16.355947593135255 23.55753662306667 16.091573149810987 23.46826733051562 15.86 23.32 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -11 -15.29)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-13, -8.71)"
                        d="M 12.35059 13.00391 C 11.228024493542714 12.953480676035275 10.217829637251738 12.307447373347118 9.701170000000001 11.309569999999999 C 9.520118982873626 11.003524288248704 9.394340693619382 10.668003813272392 9.329590000000001 10.318359999999998 C 9.126254026863203 8.789085258843759 9.62705129175815 7.25006644474112 10.691409999999998 6.133300000000001 C 11.496812774587767 5.041108954880411 12.779313445952855 4.404128880837243 14.136229999999998 4.42236 C 15.108610470787484 4.5692904573293145 15.934023233399996 5.212585350545466 16.314 6.119630000000001 C 16.78989715371207 7.104571802648972 16.850932381441233 8.239220432394557 16.48344 9.269529999999996 C 16.134807854027784 10.242382616581525 15.556794278540233 11.116856859790628 14.798380000000002 11.81885 C 14.272591799968142 12.397640118038922 13.581223204835787 12.800351849421773 12.818380000000001 12.972169999999998 C 12.708383877927563 12.988203707811849 12.597510397306644 12.997497710720523 12.48638 12.999999999999998 C 12.44092 13.00244 12.396 13.00391 12.35059 13.00391 Z M 13.84229 5.40527 C 12.888360822454114 5.5164164504879185 12.02246328742757 6.015958250240904 11.448730000000001 6.786130000000002 C 10.593149727831799 7.6766879255307625 10.176628329848029 8.900855232595575 10.311520000000002 10.12842 C 10.355470036931289 10.368087648235253 10.441605646529514 10.598053473860702 10.565920000000002 10.80762 C 10.911033766752722 11.530334396708254 11.63762936361471 11.993392805188176 12.43848 12.001 C 12.51807 11.99807 12.596680000000001 11.993179999999999 12.66648 11.98391 C 13.221184032335392 11.839090344658008 13.720235481860733 11.532453584174684 14.10008 11.10305 C 14.743943745836877 10.51120890889833 15.236261148848449 9.773398125975525 15.535620000000002 8.95168 C 15.812718517784608 8.176623768908645 15.772889049169082 7.3235458323040135 15.42478 6.577679999999999 C 15.18714092331721 5.974980168927968 14.65700471084473 5.536269792954064 14.02049 5.415569999999999 C 13.961340702516818 5.4086758101224035 13.901839711451007 5.405236639482798 13.842289999999998 5.40527 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -16.81 -4.97)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-7.19, -19.03)"
                        d="M 10.17041 27.62988 C 10.13143179636707 27.629915735598054 10.092586991263873 27.62532699997966 10.05469 27.61621 C 9.835450000000002 27.564449999999997 9.61621 27.51172 9.40723 27.449209999999997 C 7.060512649079299 26.82522129953783 4.857087270799733 25.752023415188766 2.918999999999998 24.28906 C 2.82573 24.22412 2.729 24.14941 2.63335 24.0752 C 2.3874591766390423 23.91475834719516 2.2179131420121756 23.660703059224847 2.16411 23.372069999999997 C 2.144276798565364 23.12784325525115 2.209861797226888 22.88430747471873 2.34966 22.683069999999997 C 3.1902213104638752 21.118987269867247 3.8220701462336857 19.451440765193798 4.229050000000004 17.723069999999996 C 4.6584536167262245 15.91856138214823 5.321095513519056 14.177677546241174 6.20025 12.544360000000003 C 6.652694563059435 11.638948947338324 7.427397249834254 10.935482510235815 8.372119999999999 10.572199999999999 C 8.996484853056852 10.383363812404019 9.66364623850245 10.389836161641258 10.284229999999997 10.590749999999996 C 10.455450309107123 10.642137839920055 10.586229688910777 10.780996732966923 10.62727355617793 10.954986690441899 C 10.66831742344508 11.128976647916877 10.61338551774028 11.311644445012227 10.483183285151279 11.434137232437562 C 10.35298105256228 11.556630019862896 10.167304284634357 11.60032414088472 9.99614 11.548749999999997 C 9.568253790814198 11.40839038954825 9.108029737650895 11.400052138797038 8.675339999999998 11.524819999999997 C 7.96734291298242 11.820895885043594 7.392246800561408 12.365944141575321 7.05864 13.057049999999998 C 6.223637757238459 14.615175085639434 5.595768296243504 16.275709231988362 5.1909699999999965 17.996499999999994 C 4.761705747160134 19.801206151016565 4.099061658102563 21.542269298682186 3.2197800000000036 23.175700000000003 C 3.20806 23.19523 3.19585 23.2167 3.18511 23.23576 Q 3.20927 23.25627 3.24517 23.2841 C 3.3306199999999997 23.35051 3.4146 23.41545 3.50786 23.48088 C 5.344972795914098 24.869272490163127 7.433790410622375 25.88840173048964 9.658740000000002 26.48188 C 9.63823 26.39253 9.61333 26.30024 9.58794 26.20649 C 9.557179999999999 26.09272 9.52694 25.97944 9.501999999999999 25.86763 C 9.342494376843531 24.725298756650144 9.546643113060137 23.561741926233342 10.0855 22.541939999999997 C 10.21001 22.270939999999996 10.34234 22.003859999999996 10.47515 21.736279999999997 C 10.776793143006547 21.168317575706993 11.033594750887382 20.57765314782078 11.243209999999998 19.969679999999997 C 11.326753960125243 19.706849901040545 11.607269768968045 19.561229391369363 11.87029779391531 19.644148100264186 C 12.133325818862575 19.727066809159005 12.2796129887605 20.007235536483954 12.19732 20.270459999999996 C 11.97200314646971 20.92784462158818 11.695772697813117 21.566660550830267 11.371139999999999 22.181099999999997 C 11.242729999999998 22.43989 11.114309999999998 22.697699999999998 10.994139999999998 22.95893 C 10.538825581890286 23.780844860695062 10.358649079178553 24.72695548223984 10.48 25.65869 C 10.5 25.74902 10.52688 25.84669 10.55324 25.9458 C 10.70513840987185 26.366283748145133 10.739575508935584 26.820213183650438 10.65285 27.258799999999997 C 10.594514336429521 27.4773983429248 10.396658088647403 27.629584099551508 10.17041 27.62988 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -9.81 -5.96)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-14.19, -18.04)"
                        d="M 16.62988 24.08008 C 16.27211392341306 24.05983850113324 15.925270009821164 23.949486892008693 15.62158 23.75928 C 14.279179937215009 23.00448412128389 13.034250165148169 22.088159389241856 11.914580000000004 21.03076 C 11.714982925964504 20.8491181900319 11.525722821619443 20.656432714502692 11.34769 20.45361 C 10.277198976174603 19.358294837089563 9.549549239502596 17.9744379697719 9.25394 16.47168 C 9.231363227880815 16.294141560181817 9.305419926295386 16.118078973705348 9.44811124675241 16.010056775437466 C 9.590802567209433 15.90203457716958 9.78035529830988 15.878535831049566 9.94510464385281 15.9484447818039 C 10.109853989395738 16.018353732558236 10.224660912774937 16.171003001410245 10.24612 16.348679999999998 C 10.506397712712168 17.64910814425868 11.146706740061376 18.84305817869415 12.085970000000001 19.77935 C 12.24191650584815 19.95741534546339 12.407529475090831 20.12677729905285 12.58206 20.286669999999997 C 13.644420802332068 21.291042555595183 14.825344051171042 22.162059923699633 16.098659999999995 22.880419999999997 C 16.25902933803118 22.98499654649818 16.44036458458212 23.053164945723946 16.62991 23.080129999999997 C 16.711668125385643 23.056182782023388 16.790708283589254 23.023781143221125 16.86575 22.983449999999998 C 17.299413731672153 22.753193884777385 17.68966142453145 22.4491678369565 18.019 22.085 C 18.070986568449424 22.033695195267697 18.11259867589382 21.972852427202778 18.14156 21.9058 C 18.13619 21.834509999999998 18.06881 21.73686 17.78267 21.514689999999998 C 16.005295130656776 20.02148174021741 14.429300519461464 18.30383998843858 13.0942 16.404829999999993 C 12.869179224737707 16.15596575342499 12.706804214251653 15.856989761311574 12.62057 15.532749999999997 C 12.57519693812312 15.32078555644068 12.56956486579023 15.102240127138044 12.60396 14.888219999999997 C 12.648420295635436 14.43707798193774 12.619079253523095 13.981705818973529 12.51709 13.539999999999997 C 12.415332007703249 13.273430637724369 12.267216172786817 13.026965888423426 12.07959 12.812 C 11.909195131192044 12.596154595352912 11.945116431403243 12.283216067942643 12.159987535281187 12.11159421985325 C 12.374858639159134 11.939972371763858 12.68799674346634 11.974110171597186 12.86084 12.187999999999999 C 13.135622977572908 12.509692693016119 13.346729053038988 12.880702110065725 13.48291 13.28126 C 13.615798249680715 13.836445807511549 13.655074706898924 14.409920612422606 13.599120000000001 14.97804 C 13.57919667345897 15.087355367019338 13.577712835817433 15.199234697167137 13.59473 15.30904 C 13.647303563240227 15.473281530217314 13.735314250759343 15.62396923658174 13.85254 15.750449999999999 C 15.147112692636998 17.595998510698326 16.673630348097177 19.26741771216799 18.394540000000006 20.72359 C 18.839710395885056 20.981575586927146 19.120703404306177 21.45057489033921 19.138189999999998 21.964799999999997 C 19.106780906755564 22.258671665346345 18.977254391963154 22.533383991535516 18.770519999999998 22.744589999999995 C 18.358309774686123 23.20223491342989 17.868739137730685 23.5837255604293 17.324229999999996 23.871589999999994 C 17.15629981320812 23.9640597821603 16.974631496065367 24.029010535476516 16.786139999999996 24.063969999999994 C 16.76074 24.06787 16.65527 24.08008 16.62988 24.08008 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -18.39 9.03)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-5.61, -33.03)"
                        d="M 8.2002 42.66016 C 7.1132800000000005 42.66016 5.7583 42.553219999999996 4.456050000000001 42.43799 C 4.173161848946744 42.41792856379553 3.9420619902873306 42.20427702495111 3.899900000000001 41.92383 L 4.009770000000001 32.61377 C 4.0894590186191575 31.183930233651786 3.958498707775901 29.7501425987 3.6210900000000006 28.358400000000007 C 3.5260335026750287 28.162022865444175 3.384387928951558 27.991875836206702 3.2085000000000017 27.862790000000004 C 2.872397354168088 27.61255698775943 2.628731503531811 27.25796193068298 2.5156300000000016 26.854490000000006 C 2.2064812424486155 25.96052132757547 2.217353816971956 24.98694166108184 2.546390000000001 24.100100000000005 C 2.619653098504153 23.93794737021914 2.7024650418836162 23.780280776245423 2.79439 23.627930000000006 C 2.939201822829385 23.3927754377933 3.247225437793297 23.319538177170624 3.482380000000002 23.464350000000007 C 3.7175345622067058 23.60916182282939 3.790771822829385 23.9171854377933 3.645960000000002 24.152340000000006 C 3.574754594128943 24.271482990991437 3.510361269459054 24.394567156868977 3.4530900000000013 24.521000000000004 C 3.221175409919017 25.198216794264876 3.2322242424538397 25.9350413383471 3.4843400000000018 26.605000000000004 C 3.549556656172791 26.81177275986926 3.6840631839560123 26.98974094790981 3.865190000000002 27.108910000000005 C 4.156253695435756 27.33484906151067 4.387872430519631 27.62831539795606 4.540000000000001 27.963910000000006 C 4.960014170764258 29.479526928331552 5.11886142797869 31.055602292612896 5.00973 32.62455 L 4.905230000000002 41.473670000000006 C 5.985800000000002 41.56645 7.061970000000002 41.646040000000006 7.961870000000002 41.658730000000006 C 8.064609415406446 41.472233365389584 8.274185993410851 41.371260185992426 8.48406482521148 41.40713856612691 C 8.693943657012106 41.44301694626139 8.858076884147097 41.60787509363622 8.893030000000001 41.817910000000005 C 8.969037512089503 42.03601939819527 8.923486815416313 42.2780857686961 8.7734 42.45365 C 8.618353018958574 42.59754907261572 8.411395857578816 42.67211069752244 8.2002 42.66016 Z M 8.419920000000001 42.1001 L 8.419920000000001 42.1001 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -15.3 10.43)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-8.7, -34.43)"
                        d="M 8.39941 42.39014 C 8.155959334646049 42.38976793749085 7.948153778460805 42.21412668556461 7.907229999999999 41.974140000000006 C 7.85352 41.658710000000006 7.717289999999999 41.04641000000001 7.633299999999999 40.667500000000004 C 7.588869999999999 40.469260000000006 7.55859 40.32717 7.555179999999999 40.30275 C 7.294164155958562 38.893439687467236 7.274845132335795 37.44999109154667 7.498049999999993 36.03420000000001 C 7.614590279300137 35.16122906184238 7.682079585131388 34.282409128497264 7.700199999999999 33.40188 C 7.7823355289792975 32.55144871189282 7.921150814149646 31.70744897181819 8.11572 30.875510000000013 L 8.229 30.315940000000005 C 8.302111170928164 29.935277074739858 8.396001583932048 29.558900871230172 8.510249999999997 29.18850000000001 C 8.5918 28.907730000000004 8.67432 28.625020000000006 8.74072 28.308130000000006 L 8.84863 27.837910000000004 C 8.92383 27.516130000000004 8.99805 27.199730000000006 9.05811 26.878440000000005 C 9.111829055562406 26.60886559053422 9.370801750534909 26.431376377832194 9.641599999999999 26.478540000000006 C 9.912973334538394 26.529516747531012 10.091870274101664 26.790543442369152 10.0415 27.062030000000007 C 9.978499999999999 27.397970000000008 9.90137 27.72903000000001 9.82275 28.065450000000006 L 9.717749999999999 28.519550000000006 C 9.647929999999999 28.855980000000006 9.559059999999999 29.163110000000007 9.470189999999999 29.467790000000004 C 9.36546304268155 29.806073994801324 9.279396732159665 30.14985517439999 9.212379999999998 30.49758 L 9.095189999999999 31.07766 C 8.915417867525745 31.851024899070463 8.783500920917978 32.63473846936293 8.700190000000003 33.42434 C 8.681337301294496 34.33718598949254 8.61156217472336 35.24826886228017 8.491189999999992 36.15334 C 8.279155636833632 37.47683082532651 8.29649880433794 38.826942461271074 8.542459999999998 40.14455 C 8.5493 40.18068 8.57469 40.29543 8.60936 40.451190000000004 C 8.69627 40.843770000000006 8.83689 41.479510000000005 8.892560000000001 41.80619 C 8.91695073350775 41.951380071211176 8.876245613732886 42.0999493566766 8.781257541728591 42.21243193682241 C 8.686269469724294 42.32491451696822 8.546614297092876 42.38992353262669 8.399390000000002 42.390190000000004 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -5.04 -0.36)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-18.96, -23.64)"
                        d="M 19.6626 26.18164 C 18.622417617269043 26.055201319807676 17.678193471797872 25.511716900858428 17.046390000000002 24.675780000000003 C 16.74128468147763 24.45122672379992 16.468409993076936 24.1858989888651 16.235390000000002 23.887210000000003 C 16.068561017177014 23.669195095644284 16.10870821889913 23.357446766503667 16.32533013274579 23.18881297845276 C 16.541952046592446 23.020179190401855 16.854023037391723 23.057736017073466 17.02445 23.27295 C 17.208293748982637 23.508420588288722 17.424838549271502 23.716415662296882 17.667520000000003 23.89063 C 17.69724559475836 23.91149593235249 17.72458953395302 23.935563561933073 17.749060000000004 23.962400000000002 C 18.706060000000004 25.009280000000004 19.383340000000004 25.3394 20.091840000000005 25.105960000000003 C 20.25575045950342 25.07663975575985 20.402092662690084 24.985369687565747 20.500530000000005 24.851070000000004 C 20.541524432186222 24.76778613814256 20.543134701641264 24.670535399961405 20.504920000000006 24.585940000000004 C 20.44321360750815 24.464198433560846 20.36354565678385 24.352431374522034 20.268590000000007 24.254390000000004 C 19.875624136270698 23.91614594233569 19.71222306532677 23.382053401080004 19.848670000000006 22.881840000000004 C 19.860654580495538 22.84852009063689 19.876208390588513 22.81659437826239 19.895060000000004 22.786620000000003 C 20.041368392241573 22.560334229518467 20.253047397504353 22.383905413012066 20.501990000000003 22.280760000000004 C 20.633340000000004 22.216760000000004 20.68999 22.189450000000004 20.736860000000004 22.097660000000005 C 20.384681682217522 22.106186621662722 20.039052431858767 22.19468070397817 19.726110000000002 22.356450000000006 C 19.410741168105687 22.496660556194396 19.057056073022306 22.52541578602409 18.723180000000003 22.437990000000006 L 18.5708 22.415 C 18.300581635651046 22.373300491245764 18.11396946628034 22.12228228362498 18.151887895220373 21.851507457969994 C 18.189806324160404 21.58073263231501 18.43819161784856 21.390630059492224 18.70947 21.42476 L 18.87695 21.449669999999998 C 19.10938 21.486779999999996 19.20995 21.498499999999996 19.26953 21.466269999999998 C 19.87207 21.161089999999998 20.95996 20.880329999999997 21.50244 21.349569999999996 C 21.776448179900285 21.591526218708783 21.86563569753306 21.981279050298255 21.72412 22.318319999999996 C 21.60685824680456 22.709760782454424 21.318210599084168 23.026788725103422 20.93945 23.180139999999998 C 20.886751884549998 23.202874149408462 20.836385591610586 23.23067122576973 20.78906 23.263139999999996 C 20.84706583422655 23.391503294339977 20.928733127570485 23.507790897930857 21.02979 23.605919999999998 C 21.215879336965365 23.79900495275103 21.36103401381831 24.027701375782886 21.456539999999997 24.27828 C 21.578820147172383 24.622468953180285 21.551373536640025 25.002137394434456 21.38086 25.32516 C 21.16330718205916 25.69796360973607 20.801762989059718 25.964660824869974 20.381349999999998 26.06246 C 20.149824721145492 26.140939910166328 19.90706441779612 26.181193368188143 19.6626 26.18164 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -16.34 19.21)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-7.66, -43.21)"
                        d="M 9.45166 45 L 9.37891 45 L 6.195309999999999 44.91016 C 5.868200739566968 44.91475744378544 5.5428131837094226 44.86203790437922 5.233889999999999 44.75439 C 4.582113202806 44.43274330255054 4.148755629118269 43.79069419761085 4.094239999999999 43.06592 C 4.039125164844243 42.69295485548065 4.007649030463369 42.3168778415781 4 41.93994 C 4 41.663797625084605 4.223857625084603 41.43994 4.5 41.43994 C 4.776142374915397 41.43994 5 41.663797625084605 5 41.93994 C 5.007196040478337 42.260622868159395 5.034103477019272 42.58055986960179 5.080570000000002 42.89794 C 5.096734919134118 43.277573435121845 5.296773312966095 43.62554837936219 5.6167 43.83056 C 5.814004984201805 43.888350953239744 6.01907764306209 43.915199883046284 6.22461 43.91015 L 9.32422 44 C 9.57764590514097 44.021486314096514 9.83287488898805 43.99801192359904 10.07813 43.93066 C 10.21143 43.87695 10.31006 43.761230000000005 10.31006 43.68994 C 10.31152 43.61279 10.25049 43.46533 9.82227 43.2085 C 9.294627021241775 42.895058077554644 8.750548529614333 42.61014867102781 8.192379999999993 42.35499999999999 C 8.014239165105215 42.273604546854216 7.899948399974319 42.095775493941986 7.8999 41.899919999999995 C 7.913786152694789 41.722227145339765 8.016448657763565 41.563557203337574 8.172844506840333 41.47807086392876 C 8.3292403559171 41.39258452451993 8.518224972553707 41.39183946298533 8.67529 41.47608999999999 C 9.243004226665022 41.73886536610934 9.79694707244229 42.030424069646955 10.334959999999999 42.34962999999999 C 10.608400000000001 42.51417999999999 11.32813 42.94630999999999 11.31006 43.70162999999999 C 11.282183420678622 44.230811890080496 10.936662390281217 44.69042602044666 10.43606 44.864229999999985 C 10.118789109171727 44.96843675016723 9.785293863966702 45.0144329401728 9.45166 45 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 2.11 3.09)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-26.11, -27.09)"
                        d="M 26.39209 29.58984 L 26.374 29.58984 C 25.32931046567408 29.41233443227802 24.39527383583777 28.83379149786193 23.770999999999997 27.977539999999998 C 23.498818858830685 27.721090701655722 23.322554076629984 27.37924951860614 23.271479999999997 27.008789999999998 C 23.26732628942478 26.27473003602744 23.82271337836618 25.658198977076115 24.553219999999996 25.585939999999997 C 24.89310217755802 25.545525571305042 25.236985857135846 25.55325166793478 25.574709999999996 25.60889 C 25.683109999999996 25.622069999999997 25.791019999999996 25.63574 25.899409999999996 25.64404 C 25.895178718061807 25.499961474758514 25.913634208345506 25.356113936941153 25.954099999999997 25.21777 C 26.044447674168715 24.963433699806085 26.241852248931846 24.76155462134832 26.494099999999996 24.66553 C 26.785934264966855 24.551777527379688 27.112038682314406 24.56523272014802 27.393509999999996 24.70264 C 27.76299043533887 24.91638070366679 28.03725699909105 25.26274910064097 28.160599999999995 25.67139 L 28.237259999999996 25.8916 C 28.283881501206046 26.056237215549736 28.350632117037367 26.214495355197315 28.435999999999996 26.36279 C 28.472129999999996 26.4165 28.513139999999996 26.467290000000002 28.553669999999997 26.51807 C 28.66973365445596 26.653521436923608 28.767873840103817 26.803353268299684 28.84567 26.96387 C 28.941983604594554 27.189702048886826 28.976366968046882 27.437123503449545 28.945279999999997 27.68066 C 28.81198 28.74609 27.36472 29.56299 26.454559999999997 29.58984 Z M 26.3833 28.58984 L 26.43994 28.58984 C 26.97949 28.57422 27.896 28.01221 27.9541 27.547839999999997 C 27.961947096642877 27.482495602006114 27.95216904010776 27.416241673032815 27.92578 27.355949999999996 C 27.881274829559054 27.279756084854192 27.829607810460764 27.20797810550287 27.77148 27.141589999999997 C 27.71387 27.068839999999998 27.65625 26.995589999999996 27.60448 26.917959999999997 C 27.467998176589408 26.697029391118598 27.361900744955157 26.458719685913433 27.28905 26.209459999999996 L 27.22118 26.013659999999998 C 27.175270012146246 25.844268011442093 27.073824403391907 25.69519142157101 26.9331 25.59032 C 26.89794 25.54687 26.8994 25.624499999999998 26.89892 25.67626 C 26.937067931866434 26.004387245929227 26.795423695322256 26.32760715593006 26.52831 26.52196 C 26.351400143834073 26.637426154555353 26.137566869308273 26.682215074338103 25.929190000000002 26.64745 C 25.79003 26.64208 25.62206 26.622059999999998 25.454580000000004 26.60204 C 25.207761113571163 26.559355540176977 24.956329393882893 26.54999529516798 24.707020000000004 26.574209999999997 C 24.473130000000005 26.610339999999997 24.255850000000002 26.785149999999998 24.268020000000003 26.92675 C 24.313961304155388 27.072533522626458 24.398089649365918 27.20336147255574 24.511670000000002 27.30565 C 24.82861 27.65234 25.67529 28.57959 26.3833 28.58984 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 9.24 3.91)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-33.24, -27.91)"
                        d="M 33.5 28.70117 C 31.760432855842247 28.702016854430827 30.026761599517112 28.498964871366805 28.33447 28.09617 C 28.06588011903854 28.032256847325833 27.89995684732583 27.762709880961463 27.96387 27.494120000000002 C 28.027783152674168 27.225530119038538 28.297330119038538 27.05960684732583 28.56592 27.12352 C 31.03931731326435 27.710426722724367 33.59740483944269 27.852615497378633 36.12061 27.54344 L 36.27002 27.52391 C 36.850239209280815 27.43591117011202 37.43501194549038 27.381131921468086 38.021480000000004 27.35984 C 38.15485689012298 27.354913883173904 38.28447628754186 27.40458346443794 38.38040663244574 27.497379102118177 C 38.47633697734963 27.590174739798414 38.53028388553765 27.71807308453802 38.529790000000006 27.851540000000004 C 38.53418454837035 28.1276075379391 38.314151292324524 28.35506920978797 38.038090000000004 28.359840000000002 C 37.48988786400096 28.38107662063759 36.94329985842344 28.43291736526172 36.40088 28.51512 L 36.24512 28.53562 C 35.33420306825743 28.64552926290425 34.417523609539074 28.700811467103275 33.5 28.70117 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 17.24 6.39)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-41.24, -30.39)"
                        d="M 41.61035 32.5498 C 41.56700955269894 32.549781733055745 41.523850542647125 32.54420285463447 41.48193 32.5332 C 41.35369702568765 32.49931827982896 41.24418797586574 32.415859481664036 41.17751642071473 32.30120098700932 C 41.11084486556373 32.1865424923546 41.09247794470262 32.050086421760014 41.12646 31.92188 C 41.23469836431698 31.425646338624254 41.279493218532984 30.91767786652599 41.25977 30.41016 C 41.27945251405746 30.189672665221554 41.25078571887977 29.967545955158965 41.17577 29.75928 C 41.08131646723442 29.628706834077867 40.96522208028765 29.51525387684051 40.83251 29.42383 C 40.70165 29.32183 40.57226 29.229 40.433099999999996 29.13672 C 40.20496970054794 28.9830883433347 40.143701661394005 28.674079278537118 40.29595634860497 28.445027691159734 C 40.44821103581593 28.215976103782346 40.756845435824665 28.15284780679841 40.98681 28.303720000000002 C 41.14745 28.41065 41.29833 28.51808 41.44872 28.63624 C 41.6939114725964 28.809846276340974 41.901100866570566 29.03165724113921 42.057610000000004 29.2881 C 42.216662238142064 29.639677707014208 42.28611533168887 30.02518961735832 42.25976000000001 30.41017 C 42.28156640241397 31.004099956060394 42.225588198809454 31.59833089321274 42.093250000000005 32.17774 C 42.03528827693737 32.396922881794936 41.83706716607622 32.54964631626791 41.61035 32.5498 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 10.73 13.08)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-34.73, -37.08)"
                        d="M 35.36426 43.60791 C 35.275840210954286 43.607628724618166 35.187957971679594 43.594146751882924 35.10352 43.56791 C 34.94780789772277 43.523168025157915 34.804907374014974 43.442180781110274 34.68652 43.331579999999995 C 34.62552 43.27934 34.56738 43.228579999999994 34.508790000000005 43.18657999999999 C 32.72950107361346 41.719558239734745 31.254806642062853 39.91821049326215 30.168 37.88428 C 29.97055947389533 37.56121368513564 29.84530136115585 37.19927883501285 29.80081 36.82328 C 29.779058372764684 36.55207090108923 29.820337701850963 36.279506170986146 29.921419999999998 36.0269 C 30.100051714451407 35.59684856460859 30.344512644014127 35.197211403470725 30.646029999999996 34.84233 C 31.529539838894177 33.553423671495125 32.33486224388583 32.2126310917445 33.05764999999999 30.827189999999998 C 33.18680044808147 30.58389031236741 33.488416180562346 30.490891224667074 33.732152104603244 30.619216497211866 C 33.975888028644135 30.747541769756655 34.06990862353506 31.048840638206947 33.942409999999995 31.29301 C 33.19423749657685 32.73110081340672 32.357144138215865 34.121153180750234 31.435999999999993 35.45508 C 31.199562172517957 35.730777448266686 31.005236190960936 36.03995478249991 30.85934 36.37256 C 30.809900613006025 36.48935434440737 30.788660662096294 36.6161499997414 30.79734 36.74268 C 30.835217689574417 36.98124146149073 30.921455893696393 37.209543682165474 31.050759999999997 37.41357 C 32.069538495923624 39.322582334565084 33.451175412733086 41.014362329054265 35.11816 42.394 C 35.172850000000004 42.431599999999996 35.25439 42.50094 35.33594 42.57125 C 35.3374 42.59225 35.43701 42.47701 35.51611 42.241659999999996 C 36.311174405466794 39.89350074962667 37.39797389466398 37.65447992859426 38.75099999999999 35.57715000000002 C 38.901746122466314 35.34577306548214 39.21151806548214 35.28040887753369 39.442895 35.431155000000004 C 39.67427193451786 35.58190112246632 39.739636122466315 35.891673065482145 39.58889 36.123050000000006 C 38.28196111973396 38.12966989468602 37.232087316743346 40.29240992884668 36.46388999999999 42.56055000000002 C 36.24268 43.22217 35.82764 43.60791 35.36426 43.60791 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 5.94 6.07)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-29.94, -30.07)"
                        d="M 33.50049 31.56006 L 33.46973 31.55906 C 32.26909940621651 31.4475164042798 31.081890079317148 31.221390064487824 29.924319999999994 30.88377 L 28.32471 30.463849999999997 C 27.509936861890854 30.296160827211125 26.739321319824395 29.959669505692236 26.0625 29.476049999999997 C 25.923782329545634 29.36288214053705 25.856169081932695 29.184175878358914 25.88523513471691 29.007527297591174 C 25.914301187501128 28.830878716823438 26.03560885182139 28.683257817315226 26.20327320466197 28.620502568146247 C 26.370937557502547 28.557747318977267 26.55936027505489 28.58943894097173 26.69727 28.70359 C 27.26659079607592 29.091059350878012 27.907530430062398 29.36098324553578 28.58252 29.497539999999997 L 30.17773 29.916479999999996 C 31.272549276633118 30.236022080940085 32.39501153016963 30.45182019845529 33.530269999999994 30.561019999999996 C 33.799384050840665 30.578038829233567 34.00652562230237 30.80538952358786 33.99849092699185 31.074921444850663 C 33.990456231681335 31.34445336611347 33.77013994793634 31.55906162310234 33.50049 31.560019999999994 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 17.18 15.46)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-41.18, -39.46)"
                        d="M 42.58691 43.57715 C 42.44176361913154 43.5761339794574 42.29988132024332 43.53397637180593 42.177730000000004 43.45557 C 41.91346731188037 43.243680763454286 41.70662572216908 42.9688409810751 41.576170000000005 42.65625 L 41.506840000000004 42.52979 C 40.36787461680028 40.52227915056457 39.44647391869745 38.398914738264466 38.758300000000006 36.19579 L 38.695800000000006 36.00829 C 38.60920060252189 35.74667543014305 38.75068764858944 35.4643267177 39.01209384393398 35.377100346455414 C 39.27350003927853 35.289873975210824 39.55618715637015 35.43068368174273 39.644040000000004 35.691880000000005 L 39.704100000000004 35.8706 C 40.37204573532129 38.00952260591071 41.26506497423623 40.071532675601844 42.36816000000002 42.02200000000001 L 42.456050000000005 42.18069 C 42.498050000000006 42.25833 42.578610000000005 42.40726 42.64697 42.51419 C 42.76011202979044 42.43426658136698 42.88281226939776 42.36881794299139 43.01221 42.31937 C 43.27217043174536 42.22660549199467 43.558110491994675 42.36214456825465 43.650875 42.622105 C 43.74363950800533 42.88206543174535 43.608100431745356 43.16800549199467 43.34814 43.26077 C 43.294545398724566 43.285962894364516 43.2433858506727 43.31604000875607 43.19531 43.35062 C 43.01929289349554 43.48448630964534 42.80761443150236 43.56330209201766 42.58691 43.57715 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 19.07 13.66)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-43.07, -37.66)"
                        d="M 43.18994 43.27979 C 42.94515497404328 43.279825397819494 42.73632612466046 43.1026537804803 42.696477979658496 42.861133935487096 C 42.656629834656535 42.61961409049389 42.79747722856353 42.38474969993043 43.0293 42.306149999999995 C 43.29033761134067 42.20180105468486 43.538673696850545 42.06813039838809 43.769529999999996 41.907709999999994 C 43.80517999999999 41.884769999999996 43.840819999999994 41.8623 43.876459999999994 41.839839999999995 C 43.05382881682951 40.07284269566934 42.37265912997658 38.24337493315752 41.839359999999985 36.36864999999999 C 41.45583510669796 34.98109460717824 41.212107797596325 33.558646233338486 41.111819999999994 32.12255999999999 L 41.60981999999999 32.04979999999999 L 42.10981999999999 32.08007999999999 C 42.20734216523555 33.43662656879963 42.43860802799319 34.78022485779245 42.80024999999999 36.09130999999998 C 43.36205328582257 38.06123926257705 44.088909817891754 39.98030642796128 44.97309999999999 41.82812999999997 C 45.085531540490585 42.069301080922635 44.989655878747094 42.35628672799612 44.75483999999999 42.48144999999999 C 44.60151999999999 42.562989999999985 44.453569999999985 42.65770999999999 44.30561999999999 42.75194999999999 C 44.00858033030432 42.95689322902551 43.68790844877155 43.12526552470251 43.35054999999999 43.253419999999984 C 43.2988173212774 43.27094071483881 43.244559062540084 43.27984919054333 43.18994 43.27979 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 20.44 19.29)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.44, -43.29)"
                        d="M 43.65234 45.02979 C 43.09668 45.02979 42.30127 44.887699999999995 42.20264 43.920899999999996 C 42.16608070686314 43.355338542229106 42.39735204371002 42.80545854474234 42.82715 42.43604 C 43.02127760953405 42.241487501686045 43.3352454730361 42.23758399741421 43.534150000000004 42.42725 C 43.73124871618192 42.61499611178935 43.73932951829683 42.92680685238896 43.552220000000005 43.12451 L 43.54245 43.13477 C 43.3394610898781 43.30192411731425 43.21425043402999 43.545281781566246 43.19626 43.80762 C 43.213840000000005 43.97562 43.224090000000004 44.06836 43.947720000000004 44.01562 C 44.06006 44.00732 44.16357 44 44.25 44 C 44.8833 44 45.30273 43.93506 45.57227 43.604 C 45.6458286027222 43.51840893885488 45.68620235332079 43.409246862546276 45.686040000000006 43.29639 C 45.670410000000004 43.17188 45.55957000000001 43.070800000000006 45.385740000000006 42.944340000000004 C 45.15365843221136 42.72602301852472 44.8598493084486 42.58465896103352 44.544430000000006 42.539550000000006 C 44.26991757112279 42.55091341967403 44.03764240356615 42.33869864538617 44.02423180675403 42.06427860820248 C 44.01082120994191 41.78985857101878 44.2212976211258 41.556007027887965 44.495610000000006 41.54055 C 45.04192078736181 41.5622678183538 45.563919663428486 41.77220779393051 45.97314000000001 42.13479 C 46.34264296227819 42.36015504341794 46.59843514220626 42.73246939596126 46.67627000000001 43.15822 C 46.71825175486389 43.54361587463191 46.60194469468975 43.9295400739884 46.354000000000006 44.22756 C 45.81074494132741 44.79791029070558 45.03324833035774 45.08335205980131 44.25 45 C 44.18506 45 44.10742 45.00635 44.02246 45.0127 C 43.92676 45.02 43.79785 45.02979 43.65234 45.02979 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 16.72 1.06)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-40.72, -25.06)"
                        d="M 39.70313 29.33594 C 38.80189095023617 29.393116931387034 37.95785373163905 28.89162145906356 37.577130000000004 28.07275 C 36.831030000000005 26.50537 37.52879 23.96875 38.3198 22.739259999999998 C 38.81341400631607 21.89379696922395 39.59019264678514 21.25020082540019 40.51268 20.922359999999998 C 41.531329320089846 20.587104254580783 42.65164142405159 20.897864750145004 43.352030000000006 21.70996 C 43.67736179714809 22.168298471577486 43.89744686880707 22.692834615942402 43.99656000000001 23.24609 C 44.12065731700072 23.69786715645973 44.185652472680246 24.16382823764319 44.18992000000001 24.63232 C 44.12603802490349 25.44921208217018 43.884035979871484 26.242203973736608 43.480920000000005 26.95557 C 43.262087073886995 27.492469827400896 42.94422894481019 27.983423248839213 42.54392000000001 28.40283 C 42.0540006353904 28.83152734998136 41.45202492333756 29.111681107454228 40.80856000000001 29.21045 C 40.558080000000004 29.25391 40.32126000000001 29.28516 40.08444000000001 29.315920000000002 C 39.957750763738396 29.328957092496267 39.830487911589806 29.335638801079874 39.70313 29.33594 Z M 41.34473 21.796390000000002 C 41.16329890558237 21.79606716175348 40.982865574649274 21.823228588504303 40.80957 21.87695 C 40.11428956629559 22.137055203214665 39.53184938351279 22.6320982286932 39.163090000000004 23.27637 C 38.514160000000004 24.28564 37.927730000000004 26.48537 38.48096 27.64453 L 38.482420000000005 27.64746 C 38.641600000000004 27.98633 38.969730000000006 28.42578 39.96826000000001 28.32227 C 40.17871000000001 28.29492 40.401860000000006 28.265629999999998 40.62500000000001 28.22754 C 41.080361546584136 28.161464616916486 41.508217790101575 27.969520689966746 41.860350000000004 27.67334 C 42.166344876905775 27.338091653046682 42.40903791682434 26.95015412501167 42.576660000000004 26.52834 C 42.91401324239848 25.940634261590528 43.12302877071426 25.288125326459816 43.18994000000001 24.613790000000005 C 43.182868067004016 24.228876226664557 43.12692009465407 23.846420592014333 43.02344000000001 23.475610000000003 C 42.95350996220769 23.065842837318648 42.798122346033175 22.67538059959556 42.56738000000001 22.329610000000002 C 42.26004805299762 21.978012785507527 41.8115036598805 21.782394381795992 41.34473 21.79639 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 2.18 18.09)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-26.18, -42.09)"
                        d="M 22.75635 44.74023 C 21.36963 44.74023 19.97559 44.720229999999994 18.588350000000002 44.65967 C 18.198250399645204 44.67024080156359 17.81621439056504 44.547428394766484 17.505350000000004 44.31152 C 17.403942935358877 44.21948403223796 17.319640598372235 44.11021262957755 17.256350000000005 43.98877 C 17.129601270033422 43.70713541063428 17.066258911715998 43.401098453563925 17.070800000000006 43.092290000000006 C 17.060701025255643 42.356690584834276 17.087755477703443 41.62105045178817 17.151860000000006 40.88818000000001 C 17.165253410254966 40.72496636789946 17.223555242788798 40.568643389673106 17.320310000000006 40.43652000000001 C 17.43024617029997 40.31793336489789 17.57573032861297 40.238268899967125 17.734860000000005 40.20952000000001 C 17.79853157619946 40.192762779225426 17.864451062964182 40.186171505538574 17.930180000000004 40.18999000000001 L 19.582030000000003 40.14068000000001 Q 22.659670000000002 40.03520000000001 25.725590000000004 39.93999000000001 C 27.145573909407627 39.94975893707072 28.561555008043293 39.78825984086564 29.942870000000003 39.45899000000001 C 30.208282242202667 39.383821404993824 30.484443553103443 39.53773457485786 30.560120120641415 39.8030024264945 C 30.635796688179386 40.068270278131145 30.482412488862877 40.34472573728517 30.217290000000002 40.420910000000006 C 28.758127467396744 40.774730496964004 27.26118788320105 40.94887172827304 25.75977 40.93946 Q 22.693850000000005 41.03029 19.617190000000004 41.139660000000006 L 18.132810000000003 41.184090000000005 C 18.081540000000004 41.837900000000005 18.06152 42.45069 18.069810000000004 43.053230000000006 C 18.06602799892613 43.21038228818682 18.088811663610613 43.36704491678891 18.137200000000004 43.51661000000001 C 18.282974656571078 43.618592045529105 18.458503593095223 43.66924568653006 18.636200000000002 43.660610000000005 C 21.380340000000004 43.780240000000006 24.171850000000003 43.74020000000001 26.872530000000005 43.70017000000001 C 27.295380000000005 43.69333000000001 27.740200000000005 43.695280000000004 28.194310000000005 43.69431000000001 C 29.615362393121124 43.745718972757125 31.038103590069525 43.66365249398757 32.44382 43.44919000000001 C 32.96794984793284 43.37936510388801 33.47208600733662 43.20235578390829 33.924820000000004 42.929190000000006 C 34.10811006651636 42.79877917603546 34.27172612576887 42.64272695815215 34.41066000000001 42.465810000000005 C 34.584058081480634 42.25088286675585 34.898857866755854 42.21721691851938 35.11378500000001 42.390615000000004 C 35.32871213324416 42.56401308148063 35.362378081480635 42.87881286675585 35.18898000000001 43.093740000000004 C 34.99041666363736 43.344817489271925 34.756739574217654 43.56599973835745 34.495140000000006 43.75048 C 33.929788127545 44.10675616840576 33.295153420021514 44.33877132562984 32.633320000000005 44.431140000000006 C 31.16463295214517 44.6572464197427 29.67800333165482 44.74536087032898 28.192890000000002 44.69433 C 27.743670000000005 44.69579000000001 27.305200000000006 44.69333000000001 26.888690000000004 44.700190000000006 C 25.52881 44.71973 24.14648 44.74023 22.75635 44.74023 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -7.59 17.47)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-16.41, -41.47)"
                        d="M 16.62842 45.001 Q 16.596919999999997 45.001 16.56542 44.99953 C 16.180472981663456 44.969934294950896 15.813486575575604 44.824566222094006 15.51269 44.58253 C 15.125725211570497 44.336632052964916 14.832943429895618 43.96747532549877 14.681629999999998 43.53468 C 14.604835826297217 43.26295826064214 14.579661031726665 42.97924829806268 14.607409999999998 42.69825 C 14.63810285022179 42.1021104578116 14.623085586821375 41.504495585714935 14.562489999999999 40.910650000000004 L 14.54882 40.780280000000005 C 14.447352375384087 40.25428954869385 14.490201927010883 39.710639318037856 14.67282 39.207040000000006 C 14.819130399792046 38.900036641295905 15.024164461570301 38.624668204832545 15.27634 38.39649000000001 C 15.478086513213567 38.154953400131326 15.75980269091645 37.99382369726351 16.07028 37.94239000000001 C 16.876920000000002 37.82521000000001 17.60935 38.67091000000001 18.2988 40.52589000000001 C 18.395071516166755 40.784773476483196 18.263248476483184 41.07268348383326 18.004365 41.16895500000001 C 17.745481523516816 41.26522651616676 17.457571516166755 41.133403476483196 17.3613 40.87452000000001 C 16.74606 39.21827000000001 16.26218 38.93752000000001 16.19186 38.93458000000001 C 16.113021947837602 38.9782976939077 16.042457446758384 39.03549660360307 15.983369999999999 39.10358000000001 C 15.822790118847111 39.24548601947245 15.689567527268782 39.415611136735905 15.5903 39.60553000000001 C 15.485559088661383 39.951942086146225 15.469276725016199 40.31907569395415 15.54294 40.67340000000001 L 15.55759 40.80865000000001 C 15.621672696432462 41.428702150483566 15.63897494301084 42.05269951694152 15.609349999999997 42.675349999999995 C 15.586526689891642 42.86098602365425 15.594943019045276 43.049133230886355 15.63425 43.23199000000001 C 15.727408651000879 43.45794309581702 15.890934386527002 43.64783999068256 16.10056 43.77350000000001 C 16.24440516534229 43.895941554343615 16.420259288318643 43.974703438832755 16.607390000000002 44.00050000000001 C 16.850098437082753 43.97684269819047 17.0661224995661 43.83658186673867 17.186490000000003 43.62450000000001 C 17.292019497049356 43.359543655441236 17.585485890150938 43.22243234375077 17.856420000000004 43.31150000000001 C 17.979351514387872 43.35100280235223 18.080725614564418 43.43915502880752 18.136914775395866 43.5554108107215 C 18.193103936227317 43.67166659263547 18.199199226116786 43.80586931487609 18.153780000000005 43.92674000000001 C 18.121108849077697 44.003410466402165 18.08241444496732 44.0773718840065 18.038060000000005 44.14793000000001 C 17.742500154204876 44.6521988254655 17.212255170884333 44.97308649034536 16.62842 45.001 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 1 13.52)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-25, -37.52)"
                        d="M 19.6001 41.14014 C 19.44035426850665 41.14014410444508 19.2902226623218 41.063817585180054 19.196098363673947 40.93474661574369 C 19.101974065026095 40.80567564630733 19.075188924728266 40.63939939130385 19.12402 40.487300000000005 C 19.65040707253165 38.710495599858774 20.553375237124804 37.06793502725492 21.77148 35.67139 C 23.063622096428723 34.23017686603273 25.035230809033415 33.602250624632745 26.92285 34.03076 C 27.400016002250812 34.19206500527954 27.8602173665796 34.39976520182071 28.296849999999996 34.65088 C 28.560029999999998 34.7915 28.82321 34.93262 29.09763 35.050290000000004 C 29.22409 35.104980000000005 29.35642 35.156290000000006 29.490199999999998 35.2085 C 29.910833464805943 35.352620683389986 30.311492779827084 35.54950116079279 30.682589999999998 35.79443 C 30.90668782151509 35.955973289325506 30.957398289325504 36.2685971784849 30.795854999999996 36.492695 C 30.63431171067449 36.71679282151509 30.321687821515088 36.767503289325504 30.097589999999997 36.605959999999996 C 29.793599443128016 36.412497491487535 29.46754754889196 36.25611209880525 29.126389999999994 36.140139999999995 C 28.98239 36.08398 28.83929 36.027829999999994 28.702569999999998 35.96923999999999 C 28.402269999999998 35.840329999999994 28.113699999999998 35.686519999999994 27.826099999999997 35.532709999999994 C 27.446477912169556 35.313668216882164 27.046894108325457 35.13120759612168 26.63274 34.98779 C 25.10238811580467 34.66800849362002 23.518336206337153 35.19627793214375 22.486259999999994 36.370610000000006 C 21.376068265239855 37.655553550509374 20.554239810981354 39.16356608855909 20.076169999999998 40.793 C 20.009543275395004 40.999703274877625 19.817275751344702 41.13990061623251 19.6001 41.14014 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 11.75 5.53)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(1, 1, 1);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-35.75, -29.53)"
                        d="M 33.49951 31.56006 C 33.31836113413336 31.55979377938619 33.151520746803435 31.461580484346236 33.06337614567446 31.303322745925644 C 32.975231544545494 31.145065007505057 32.97956724246681 30.951511996961326 33.07471 30.79736 C 34.40625 28.64014 36.10938 27.5 38 27.5 C 38.276142374915395 27.5 38.5 27.7238576250846 38.5 28 C 38.5 28.276142374915395 38.276142374915395 28.5 38 28.5 C 36.47412 28.5 35.06543 29.47607 33.925290000000004 31.32275 C 33.834169167718734 31.470389241897166 33.67300446045691 31.560214965698904 33.49951 31.56006 Z"
                        stroke-linecap="round"
                      />
                    </g>
                  </g>
                </g>
              </svg>
              <!--end::Illustration-->
              <!--begin::Heading-->
              <div class="d-flex flex-center mb-5">
                <!--begin::Badge-->
                <span
                  class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3"
                >
                  <span class="material-symbols-outlined"> check </span>
                </span>
                <!--end::Badge-->
                <!--begin::Title-->
                <div class="fs-5 fs-lg-3 fw-bolder text-dark">
                  Orientações de Profissionais capacitados
                </div>
                <!--end::Title-->
              </div>
              <!--end::Heading-->
              <!--begin::Description-->
              <div class="fw-bold fs-6 fs-lg-4 text-muted">
                Contar com a orientação de profissionais capacitadores
              </div>
              <!--end::Description-->
            </div>
            <!--end::Story-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-md-3 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
              <!--begin::Illustration-->
              <svg
                width="150"
                height="150"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <rect
                  width="24"
                  height="24"
                  stroke="none"
                  fill="#000000"
                  opacity="0"
                />
                <g transform="matrix(0.16 0 0 0.16 12 12)">
                  <g style="">
                    <g transform="matrix(1 0 0 1 37.1 7.65)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(124, 165, 198);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-101.1, -71.65)"
                        d="M 86.1 102.5 L 86.1 40.8 L 96.1 40.8 C 102.1 40.8 107.6 44.5 109.8 50.099999999999994 L 116.1 65.8 L 116.1 102.5 L 86.1 102.5 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 42.1 -10.7)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(255, 255, 255);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-106.1, -53.3)"
                        d="M 109.8 50.1 L 116.1 65.8 L 96.1 60.8 L 96.1 40.8 C 99.1 40.8 102 41.699999999999996 104.39999999999999 43.3 C 106.7 45 108.6 47.3 109.8 50.1 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.01 7.65)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-63.99, -71.65)"
                        d="M 116.1 68.8 C 115.89999999999999 68.8 115.6 68.8 115.39999999999999 68.7 L 95.39999999999999 63.7 C 94.1 63.400000000000006 93.1 62.2 93.1 60.800000000000004 L 93.1 40.800000000000004 C 93.1 39.1 94.39999999999999 37.800000000000004 96.1 37.800000000000004 C 97.8 37.800000000000004 99.1 39.1 99.1 40.800000000000004 L 99.1 58.5 L 116.8 62.9 C 118.39999999999999 63.3 119.39999999999999 64.9 119 66.5 C 118.6 67.9 117.4 68.8 116.1 68.8 z M 116.1 105.5 L 11.9 105.5 C 10.200000000000001 105.5 8.9 104.2 8.9 102.5 L 8.9 92.5 C 8.9 90.8 10.200000000000001 89.5 11.9 89.5 C 13.6 89.5 14.9 90.8 14.9 92.5 L 14.9 99.5 L 116 99.5 C 117.7 99.5 119 100.8 119 102.5 C 119 104.2 117.7 105.5 116.1 105.5 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 37.1 7.65)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-101.1, -71.65)"
                        d="M 116.1 105.5 L 86.1 105.5 C 84.39999999999999 105.5 83.1 104.2 83.1 102.5 L 83.1 40.8 C 83.1 39.099999999999994 84.39999999999999 37.8 86.1 37.8 L 96.1 37.8 C 103.39999999999999 37.8 109.89999999999999 42.199999999999996 112.6 49 L 118.89999999999999 64.7 C 118.99999999999999 65.10000000000001 119.1 65.4 119.1 65.8 L 119.1 102.5 C 119.1 104.2 117.7 105.5 116.1 105.5 z M 89.1 99.5 L 113.1 99.5 L 113.1 66.4 L 107 51.2 C 105.2 46.7 100.9 43.800000000000004 96.1 43.800000000000004 L 89.1 43.800000000000004 L 89.1 99.5 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -32.1 42.1)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(255, 255, 255);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-31.9, -106.1)"
                        d="M 31.9 96.5 C 28.47025026205972 96.49999988776713 25.301030763251646 98.32974952634059 23.58615586188267 101.29999990931442 C 21.871280960513694 104.27025029228824 21.871280960513694 107.92974970771175 23.58615586188267 110.90000009068558 C 25.301030763251646 113.8702504736594 28.47025026205972 115.70000011223286 31.9 115.69999999999999 C 35.329749737940276 115.70000011223286 38.49896923674835 113.8702504736594 40.213844138117324 110.90000009068557 C 41.9287190394863 107.92974970771175 41.9287190394863 104.27025029228824 40.213844138117324 101.29999990931441 C 38.49896923674835 98.32974952634059 35.329749737940276 96.49999988776713 31.899999999999995 96.5 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -32.1 42.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-31.9, -106.5)"
                        d="M 31.9 119 C 25 119 19.4 113.4 19.4 106.5 C 19.4 99.6 25.1 94 31.9 94 C 38.699999999999996 94 44.4 99.6 44.4 106.5 C 44.4 113.4 38.8 119 31.9 119 z M 31.9 99.8 C 28.2 99.8 25.2 102.8 25.2 106.5 C 25.2 110.2 28.2 113.2 31.9 113.2 C 35.6 113.2 38.6 110.2 38.6 106.5 C 38.6 102.8 35.7 99.8 31.9 99.8 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 31.9 41.6)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(255, 255, 255);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-95.9, -105.6)"
                        d="M 95.9 96 C 92.47025026205972 95.99999988776713 89.30103076325166 97.82974952634059 87.58615586188267 100.79999990931442 C 85.8712809605137 103.77025029228824 85.8712809605137 107.42974970771175 87.58615586188267 110.40000009068558 C 89.30103076325166 113.3702504736594 92.47025026205972 115.20000011223286 95.9 115.19999999999999 C 99.32974973794029 115.20000011223286 102.49896923674835 113.3702504736594 104.21384413811734 110.40000009068557 C 105.92871903948631 107.42974970771175 105.92871903948631 103.77025029228824 104.21384413811734 100.79999990931441 C 102.49896923674835 97.82974952634059 99.32974973794028 95.99999988776713 95.9 96 Z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 31.9 42.5)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-95.9, -106.5)"
                        d="M 95.9 119 C 89 119 83.4 113.4 83.4 106.5 C 83.4 99.6 89.1 94 95.9 94 C 102.70000000000002 94 108.4 99.6 108.4 106.5 C 108.4 113.4 102.8 119 95.9 119 z M 95.9 99.8 C 92.2 99.8 89.2 102.8 89.2 106.5 C 89.2 110.2 92.2 113.2 95.9 113.2 C 99.60000000000001 113.2 102.60000000000001 110.2 102.60000000000001 106.5 C 102.60000000000001 102.8 99.7 99.8 95.9 99.8 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(0 -1 1 0 -19.56 3.3)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(226, 176, 154);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -67.3)"
                        d="M 21.4 41.5 L 67.6 41.5 L 67.6 93.1 L 21.4 93.1 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(0 -1 1 0 -19.56 3.3)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(226, 176, 154);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -67.3)"
                        d="M 21.4 41.5 L 67.6 41.5 L 67.6 93.1 L 21.4 93.1 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.45 3.35)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(201, 143, 130);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.55, -67.35)"
                        d="M 28.9 84.4 L 67.2 57.1 L 60.2 50.3 L 21.9 77.6 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.5 3.4)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(226, 176, 154);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -67.4)"
                        d="M 26.6 87.6 L 70.4 55 L 62.4 47.2 L 18.6 79.8 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -18.65 2.65)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-45.35, -66.65)"
                        d="M 20.5 79.6 C 19.6 79.6 18.7 79.19999999999999 18.1 78.39999999999999 C 17.1 77.1 17.400000000000002 75.19999999999999 18.700000000000003 74.19999999999999 L 60.6 43.29999999999999 C 61.9 42.29999999999999 63.800000000000004 42.59999999999999 64.8 43.89999999999999 C 65.8 45.19999999999999 65.5 47.099999999999994 64.2 48.099999999999994 L 22.3 79 C 21.7 79.4 21.1 79.6 20.5 79.6 z M 28.1 90.6 C 27.200000000000003 90.6 26.3 90.19999999999999 25.700000000000003 89.39999999999999 C 24.700000000000003 88.1 25.000000000000004 86.19999999999999 26.300000000000004 85.19999999999999 L 68.4 54.19999999999999 C 69.7 53.19999999999999 71.60000000000001 53.499999999999986 72.60000000000001 54.79999999999999 C 73.60000000000001 56.099999999999994 73.30000000000001 57.99999999999999 72.00000000000001 58.99999999999999 L 29.9 90 C 29.4 90.4 28.8 90.6 28.1 90.6 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.5 3.4)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -67.4)"
                        d="M 70.3 93.5 L 70.3 93.5 L 18.699999999999996 93.5 C 17.899999999999995 93.5 17.099999999999994 93.2 16.599999999999994 92.6 C 15.999999999999995 92 15.699999999999994 91.3 15.699999999999994 90.5 L 15.699999999999994 44.3 C 15.699999999999994 42.599999999999994 16.999999999999993 41.3 18.699999999999996 41.3 C 18.699999999999996 41.3 18.699999999999996 41.3 18.699999999999996 41.3 L 70.3 41.3 C 72 41.3 73.3 42.599999999999994 73.3 44.3 L 73.3 90.5 C 73.3 91.3 73 92.1 72.39999999999999 92.6 C 71.79999999999998 93.1 71.1 93.5 70.3 93.5 z M 21.7 87.4 L 67.3 87.4 L 67.3 47.2 L 21.699999999999996 47.2 L 21.7 87.4 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.5 -17.05)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(226, 176, 154);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -46.95)"
                        d="M 74.7 53.1 L 14.2 53.1 C 13 53.1 12 52.1 12 50.9 L 12 43 C 12 41.8 13 40.8 14.2 40.8 L 74.8 40.8 C 76 40.8 77 41.8 77 43 L 77 50.8 C 77 52.1 76 53.1 74.7 53.1 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.5 -17.05)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -46.95)"
                        d="M 74.7 56.1 L 14.2 56.1 C 11.299999999999999 56.1 9 53.7 9 50.9 L 9 43 C 9 40.1 11.4 37.8 14.2 37.8 L 74.8 37.8 C 77.7 37.8 80 40.199999999999996 80 43 L 80 50.8 C 80 53.8 77.6 56.1 74.7 56.1 z M 14.9 50.1 L 73.9 50.1 L 73.9 43.800000000000004 L 14.900000000000006 43.800000000000004 L 14.900000000000006 50.1 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.5 23.7)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(226, 176, 154);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -87.7)"
                        d="M 74.7 93.8 L 14.2 93.8 C 13 93.8 12 92.8 12 91.6 L 12 83.8 C 12 82.6 13 81.6 14.2 81.6 L 74.8 81.6 C 76 81.6 77 82.6 77 83.8 L 77 91.6 C 77 92.8 76 93.8 74.7 93.8 z"
                        stroke-linecap="round"
                      />
                    </g>
                    <g transform="matrix(1 0 0 1 -19.5 23.7)">
                      <path
                        style="
                          stroke: none;
                          stroke-width: 1;
                          stroke-dasharray: none;
                          stroke-linecap: butt;
                          stroke-dashoffset: 0;
                          stroke-linejoin: miter;
                          stroke-miterlimit: 4;
                          fill: rgb(69, 75, 84);
                          fill-rule: nonzero;
                          opacity: 1;
                        "
                        transform=" translate(-44.5, -87.7)"
                        d="M 74.7 96.8 L 14.2 96.8 C 11.299999999999999 96.8 9 94.39999999999999 9 91.6 L 9 83.8 C 9 80.89999999999999 11.4 78.6 14.2 78.6 L 74.8 78.6 C 77.7 78.6 80 81 80 83.8 L 80 91.6 C 80 94.4 77.6 96.8 74.7 96.8 z M 14.9 90.8 L 73.9 90.8 L 73.9 84.5 L 14.900000000000006 84.5 L 14.900000000000006 90.8 z"
                        stroke-linecap="round"
                      />
                    </g>
                  </g>
                </g>
              </svg>
              <!--end::Illustration-->
              <!--begin::Heading-->
              <div class="d-flex flex-center mb-5">
                <!--begin::Badge-->
                <span
                  class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3"
                >
                  <span class="material-symbols-outlined"> check </span>
                </span>
                <!--end::Badge-->
                <!--begin::Title-->
                <div class="fs-5 fs-lg-3 fw-bolder text-dark">
                  Receber os produtos no conforto da sua casa
                </div>
                <!--end::Title-->
              </div>
              <!--end::Heading-->
              <!--begin::Description-->
              <div class="fw-bold fs-6 fs-lg-4 text-muted">
                Adquirir e receber os produtos no conforto da sua casa
              </div>
              <!--end::Description-->
            </div>
            <!--end::Story-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Product slider-->
        <div class="tns tns-default">
          <!--begin::Slider-->
          <div
            data-tns="true"
            data-tns-loop="true"
            data-tns-swipe-angle="false"
            data-tns-speed="2000"
            data-tns-autoplay="true"
            data-tns-autoplay-timeout="18000"
            data-tns-controls="true"
            data-tns-nav="false"
            data-tns-items="1"
            data-tns-center="false"
            data-tns-dots="false"
            data-tns-responsive="{1200: {items: 2}, 992: {items: 2}, 400: {items: 1}, 1900: {items: 2}}"
            data-tns-prev-button="#kt_team_slider_prev1"
            data-tns-next-button="#kt_team_slider_next1"
          >
            <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
              <img
                src="@/assets/_img/demonstration/demonstracao_1.jpeg"
                class="card-rounded shadow mw-100"
                alt=""
              />
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
              <img
                src="@/assets/_img/demonstration/demonstracao_2.jpeg"
                class="card-rounded shadow mw-100"
                alt=""
              />
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
              <img
                src="@/assets/_img/demonstration/demonstracao_3.jpeg"
                class="card-rounded shadow mw-100"
                alt=""
              />
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
              <img
                src="@/assets/_img/demonstration/demonstracao_4.jpeg"
                class="card-rounded shadow mw-100"
                alt=""
              />
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
              <img
                src="@/assets/_img/demonstration/demonstracao_5.jpeg"
                class="card-rounded shadow mw-100"
                alt=""
              />
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
              <img
                src="@/assets/_img/demonstration/demonstracao_6.jpeg"
                class="card-rounded shadow mw-100"
                alt=""
              />
            </div>
            <!--end::Item-->
          </div>
          <!--end::Slider-->
          <!--begin::Slider button-->
          <button
            class="btn btn-icon btn-active-color-primary"
            id="kt_team_slider_prev1"
          >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
            <span class="svg-icon svg-icon-3x">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--end::Slider button-->
          <!--begin::Slider button-->
          <button
            class="btn btn-icon btn-active-color-primary"
            id="kt_team_slider_next1"
          >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
            <span class="svg-icon svg-icon-3x">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--end::Slider button-->
        </div>
        <!--end::Product slider-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::How It Works Section-->
    <!--begin::Statistics Section-->
    <div class="mt-sm-n10">
      <!--begin::Curve top-->
      <div class="landing-curve landing-dark-color">
        <svg
          viewBox="15 -1 1470 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
      <!--end::Curve top-->
      <!--begin::Wrapper-->
      <div class="pb-15 pt-18 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
          <!--begin::Heading-->
          <div
            class="text-center mt-15 mb-18"
            id="achievements"
            data-kt-scroll-offset="{default: 100, lg: 150}"
          >
            <!--begin::Title-->
            <h3 class="fs-2hx text-white fw-bolder mb-5">
              Tornamos as coisas melhores
            </h3>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="fs-5 text-white fw-bold">
              Nós queríamos proporcionar um local onde você pudesse adquirir
              <br />
              produtos de vários segmentos dentro da área da saúde e movimento,
              com facilidade e qualidade
            </div>
            <!--end::Description-->
          </div>
          <!--end::Heading-->
          <!--begin::Statistics-->
          <div class="d-flex flex-center">
            <!--begin::Items-->
            <div
              class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px"
            >
              <!--begin::Item-->
              <div
                class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
              >
                <!--begin::Symbol-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <rect
                      x="2"
                      y="2"
                      width="9"
                      height="9"
                      rx="2"
                      fill="currentColor"
                    />
                    <rect
                      opacity="0.3"
                      x="13"
                      y="2"
                      width="9"
                      height="9"
                      rx="2"
                      fill="currentColor"
                    />
                    <rect
                      opacity="0.3"
                      x="13"
                      y="13"
                      width="9"
                      height="9"
                      rx="2"
                      fill="currentColor"
                    />
                    <rect
                      opacity="0.3"
                      x="2"
                      y="13"
                      width="9"
                      height="9"
                      rx="2"
                      fill="currentColor"
                    />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="mb-0">
                  <!--begin::Value-->
                  <div
                    class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center"
                  >
                    <div
                      class="min-w-70px"
                      data-kt-countup="true"
                      data-kt-countup-value="100"
                      data-kt-countup-suffix="+"
                    >
                      0
                    </div>
                  </div>
                  <!--end::Value-->
                  <!--begin::Label-->
                  <span
                    class="text-white fw-bold fs-5 lh-0"
                    style="font-weight: 600"
                    >Clientes satifeitos</span
                  >
                  <!--end::Label-->
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
              <!--begin::Item-->
              <div
                class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                style="
                  background-image: url('@/assets/media/svg/misc/octagon.svg');
                "
              >
                <!--begin::Symbol-->
                <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z"
                      fill="currentColor"
                    />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="mb-0">
                  <!--begin::Value-->
                  <div
                    class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center"
                  >
                    <div
                      class="min-w-70px"
                      data-kt-countup="true"
                      data-kt-countup-value="1"
                      data-kt-countup-suffix="+ ano"
                    >
                      0
                    </div>
                  </div>
                  <!--end::Value-->
                  <!--begin::Label-->
                  <span
                    class="text-white fw-bold fs-5 lh-0"
                    style="font-weight: 600"
                    >Ajudando as pessoas</span
                  >
                  <!--end::Label-->
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
              <!--begin::Item-->
              <div
                class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                style="
                  background-image: url('assets/media/svg/misc/octagon.svg');
                "
              >
                <!--begin::Symbol-->
                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                      fill="currentColor"
                    />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="mb-0">
                  <!--begin::Value-->
                  <div
                    class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center"
                  >
                    <div
                      class="min-w-70px"
                      data-kt-countup="true"
                      data-kt-countup-value="1000"
                      data-kt-countup-suffix="+"
                    >
                      0
                    </div>
                  </div>
                  <!--end::Value-->
                  <!--begin::Label-->
                  <span
                    class="text-white fw-bold fs-5 lh-0"
                    style="font-weight: 600"
                    >Produtos vendidos</span
                  >
                  <!--end::Label-->
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
            </div>
            <!--end::Items-->
          </div>
          <!--end::Statistics-->
          <!--begin::Testimonial-->
          <div class="fs-2 fw-bold text-muted text-center mb-3">
            <span class="fs-1 lh-1 text-white" style="font-weight: 700">“</span>
            <span class="text-white"
              >Nós prezamos muito pela qualidade e praticidade</span
            >
            <span class="fs-1 lh-1 text-white" style="font-weight: 700">“</span>
          </div>
          <!--end::Testimonial-->
          <!--begin::Author-->
          <div class="fs-2 fw-bold text-muted text-center">
            <span
              style="
                background: linear-gradient(to right, #12ce5d 0%, #ffd80c 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
              "
            >
              <span id="kt_landing_hero_text">MovimenteSIM</span>
            </span>
          </div>
          <!--end::Author-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::Wrapper-->
      <!--begin::Curve bottom-->
      <div class="landing-curve landing-dark-color">
        <svg
          viewBox="15 12 1470 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
      <!--end::Curve bottom-->
    </div>
    <!--end::Statistics Section-->
    <!--begin::Team Section-->
    <div class="py-10 py-lg-20">
      <!--begin::Container-->
      <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-12">
          <!--begin::Title-->
          <h3
            class="fs-2hx text-dark mb-5"
            id="team"
            data-kt-scroll-offset="{default: 100, lg: 150}"
          >
            Profissionais
          </h3>
          <!--end::Title-->
          <!--begin::Sub-title-->
          <!--<div class="fs-5 text-muted fw-bold">Profionais.
					</div>-->
          <!--end::Sub-title=-->
        </div>
        <!--end::Heading-->
        <!--begin::Slider-->
        <div class="tns tns-default">
          <!--begin::Wrapper-->
          <div
            data-tns="true"
            data-tns-loop="true"
            data-tns-swipe-angle="false"
            data-tns-speed="2000"
            data-tns-autoplay="true"
            data-tns-autoplay-timeout="18000"
            data-tns-controls="true"
            data-tns-nav="false"
            data-tns-items="1"
            data-tns-center="false"
            data-tns-dots="false"
            data-tns-prev-button="#kt_team_slider_prev"
            data-tns-next-button="#kt_team_slider_next"
            data-tns-responsive="{1200: {items: 2}, 992: {items: 2}}"
          >
            <!--begin::Item-->
            <div class="text-center">
              <!--begin::Photo-->
              <div
                class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                style="background-image: url('@/assets/_img/thais.jpg')"
              ></div>
              <!--end::Photo-->
              <!--begin::Person-->
              <div class="mb-0">
                <!--begin::Name-->
                <a href="#" class="text-dark fw-bolder text-hover-primary fs-3"
                  >Thaís Prado</a
                >
                <!--end::Name-->
                <!--begin::Position-->
                <div class="text-muted fs-6 fw-bold mt-1">
                  Fisioterapia no Idoso
                </div>
                <!--begin::Position-->
              </div>
              <!--end::Person-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="text-center">
              <!--begin::Photo-->
              <div
                class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                style="background-image: url('@/assets/_img/carol.jpg')"
              ></div>
              <!--end::Photo-->
              <!--begin::Person-->
              <div class="mb-0">
                <!--begin::Name-->
                <a href="#" class="text-dark fw-bolder text-hover-primary fs-3"
                  >Caroline Alcici</a
                >
                <!--end::Name-->
                <!--begin::Position-->
                <div class="text-muted fs-6 fw-bold mt-1">
                  Fisioterapia e Pilates
                </div>
                <!--begin::Position-->
              </div>
              <!--end::Person-->
            </div>
            <!--end::Item-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Button-->
          <button
            class="btn btn-icon btn-active-color-primary"
            id="kt_team_slider_prev"
          >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
            <span class="svg-icon svg-icon-3x">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--end::Button-->
          <!--begin::Button-->
          <button
            class="btn btn-icon btn-active-color-primary"
            id="kt_team_slider_next"
          >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
            <span class="svg-icon svg-icon-3x">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--end::Button-->
        </div>
        <!--end::Slider-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Team Section-->
    <!--begin::Projects Section-->
    <div
      class="mb-lg-n15 position-relative z-index-2"
      style="margin-bottom: 50px"
    >
      <!--begin::Container-->
      <div class="container">
        <!--begin::Card-->
        <div
          class="card"
          style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))"
        >
          <!--begin::Card body-->
          <div class="card-body p-lg-20">
            <!--begin::Heading-->
            <div class="text-center mb-5 mb-lg-10">
              <!--begin::Title-->
              <h3
                class="fs-2hx text-dark mb-5"
                id="portfolio"
                data-kt-scroll-offset="{default: 100, lg: 150}"
              >
                Produtos
              </h3>
              <!--end::Title-->
            </div>
            <!--end::Heading-->
            <!--begin::Tabs wrapper-->
            <!--<div class="d-flex flex-center mb-5 mb-lg-15">
							<ul class="nav border-transparent flex-center fs-5 fw-bold">
								<li class="nav-item">
									<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#"
										data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
										data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web
										Design</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
										data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile
										Apps</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
										data-bs-toggle="tab"
										data-bs-target="#kt_landing_projects_development">Development</a>
								</li>
							</ul>
						</div>-->
            <!--end::Tabs wrapper-->
            <!--begin::Tabs content-->
            <div class="tab-content">
              <!--begin::Tab pane-->
              <div
                class="tab-pane fade show active"
                id="kt_landing_projects_latest"
              >
                <!--begin::Row-->
                <div class="row g-10">
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay h-lg-100"
                      data-fslightbox="lightbox-basic"
                      href="@/assets/_img/products/product_1.jpeg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                        style="
                          background-image: url('@/assets/_img/products/product_1.jpeg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Row-->
                    <div class="row g-10 mb-10">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/_img/products/product_2.jpeg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/_img/products/product_2.jpeg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/_img/products/product_3.jpeg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/_img/products/product_3.jpeg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/_img/products/product_4.jpeg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="
                          background-image: url('@/assets/_img/products/product_4.jpeg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Row-->
                    <div class="row g-10 mb-10">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/_img/products/product_5.jpeg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/_img/products/product_5.jpeg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/_img/products/product_6.jpeg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/_img/products/product_6.jpeg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/_img/products/product_7.jpeg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="
                          background-image: url('@/assets/_img/products/product_7.jpeg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Row-->
                    <div class="row g-10 mb-10">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/_img/products/product_8.jpeg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/_img/products/product_8.jpeg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/_img/products/product_9.jpeg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/_img/products/product_9.jpeg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/_img/products/product_10.jpeg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="
                          background-image: url('@/assets/_img/products/product_10.jpeg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab pane-->
              <!--begin::Tab pane-->
              <div class="tab-pane fade" id="kt_landing_projects_web_design">
                <!--begin::Row-->
                <div class="row g-10">
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay h-lg-100"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/media/stock/600x600/img-11.jpg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                        style="
                          background-image: url('@/assets/media/stock/600x600/img-11.jpg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Row-->
                    <div class="row g-10 mb-10">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/media/stock/600x600/img-12.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/media/stock/600x600/img-12.jpg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/media/stock/600x600/img-21.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/media/stock/600x600/img-21.jpg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/media/stock/600x400/img-20.jpg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="
                          background-image: url('@/assets/media/stock/600x600/img-20.jpg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab pane-->
              <!--begin::Tab pane-->
              <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                <!--begin::Row-->
                <div class="row g-10">
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Row-->
                    <div class="row g-10 mb-10">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/media/stock/600x600/img-16.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/media/stock/600x600/img-16.jpg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/media/stock/600x600/img-12.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/media/stock/600x600/img-12.jpg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/media/stock/600x400/img-15.jpg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="
                          background-image: url('@/assets/media/stock/600x600/img-15.jpg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay h-lg-100"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/media/stock/600x600/img-23.jpg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                        style="
                          background-image: url('@/assets/media/stock/600x600/img-23.jpg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab pane-->
              <!--begin::Tab pane-->
              <div class="tab-pane fade" id="kt_landing_projects_development">
                <!--begin::Row-->
                <div class="row g-10">
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay h-lg-100"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/media/stock/600x600/img-15.jpg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                        style="
                          background-image: url('@/assets/media/stock/600x600/img-15.jpg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6">
                    <!--begin::Row-->
                    <div class="row g-10 mb-10">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/media/stock/600x600/img-22.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/media/stock/600x600/img-22.jpg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Item-->
                        <a
                          class="d-block card-rounded overlay"
                          data-fslightbox="lightbox-projects"
                          href="@/assets/media/stock/600x600/img-21.jpg"
                        >
                          <!--begin::Image-->
                          <div
                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                            style="
                              background-image: url('@/assets/media/stock/600x600/img-21.jpg');
                            "
                          ></div>
                          <!--end::Image-->
                          <!--begin::Action-->
                          <div
                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                          >
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                          </div>
                          <!--end::Action-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Item-->
                    <a
                      class="d-block card-rounded overlay"
                      data-fslightbox="lightbox-projects"
                      href="@/assets/media/stock/600x400/img-14.jpg"
                    >
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="
                          background-image: url('@/assets/media/stock/600x600/img-14.jpg');
                        "
                      ></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div
                        class="overlay-layer card-rounded bg-dark bg-opacity-25"
                      >
                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Item-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab pane-->
            </div>
            <!--end::Tabs content-->
          </div>
          <!--end::Card body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Projects Section-->
    <!--begin::Testimonials Section-->
    <div
      class="mt-20 mb-n20 position-relative z-index-2"
      style="margin-top: 13rem !important"
    >
      <!--begin::Container-->
      <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17">
          <!--begin::Title-->
          <h3
            class="fs-2hx text-dark mb-5"
            id="clients"
            data-kt-scroll-offset="{default: 125, lg: 150}"
          >
            Depoimentos
          </h3>
          <!--end::Title-->
          <!--begin::Description-->
          <div class="fs-5 text-muted fw-bold">
            Alguns dos depoimentos de clientes satisfeitos
          </div>
          <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row g-lg-10 mb-10 mb-lg-20">
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Testimonial-->
            <div
              class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
            >
              <!--begin::Wrapper-->
              <div class="mb-7">
                <!--begin::Rating-->
                <div class="rating mb-6">
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                </div>
                <!--end::Rating-->
                <!--begin::Title-->
                <div class="fs-2 fw-bolder text-dark mb-3">
                  Sobre nosso rolo de liberação miofascial
                </div>
                <!--end::Title-->
                <!--begin::Feedback-->
                <div class="text-gray-500 fw-bold fs-4">
                  Usei uma vez, mas gostei muito porque eu acho que alivia
                  bastante as dores do corpo.
                </div>
                <!--end::Feedback-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Author-->
              <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <!--<div class="symbol symbol-circle symbol-50px me-5">
									<img src="@/assets/media/avatars/300-1.jpg" class="" alt="" />
								</div>-->
                <!--end::Avatar-->
                <!--begin::Name-->
                <div class="flex-grow-1">
                  <a
                    href="#"
                    class="text-dark fw-bolder text-hover-primary fs-6"
                    >Magali Otubo</a
                  >
                  <!--<span class="text-muted d-block fw-bold">Development Lead</span>-->
                </div>
                <!--end::Name-->
              </div>
              <!--end::Author-->
            </div>
            <!--end::Testimonial-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Testimonial-->
            <div
              class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
            >
              <!--begin::Wrapper-->
              <div class="mb-7">
                <!--begin::Rating-->
                <div class="rating mb-6">
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                </div>
                <!--end::Rating-->
                <!--begin::Title-->
                <div class="fs-2 fw-bolder text-dark mb-3">
                  O presente no dia das mães e claro, sempre proporcionando O
                  SEU MELHOR MOVIMENTO
                </div>
                <!--end::Title-->
                <!--begin::Feedback-->
                <div class="text-gray-500 fw-bold fs-4">
                  Ganhei um par de meia da minha filha pra fazer hidroginástica,
                  é muito boa, não escorrega, tem umas borrachinhas em baixo e
                  fixa bem no chão. Estou muito feliz, uso sempre.
                </div>
                <!--end::Feedback-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Author-->
              <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <!--<div class="symbol symbol-circle symbol-50px me-5">
									<img src="@/assets/media/avatars/300-2.jpg" class="" alt="" />
								</div>-->
                <!--end::Avatar-->
                <!--begin::Name-->
                <div class="flex-grow-1">
                  <a
                    href="#"
                    class="text-dark fw-bolder text-hover-primary fs-6"
                    >Dirce Cortez</a
                  >
                  <!--<span class="text-muted d-block fw-bold">Development Lead</span>--->
                </div>
                <!--end::Name-->
              </div>
              <!--end::Author-->
            </div>
            <!--end::Testimonial-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Testimonial-->
            <div
              class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
            >
              <!--begin::Wrapper-->
              <div class="mb-7">
                <!--begin::Rating-->
                <div class="rating mb-6">
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                </div>
                <!--end::Rating-->
                <!--begin::Title-->
                <div class="fs-2 fw-bolder text-dark mb-3">
                  Iniciando a semana com clientes satisfeitos e entregando
                  nossos valores de qualidade e facilidade!
                </div>
                <!--end::Title-->
                <!--begin::Feedback-->
                <div class="text-gray-500 fw-bold fs-4">
                  Rápida entrega, atendimento de excelência e o melhor, preço
                  justo!
                </div>
                <!--end::Feedback-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Author-->
              <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <!--<div class="symbol symbol-circle symbol-50px me-5">
									<img src="assets/media/avatars/300-16.jpg" class="" alt="" />
								</div>-->
                <!--end::Avatar-->
                <!--begin::Name-->
                <div class="flex-grow-1">
                  <a
                    href="#"
                    class="text-dark fw-bolder text-hover-primary fs-6"
                    >Rosemeire Bastida</a
                  >
                  <!--<span class="text-muted d-block fw-bold">Development Lead</span>-->
                </div>
                <!--end::Name-->
              </div>
              <!--end::Author-->
            </div>
            <!--end::Testimonial-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Testimonial-->
            <div
              class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
            >
              <!--begin::Wrapper-->
              <div class="mb-7">
                <!--begin::Rating-->
                <div class="rating mb-6">
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                </div>
                <!--end::Rating-->
                <!--begin::Title-->
                <div class="fs-2 fw-bolder text-dark mb-3">
                  Levando o MELHOR MOVIMENTO para os pequenos também
                </div>
                <!--end::Title-->
                <!--begin::Feedback-->
                <div class="text-gray-500 fw-bold fs-4">
                  Oiii Carol, passando para parabenizar pelos cones! <br />
                  Os meninos do futebol amaram e tem ajudado muito nos treinos!!
                  <br />
                  Ah, já ia me esquecendo de parabenizar pela excelente
                  qualidade, pois já levou vários pisões e não quebrou hahahah
                </div>
                <!--end::Feedback-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Author-->
              <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <!--<div class="symbol symbol-circle symbol-50px me-5">
									<img src="@/assets/media/avatars/300-1.jpg" class="" alt="" />
								</div>-->
                <!--end::Avatar-->
                <!--begin::Name-->
                <div class="flex-grow-1">
                  <a
                    href="#"
                    class="text-dark fw-bolder text-hover-primary fs-6"
                    >Evelin Martinez</a
                  >
                  <!--<span class="text-muted d-block fw-bold">Development Lead</span>-->
                </div>
                <!--end::Name-->
              </div>
              <!--end::Author-->
            </div>
            <!--end::Testimonial-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Testimonial-->
            <div
              class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
            >
              <!--begin::Wrapper-->
              <div class="mb-7">
                <!--begin::Rating-->
                <div class="rating mb-6">
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                </div>
                <!--end::Rating-->
                <!--begin::Title-->
                <div class="fs-2 fw-bolder text-dark mb-3">
                  Sobre entregar o NOSSO MELHOR PARA VOCÊS
                </div>
                <!--end::Title-->
                <!--begin::Feedback-->
                <div class="text-gray-500 fw-bold fs-4">
                  Vocês são maravilhosos, atendimento super atencioso, a compra
                  fica facilitada por ser diretamente pelo WhatsApp e os
                  produtos são muito bons, com excelente material e um ótimo
                  custo benefícios.<br />
                  Ganharam mais um cliente
                </div>
                <!--end::Feedback-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Author-->
              <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <!--<div class="symbol symbol-circle symbol-50px me-5">
									<img src="@/assets/media/avatars/300-1.jpg" class="" alt="" />
								</div>-->
                <!--end::Avatar-->
                <!--begin::Name-->
                <div class="flex-grow-1">
                  <a
                    href="#"
                    class="text-dark fw-bolder text-hover-primary fs-6"
                    >Isabella Pereira</a
                  >
                  <!--<span class="text-muted d-block fw-bold">Development Lead</span>-->
                </div>
                <!--end::Name-->
              </div>
              <!--end::Author-->
            </div>
            <!--end::Testimonial-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Testimonial-->
            <div
              class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
            >
              <!--begin::Wrapper-->
              <div class="mb-7">
                <!--begin::Rating-->
                <div class="rating mb-6">
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                  <div class="rating-label me-2 checked">
                    <i class="bi bi-star-fill fs-5"></i>
                  </div>
                </div>
                <!--end::Rating-->
                <!--begin::Title-->
                <div class="fs-2 fw-bolder text-dark mb-3">
                  Fisioterapeuta e paciente satisfeitos, obtendo O MELHOR
                  MOVIMENTO
                </div>
                <!--end::Title-->
                <!--begin::Feedback-->
                <div class="text-gray-500 fw-bold fs-4">
                  A compra foi muito efeciente!<br />
                  Eu amei o atendimento, a disposição e atenção! Comprei para
                  meu paciente usar e me ajudou muito para a realização dos
                  exercícios.<br />
                  E ele também amou se sentiu mais seguro com a tornozeleira!<br />
                  Obrigada
                </div>
                <!--end::Feedback-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Author-->
              <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <!--<div class="symbol symbol-circle symbol-50px me-5">
									<img src="@/assets/media/avatars/300-1.jpg" class="" alt="" />
								</div>-->
                <!--end::Avatar-->
                <!--begin::Name-->
                <div class="flex-grow-1">
                  <a
                    href="#"
                    class="text-dark fw-bolder text-hover-primary fs-6"
                    >Maria Olivia</a
                  >
                  <!--<span class="text-muted d-block fw-bold">Development Lead</span>-->
                </div>
                <!--end::Name-->
              </div>
              <!--end::Author-->
            </div>
            <!--end::Testimonial-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Highlight-->
        <div
          class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
          style="background: linear-gradient(90deg, #20aa3e 0%, #f7a72f 100%)"
        >
          <!--begin::Content-->
          <div class="my-2 me-5">
            <!--begin::Title-->
            <div class="fs-1 fs-lg-2qx fw-bolder text-white mb-2">
              Quer realizer uma
              <span class="fw-normal">compra?</span>
            </div>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="fs-6 fs-lg-5 text-white fw-bold opacity-75">
              Tire suas dúvidas e garanta seu produto com qualidade e
              facilidade!
            </div>
            <!--end::Description-->
          </div>
          <!--end::Content-->
          <!--begin::Link-->
          <a
            href="https://api.whatsapp.com/message/UZUG2BWPZ5WZF1?autoload=1&app_absent=0"
            class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2"
            target="_blank"
            >Entrar em contato</a
          >
          <!--end::Link-->
        </div>
        <!--end::Highlight-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Testimonials Section-->
    <!--begin::Footer Section-->
    <div class="mb-0">
      <!--begin::Curve top-->
      <div class="landing-curve landing-dark-color">
        <svg
          viewBox="15 -1 1470 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
      <!--end::Curve top-->
      <!--begin::Wrapper-->
      <div class="landing-dark-bg pt-20">
        <!--begin::Container-->
        <div class="container">
          <!--begin::Row-->
          <div class="row py-10 py-lg-20">
            <!--begin::Col-->
            <!--<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
							<div class="rounded landing-dark-border p-9 mb-10">
								<h2 class="text-white">Would you need a Custom License?</h2>
								<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support"
										class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
							</div>
							<div class="rounded landing-dark-border p-9">
								<h2 class="text-white">How About a Custom Project?</h2>
								<span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
									<a href="../../demo1/dist/pages/user-profile/overview.html"
										class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
							</div>
						</div>-->
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-12 ps-lg-16">
              <!--begin::Navs-->
              <div class="d-flex justify-content-center">
                <!--begin::Links-->
                <div class="d-flex fw-bold flex-column me-20">
                  <!--begin::Subtitle-->
                  <h4
                    class="fw-bolder text-white mb-6"
                    style="font-weight: 600"
                  >
                    Mais sobre MovimenteSIM
                  </h4>
                  <!--end::Subtitle-->
                  <!--begin::Link-->
                  <a
                    href="https://tr.ee/m3P9lYGv2a"
                    class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                    >Dúvidas</a
                  >
                  <!--end::Link-->
                  <!--begin::Link-->
                  <a
                    href="https://linktr.ee/movimentesim"
                    class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                    >Linktre</a
                  >
                  <!--end::Link-->
                  <!--begin::Link-->
                  <a
                    href="https://drive.google.com/file/d/13x1_hh3cmY5doWVikLHnEgXPWdYNR15y/view"
                    class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                    >Catálago de produtos</a
                  >
                  <!--end::Link-->
                  <!--begin::Link-->
                  <!--<a href="../../demo1/dist/documentation/getting-started/changelog.html"
										class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>-->
                  <!--end::Link-->
                  <!--begin::Link-->
                  <!--<a href="https://devs.keenthemes.com/"
										class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>-->
                  <!--end::Link-->
                  <!--begin::Link-->
                  <!--<a href="https://keenthemes.com/blog"
										class="text-white opacity-50 text-hover-primary fs-5">Blog</a>-->
                  <!--end::Link-->
                </div>
                <!--end::Links-->
                <!--begin::Links-->
                <div class="d-flex fw-bold flex-column ms-lg-20">
                  <!--begin::Subtitle-->
                  <h4
                    class="fw-bolder text-white mb-6"
                    style="font-weight: 600"
                  >
                    Rede sociais
                  </h4>
                  <!--end::Subtitle-->
                  <!--begin::Link-->
                  <a href="https://web.facebook.com/thais.pfisio" class="mb-6">
                    <img
                      src="@/assets/media/svg/brand-logos/facebook-4.svg"
                      class="h-20px me-2"
                      alt=""
                    />
                    <span
                      class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                      >Facebook (Thaís)</span
                    >
                  </a>
                  <!--end::Link-->
                  <!--begin::Link-->
                  <!--<a href="https://github.com/KeenthemesHub" class="mb-6">
										<img src="@/assets/media/svg/brand-logos/github.svg" class="h-20px me-2"
											alt="" />
										<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
									</a>-->
                  <!--end::Link-->
                  <!--begin::Link-->
                  <!--<a href="https://twitter.com/keenthemes" class="mb-6">
										<img src="@/assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2"
											alt="" />
										<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
									</a>-->
                  <!--end::Link-->
                  <!--begin::Link-->
                  <!--<a href="https://dribbble.com/keenthemes" class="mb-6">
										<img src="@/assets/media/svg/brand-logos/dribbble-icon-1.svg"
											class="h-20px me-2" alt="" />
										<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
									</a>-->
                  <!--end::Link-->
                  <!--begin::Link-->
                  <a
                    href="https://www.instagram.com/movimentesim/"
                    class="mb-6"
                  >
                    <img
                      src="@/assets/media/svg/brand-logos/instagram-2-1.svg"
                      class="h-20px me-2"
                      alt=""
                    />
                    <span
                      class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                      >Instagram</span
                    >
                  </a>
                  <!--end::Link-->
                </div>
                <!--end::Links-->
              </div>
              <!--end::Navs-->
            </div>
            <!--end::Col-->
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
        <!--begin::Separator-->
        <div class="landing-dark-separator"></div>
        <!--end::Separator-->
        <!--begin::Container-->
        <div class="container">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
            <!--begin::Copyright-->
            <div class="d-flex align-items-center order-2 order-md-1">
              <!--begin::Logo-->
              <!--<a href="../../demo1/dist/landing.html">
								<img alt="Logo" src="@/assets/media/logos/logo-landing.svg" class="h-15px h-md-20px" />
							</a>-->
              <span
                style="
                  background: linear-gradient(
                    to right,
                    #12ce5d 0%,
                    #ffd80c 100%
                  );
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                "
              >
                <span id="kt_landing_hero_text">MovimenteSIM</span>
              </span>
              <!--end::Logo image-->
              <!--begin::Logo image-->
              <span
                class="mx-5 fs-6 fw-bold text-white pt-1"
                style="font-weight: 600"
              >
                © 2023 Todos os direitos de MovimenteSIM. Desenvolvido por
                <a href="https://thainanprado.com.br" style="color: #f7a72f"
                  >Thainan Prado</a
                >
              </span>
              <!--end::Logo image-->
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul
              class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0"
            >
              <li class="menu-item">
                <a
                  href="#how-it-works"
                  target="_blank"
                  class="menu-link px-2 text-white"
                  >Sobre</a
                >
              </li>
              <li class="menu-item mx-5">
                <a
                  href="https://api.whatsapp.com/message/UZUG2BWPZ5WZF1?autoload=1&app_absent=0"
                  target="_blank"
                  class="menu-link text-white px-2"
                  >Entrar em contato</a
                >
              </li>
              <!--<li class="menu-item">
								<a href="" target="_blank" class="menu-link px-2">Purchase</a>
							</li>-->
            </ul>
            <!--end::Menu-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Footer Section-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
      <span class="svg-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
        >
          <rect
            opacity="0.5"
            x="13"
            y="6"
            width="13"
            height="2"
            rx="1"
            transform="rotate(90 13 6)"
            fill="currentColor"
          />
          <path
            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
            fill="currentColor"
          />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
  </div>
</template>

<script>
export default {
  name: "HomeComponent",
  props: {},
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.material-symbols-outlined {
  font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 48;
}
</style>
