@extends('layouts.main')

@section('content')
<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center">
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Header Logo-->
							<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
								<a href="/">
									<img alt="Logo" src="assets/images/bank_dki_white.svg" class="logo-default h-25px" />
									<img alt="Logo" src="assets/images/bank_dki_white.svg" class="logo-sticky h-25px" />
								</a>
							</div>
							<!--end::Header Logo-->
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bold my-1 fs-3">Menu Utama</h1>
								<!--end::Title-->
							</div>
							<!--end::Page title-->
						
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::About card-->
							<div id="card_main_menu" class="card">
								<!--begin::Body-->
								<div class="card-body p-lg-17">
									<!--begin::Meet-->
									<div class="mb-18">
										<!--begin::Wrapper-->
										<div class="mb-11">
											<!--begin::Top-->
											<div class="mb-18">
												<!--begin::Title-->
												<h3 class="fs-2hx text-dark mb-6 text-center">Cabang di sekitar kamu</h3>
												<!--end::Title-->
												<!--begin::Text-->
													<div class="row">
														<div class="col-md-4"></div>
														<div class="col-md-4">
															<!--begin::Search Bar-->
													<form data-kt-search-element="form" class="w-100 position-relative mb-5 mt-3 card-flush" autocomplete="off">
													<!--begin::Hidden input(Added to disable form autocomplete)-->
													<input type="hidden">
													<!--end::Hidden input-->
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-lg form-control-solid px-15 text-center" name="search" value="" placeholder="Cari Kantor Cabang Bank DKI" data-kt-search-element="input">
													<!--end::Input-->
													<!--begin::Spinner-->
													<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Reset-->
												</form>
												<!--End::Search Bar-->
														</div>
														<div class="col-md-4"></div>
													</div>
												</div>
												<!--end::Text-->
												<!--begin::Posts-->
												<div class="mb-10 mt-5" id="kt_social_feeds_posts">
													<!--begin::Post 1-->
													<!--begin::Card-->
													<div class="card card-flush mb-10">
														<!--begin::Card header-->
														<div class="card-header pt-9">
															<div class="d-flex flex-column">
																<div class="p-2"><img src="assets/media/icons/bankdki/kantorcabang.svg"></div>
																<div class="p-2"><h3>2.2 km</h3></div>
															</div>
															<!--begin::Author-->
															<div class="d-flex align-items-center">
																<!--begin::Info-->
																<div class="flex-grow-1">
																	
																	<!--begin::Name-->
																	<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold"> <h1> KCP Suryopranoto</h1> </a>
																	<!--end::Name-->
																	<!--begin::Address-->
																	<span > <h3 class="text-gray-400 fw-semibold d-block mt-2">Jl. Suryo Pranoto No. 8, Jakarta Pusat</h3>	</span>
																	<!--end::Address-->	
																					
																</div>
																<!--end::Info-->
															</div>
															<!--end::Author-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu wrapper-->
																<div class="m-0">
																	<!--begin::Menu toggle-->
																	<a href="/pilih-cabang" class="btn btn-danger text-light">Reservasi</a>
																	<!--end::Menu toggle-->
																</div>
																<!--end::Menu wrapper-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body">
															<!--begin::Post content-->
															<div class="fs-6 fw-normal text-gray-700"></div>
															<!--end::Post content-->
														</div>
														<!--end::Card body-->
													
													</div>
													<!--end::Card-->
													<!--end::Post 1-->
												
													<!--begin::Post 2-->
													<!--begin::Card-->
													<div class="card card-flush mb-10">
														<!--begin::Card header-->
														<div class="card-header pt-9">
															<div class="d-flex flex-column">
																<div class="p-2"><img src="assets/media/icons/bankdki/kantorcabang.svg"></div>
																<div class="p-2"><h3>3.7 km</h3></div>
															</div>
															<!--begin::Author-->
															<div class="d-flex align-items-center">
																<!--begin::Info-->
																<div class="flex-grow-1">
																	
																	<!--begin::Name-->
																	<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold"> <h1> KC Juanda </h1> </a>
																	<!--end::Name-->
																	<!--begin::Address-->
																	<span > <h3 class="text-gray-400 fw-semibold d-block mt-2">Jl. Ir. H. Juanda III No. 7-9, Jakarta Pusat</h3>	</span>
																	<!--end::Address-->	
																					
																</div>
																<!--end::Info-->
															</div>
															<!--end::Author-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu wrapper-->
																<div class="m-0">
																	<!--begin::Menu toggle-->
																	<a href="/pilih-cabang" class="btn btn-danger text-light">Reservasi</a>
																	<!--end::Menu toggle-->
																</div>
																<!--end::Menu wrapper-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body">
															<!--begin::Post content-->
															<div class="fs-6 fw-normal text-gray-700"></div>
															<!--end::Post content-->
														</div>
														<!--end::Card body-->
													
													</div>
													<!--end::Card-->
													<!--end::Post 2-->
													
												</div>
												<!--end::Posts-->
											</div>
											<!--end::Top-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Meet-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::About card-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		
@endsection