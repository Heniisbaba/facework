<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../../assets/demo/default/media/img/logo/favicon.ico" />

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.10/dist/summernote.min.css" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">

    <!-- Animate CSS -->
    <link rel="stylesheeet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
      crossorigin="anonymous">
    <link rel="stylesheeet" href="css/fontawesome-all.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
    <!-- Custom styles for this template -->
    <link href="../../css/cover.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102627835-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-102627835-1');
</script>

     <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-102627835-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->   
    
  </head>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/9712be8772.js"></script>
</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="../../images/logo.png"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
			<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
								
								</ul>
							</div>
							<!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										
										
										
										<li style="margin-top: 10px; " class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
                        <img style="margin-top:10px;     border: 1px solid rgba(16, 224, 64, 0.78); height: 40px; width:42px;" alt="click_me" src="{{ Auth::user()->profile->image }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-topbar__username m--hide">
													
                        </span>
                      
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
                              <img src="" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span style="color:#fff; font-size:12px;" class="m-card-user__name m--font-weight-500">
																	 {{ Auth::user()->name }} 
																</span>
																<a style="color:#fff; font-size:10px;" href="" class="m-card-user__email m--font-weight-300 m-link">
																	 {{ Auth::user()->email }} 
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
                                  </li>
                                    @role('Admin') {{-- Laravel-permission blade helper --}}
                                    <li class="m-nav__item">
                                      <a href="/users" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                        <span class="m-nav__link-title">
                                          <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">
                                              Visit Admin Dashboard
                                            </span>
                                            <span class="m-nav__link-badge">
                                              <span class="m-badge m-badge--success">
                                                
                                              </span>
                                            </span>
                                          </span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                    @endrole
                                                                
																<li class="m-nav__item">
                                      <a href="{{ route('profile.index', Auth::user()->id ) }}" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                        <span class="m-nav__link-title">
                                          <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">
                                               Dashboard
                                            </span>
                                            <span class="m-nav__link-badge">
                                             
                                            </span>
                                          </span>
                                        </span>
                                      </a>
                                    </li>
                                <li class="m-nav__separator m-nav__separator--fit"></li>
																
																<li class="m-nav__item">
                                <a href="{{ route('task.show', Auth::user()->id) }}" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																		<span class="m-nav__link-text">
																			Messages
                                    </span>
                                    <span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						{{-- {{ Auth::user()->task->count() }} --}}
																					</span>
                                        </span>
                                      </span>
                                    </span>
																	</a>
                                                                </li>
                                                                
                                                                
															
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-logout"></i>
																		<span class="m-nav__link-text">
																			Log out
																		</span>
                                                                    </a>
                                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
	<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		m-menu-vertical="1"
		 m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item " aria-haspopup="true">
								<a href="{{'/'}}" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Go back home
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													
												</span>
											</span>
										</span>
									</span>
								</a>
							</li>
              <li class="m-menu__item " aria-haspopup="true">
								<a href="{{'/users'}}" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Dashboard
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													
												</span>
											</span>
										</span>
									</span>
								</a>
							</li>

               <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-share"></i>
									<span class="m-menu__link-text">
										User Management
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu " m-hidden-height="160" style="">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										 <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
											<a href="{{ route('roles.index') }}" class="m-menu__link">
											<i class="m-menu__link-icon flaticon-user-settings"></i>
											<span class="m-menu__link-text">
											Roles
											</span>   
											</a>   
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
											<a href="{{ route('permissions.index') }}" class="m-menu__link">
											<i class="m-menu__link-icon flaticon-user-settings"></i>
											<span class="m-menu__link-text">
											Permissions
											</span>
											</a>   
										</li>

									</ul>
								</div>
							</li>
						
			       <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
								<a href="{{ route('broadcast.create') }}" class="m-menu__link">
								<i class="m-menu__link-icon flaticon-user-settings"></i>
								<span class="m-menu__link-text">
								Send Broadcast 
								</span>
								</a>   
							</li>

							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
									<a href="{{ route('advert.create') }}" class="m-menu__link">
									<i class="m-menu__link-icon flaticon-user-settings"></i>
									<span class="m-menu__link-text">
									Adverts
									</span>
									</a>   
								</li>

								<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
									<a href="{{ route('terms.create') }}" class="m-menu__link">
									<i class="m-menu__link-icon flaticon-user-settings"></i>
									<span class="m-menu__link-text">
									Term of Use
									</span>
									</a>   
								</li>

							
								<li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
									<a href="javascript:;" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-share"></i>
										<span class="m-menu__link-text">
											Job Board
										</span>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="m-menu__submenu " m-hidden-height="160" style="">
										<span class="m-menu__arrow"></span>
										<ul class="m-menu__subnav">
												<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
														<a href="{{ route('job.index') }}" class="m-menu__link">
														<i class="m-menu__link-icon flaticon-user-settings"></i>
														<span class="m-menu__link-text">
														View Job Posts
														</span>   
														</a>
											 <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
												<a href="{{ route('job.create') }}" class="m-menu__link">
												<i class="m-menu__link-icon flaticon-user-settings"></i>
												<span class="m-menu__link-text">
												Add Job Post
												</span>   
												</a>   
											</li>
											<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
												<a href="{{ route('job_category.create') }}" class="m-menu__link">
												<i class="m-menu__link-icon flaticon-user-settings"></i>
												<span class="m-menu__link-text">
												Jobs Category
												</span>
												</a>   
											</li>
	
										</ul>
									</div>
								</li>
              
             
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Dashboard
								</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Section-->
					
						
						<!--End::Section-->
<!--Begin::Section-->
						<div class="row">
							
							<div class="col-md-12">
                <!--begin:: Packages-->
                
                  @if(Session::has('flash_message'))
                    <div class="container">      
                        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                        </div>
                    </div>
				@endif 
				 <div class="container"> 
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">              
                            @include ('errors.list') {{-- Including error file --}}
                        </div>
                    </div>
                </div>
                 
                @yield('content')
                
                
                <!--end:: Packages-->
							</div>
						</div>
						<!--End::Section-->
<!--Begin::Section-->
				
							
						</div>
						<!--End::Section-->
					</div>
				</div>
			
			<!-- end:: Body -->
<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
									<script>document.write(new Date().getFullYear())</script>&copy; Facework
								
							</span>
						</div>
						{{-- <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Purchase
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div> --}}
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
		
		<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<!--
			
			-->
			
		</ul>
		<!-- begin::Quick Nav -->	
		{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script> --}}
   
    	<!--begin::Base Scripts -->
		<script src="../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
		{{-- <script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script> --}}
		<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
		<script src="../assets/app/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
		{{-- D3.js --}}
		<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
		<script>

//  $('.confirm').click(() => {
//    $('.confirm').
// })

$(document).ready(function() {
    $('.m_datatable__table').DataTable();
});
		  var data = [30, 86, 168, 281, 303, 365];

			d3.select(".chart")
				.selectAll("div")
				.data(data)
					.enter()
					.append("div")
					.style("width", function(d) { return d + "px"; })
					.text(function(d) { return d; });

					
		</script>
	</body>
	<!-- end::Body -->
</html>
