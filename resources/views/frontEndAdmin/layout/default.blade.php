<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>Admin master</title>
		<script type="text/javascript" src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/ckfinder/ckfinder.js')}}"></script>

		<!-- Vendor CSS -->
		
		@yield('css')

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/core.css')}}">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			<div class="site-overlay"></div>
			<div class="site-sidebar">
				<div class="custom-scroll custom-scroll-light">
					<ul class="sidebar-menu">
						<li class="menu-title">Main</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="tag tag-purple">3</span>
								<span class="s-icon"><i class="ti-anchor"></i></span>
								<span class="s-text">Dashboard</span>
							</a>
							<ul>
								<li><a href="index.html">Dashboard 1</a></li>
								<li><a href="index2.html">Dashboard 2</a></li>
								<li><a href="index3.html">Dashboard 3</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-layout-tab"></i></span>
								<span class="s-text">Layouts</span>
							</a>
						</li>
						<li>
							<a href="#" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Skins</span>
							</a>
						</li>
						<li class="menu-title">Components</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-gallery"></i></span>
								<span class="s-text">Page</span>
							</a>
							<ul>
								<li><a href="/admin/getListCategories">Danh mục</a></li>
								<li><a href="/admin/getListBlog" >Tin tức  <span class="tag tag-danger"> 100</span></a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-paint-bucket"></i></span>
								<span class="s-text">UI Kit</span>
							</a>
							<ul>
								<li><a href="ui-arrows.html">Arrows</a></li>
								<li><a href="ui-buttons.html">Buttons</a></li>
								<li><a href="ui-cards.html">Cards</a></li>
								<li><a href="ui-carousel.html">Carousel</a></li>
								<li><a href="ui-dropdowns.html">Dropdowns</a></li>
								<li><a href="ui-flags.html">Flags</a></li>
								<li><a href="ui-grid.html">Grid</a></li>
								<li><a href="ui-modal.html">Modal</a></li>
								<li><a href="ui-navs.html">Navs</a></li>
								<li><a href="ui-notifications.html">Notifications</a></li>
								<li><a href="ui-progress.html">Progress</a></li>
								<li><a href="ui-spinners.html">Spinners</a></li>
								<li><a href="ui-typography.html">Typography</a></li>
								<li><a href="ui-other.html">Other</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-pencil-alt"></i></span>
								<span class="s-text">Forms</span>
							</a>
							<ul>
								<li><a href="forms-basic.html">Basic Elements</a></li>
								<li><a href="forms-editors.html">Editors</a></li>
								<li><a href="forms-masks.html">Form Masks</a></li>
								<li><a href="forms-material.html">Material Form</a></li>
								<li><a href="forms-pickers.html">Form Pickers</a></li>
								<li><a href="forms-upload.html">File Upload</a></li>
								<li><a href="forms-wizard.html">Form Wizard</a></li>
								<li><a href="forms-plugins.html">Plugins</a></li>
								<li><a href="forms-range-slider.html">Range Slider</a></li>
								<li><a href="forms-typeahead.html">Typeahead</a></li>
								<li><a href="forms-xeditable.html">X-editable</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-menu-alt"></i></span>
								<span class="s-text">Tables</span>
							</a>
							<ul>
								<li><a href="tables-basic.html">Basic Tables</a></li>
								<li><a href="tables-datatable.html">Data Tables</a></li>
								<li><a href="tables-editable.html">Editable Tables</a></li>
								<li><a href="tables-jsgrid.html">jsGrid Tables</a></li>
								<li><a href="tables-responsive.html">Responsive Tables</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="tag tag-success">3</span>
								<span class="s-icon"><i class="ti-gallery"></i></span>
								<span class="s-text">Pages</span>
							</a>
							<ul>
								<li><a href="pages-blank.html">Blank</a></li>
								<li><a href="pages-contactform.html">Contact Form</a></li>
								<li><a href="pages-403.html">Error 403</a></li>
								<li><a href="pages-404.html">Error 404</a></li>
								<li><a href="pages-500.html">Error 500</a></li>
								<li><a href="pages-faq.html">FAQ</a></li>
								<li><a href="pages-invoice.html">Invoice</a></li>
								<li><a href="pages-profile.html">Profile</a></li>
								<li><a href="pages-reset-password.html">Reset Password</a></li>
								<li><a href="pages-sign-in.html">Sign In</a></li>
								<li><a href="pages-sign-in2.html">Sign In 2</a></li>
								<li><a href="pages-sign-up.html">Sign Up</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-view-grid"></i></span>
								<span class="s-text">Apps</span>
							</a>
							<ul>
								<li><a href="apps-chat.html">Chat</a></li>
								<li><a href="apps-contacts.html">Contacts</a></li>
								<li><a href="apps-inbox.html">Inbox</a></li>
							</ul>
						</li>
						<li class="menu-title">More</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="tag tag-info">6</span>
								<span class="s-icon"><i class="ti-bar-chart-alt"></i></span>
								<span class="s-text">Charts</span>
							</a>
							<ul>
								<li><a href="charts-chartjs.html">Chart.js</a></li>
								<li><a href="charts-chartist.html">Chartist Chart</a></li>
								<li><a href="charts-easy.html">Easy Pie Chart</a></li>
								<li><a href="charts-flot.html">Flot Chart</a></li>
								<li><a href="charts-morris.html">Morris Chart</a></li>
								<li><a href="charts-peity.html">Peity Chart</a></li>
								<li><a href="charts-sparkline.html">Sparkline Chart</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-location-pin"></i></span>
								<span class="s-text">Maps</span>
							</a>
							<ul>
								<li><a href="maps-google.html">Google Map</a></li>
								<li><a href="maps-vector.html">Vector Map</a></li>
							</ul>
						</li>
						<li>
							<a href="calendar.html" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-calendar"></i></span>
								<span class="s-text">Calendar</span>
							</a>
						</li>
						<li class="with-sub compact-hide">
							<a href="javascript: void(0);" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-menu"></i></span>
								<span class="s-text">Menu Levels</span>
							</a>
							<ul>
								<li class="with-sub">
									<a href="javascript: void(0);">
										<span class="s-caret"><i class="fa fa-angle-down"></i></span>
										<span class="s-text">Level 1</span>
									</a>
									<ul>
										<li class="with-sub">
											<a href="javascript: void(0);">
												<span class="s-caret"><i class="fa fa-angle-down"></i></span>
												<span class="s-text">Level 1.2</span>
											</a>
											<ul>
												<li class="with-sub">
													<a href="javascript: void(0);">
														<span class="s-caret"><i class="fa fa-angle-down"></i></span>
														<span class="s-text">Level 1.2.3</span>
													</a>
													<ul>
														<li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
														<li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
													</ul>
												</li>
												<li><a href="javascript: void(0);">Level 1.2.3</a></li>
											</ul>
										</li>
										<li><a href="javascript: void(0);">Level 1.2</a></li>
									</ul>
								</li>
								<li><a href="javascript: void(0);">Level 1</a></li>
							</ul>
						</li>
						<li class="menu-title compact-hide">System usage</li>
						<li class="compact-hide">
							<div class="progress-widget progress-widget-light">
								<div class="mb-0-5">
									SSD
									<span class="float-xs-right">5 GB</span>
								</div>
								<progress class="progress progress-rounded progress-success progress-sm" value="60" max="100">100%</progress>
								<div class="mb-0-5">
									CPU
									<span class="float-xs-right">80%</span>
								</div>
								<progress class="progress progress-rounded progress-danger progress-sm mb-0-5" value="80" max="100">100%</progress>
							</div>
						</li>
						<li class="menu-title compact-hide">Tags</li>
						<li class="compact-hide">
							<a href="javascript: void(0);" class="waves-effect  waves-light">
								<span class="s-icon"><i class="fa fa-circle-o text-danger"></i></span>
								<span class="s-text">Ideas</span>
							</a>
						</li>
						<li class="compact-hide">
							<a href="javascript: void(0);" class="waves-effect  waves-light">
								<span class="s-icon"><i class="fa fa-circle-o text-warning"></i></span>
								<span class="s-text">Projects</span>
							</a>
						</li>
						<li class="compact-hide">
							<a href="documentation.html" class="waves-effect  waves-light">
								<span class="s-icon"><i class="fa fa-circle-o text-primary"></i></span>
								<span class="s-text">Documentation</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- Sidebar second -->
			<div class="site-sidebar-second custom-scroll custom-scroll-dark">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="index.html#tab-1" role="tab">Chat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="index.html#tab-2" role="tab">Activity</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="index.html#tab-3" role="tab">Todo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="index.html#tab-4" role="tab">Settings</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-1" role="tabpanel">
						<div class="sidebar-chat animated fadeIn">
							<div class="sidebar-group">
								<h6>Favorites</h6>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">John Doe</span>
									<span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
								</a>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">Vance Osborn</span>
								</a>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-danger"></span>
									<span class="sc-name">Wolfe Stevie</span>
									<span class="tag tag-primary">7</span>
								</a>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-warning"></span>
									<span class="sc-name">Jonathan Mel</span>
								</a>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-secondary"></span>
									<span class="sc-name">Carleton Josiah</span>
								</a>
							</div>
							<div class="sidebar-group">
								<h6>Work</h6>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-secondary"></span>
									<span class="sc-name">Larry Hal</span>
								</a>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">Ron Carran</span>
									<span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
								</a>
							</div>
							<div class="sidebar-group">
								<h6>Social</h6>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-success"></span>
									<span class="sc-name">Lucius Skyler</span>
									<span class="tag tag-primary">3</span>
								</a>
								<a class="text-black" href="index.html#">
									<span class="sc-status bg-danger"></span>
									<span class="sc-name">Landon Graham</span>
								</a>
							</div>
						</div>
						<div class="sidebar-chat-window animated fadeIn">
							<div class="scw-header clearfix">
								<a class="text-grey float-xs-left" href="index.html#"><i class="ti-angle-left"></i> Back</a>
								<div class="float-xs-right">
									<strong>Jonathan Mel</strong>
									<div class="avatar box-32">
										<img src="img/avatars/5.jpg" alt="">
										<span class="status bg-success top right"></span>
									</div>
								</div>
							</div>
							<div class="scw-item">
								<span>Hello!</span>
							</div>
							<div class="scw-item self">
								<span>Meeting at 16:00 in the conference room. Remember?</span>
							</div>
							<div class="scw-item">
								<span>No problem. Thank's for reminder!</span>
							</div>
							<div class="scw-item self">
								<span>Prepare to be amazed.</span>
							</div>
							<div class="scw-item">
								<span>Good. Can't wait!</span>
							</div>
							<div class="scw-form">
								<form>
									<input class="form-control" type="text" placeholder="Type...">
									<button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-2" role="tabpanel">
						<div class="sidebar-activity animated fadeIn">
							<div class="notifications">
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
												<span class="n-icon bg-danger"><i class="ti-pin-alt"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">uploaded <a class="text-black" href="index.html#">monthly report</a></div>
											<div class="text-muted font-90">12 minutes ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
												<span class="n-icon bg-success"><i class="ti-comment"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="index.html#">Vance Osborn</a> <span class="text-muted">commented </span> <a class="text-black" href="index.html#">Project</a></div>
											<div class="n-comment my-0-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
											<div class="text-muted font-90">3 hours ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
												<span class="n-icon bg-danger"><i class="ti-email"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="index.html#">Ron Carran</a> <span class="text-muted">send you files</span></div>
											<div class="row row-sm my-0-5">
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/1.jpg" alt="">
												</div>
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/2.jpg" alt="">
												</div>
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/3.jpg" alt="">
												</div>
											</div>
											<div class="text-muted font-90">30 minutes ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
												<span class="n-icon bg-primary"><i class="ti-plus"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="index.html#">Larry Hal</a> <span class="text-muted">invited you to </span><a class="text-black" href="index.html#">Project</a></div>
											<div class="text-muted font-90">10:58</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-3" role="tabpanel">
						<div class="sidebar-todo animated fadeIn">
							<div class="sidebar-group">
								<h6>Important</h6>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Mock up</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Prototype iPhone</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Build final version</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Approval docs</span>
									</label>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Secondary</h6>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Website redesign</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Skype call</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Blog post</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-4" role="tabpanel">
						<div class="sidebar-settings animated fadeIn">
							<div class="sidebar-group">
								<h6>Main</h6>
								<div class="ss-item">
									<div class="text-truncate">Anyone can register</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Allow commenting</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Allow deleting</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Notificatiоns</h6>
								<div class="ss-item">
									<div class="text-truncate">Commits</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Messages</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Security</h6>
								<div class="ss-item">
									<div class="text-truncate">Daily backup</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">API Access</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Template options -->
			<div class="template-options">
				<div class="to-toggle"><i class="ti-settings"></i></div>
				<div class="custom-scroll custom-scroll-dark">
					<div class="to-content">
						<a class="btn btn-info btn-block waves-effect waves-light mb-2" href="https://themeforest.net/item/neptune-dashboard-ui-kit-for-web-application-development/18519415?ref=demo" target="_blank">BUY NOW $24</a>
						<h6>Layouts</h6>
						<div class="row mb-2 text-xs-center">
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<a href="index.html">
										<img src="img/layouts/default.png" class="img-fluid">
									</a>
									<div class="text-muted">Default</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="compact-sidebar" type="checkbox">
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/compact-sidebar.png" class="img-fluid">
									</label>
									<div class="text-muted">Compact Sidebar</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="fixed-header" type="checkbox" checked>
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/fixed-header.png" class="img-fluid">
									</label>
									<div class="text-muted">Fixed Header</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="fixed-sidebar" type="checkbox" checked>
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/sticky-sidebar.png" class="img-fluid">
									</label>
									<div class="text-muted">Sticky Sidebar</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="boxed-wrapper" type="checkbox">
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/boxed-wrapper.png" class="img-fluid">
									</label>
									<div class="text-muted">Boxed Wrapper</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="static" type="checkbox">
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/static.png" class="img-fluid">
									</label>
									<div class="text-muted">Static</div>
								</div>
							</div>
						</div>
						<h6>Skins</h6>
						<div class="row">
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-default" type="radio" checked>
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="skin-dark-blue"></span>
										<span class="skin-white"></span>
										<span class="skin-dark-blue"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-1" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="skin-dark-blue-2"></span>
										<span class="skin-dark-blue-2"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-2" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-danger"></span>
										<span class="bg-white"></span>
										<span class="bg-black"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-3" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-white"></span>
										<span class="bg-white"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-4" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-white"></span>
										<span class="skin-dark-blue-2"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-5" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-primary"></span>
										<span class="bg-primary"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-6" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-black"></span>
										<span class="bg-info"></span>
										<span class="bg-black"></span>
									</div>
								</label>
							</div>
						</div>
						<div class="to-material">
							<div class="tom-checkbox"><input name="material-design" type="checkbox" class="js-switch" data-size="small" data-color="#20b9ae"></div>
							<div class="text-truncate">Material design</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header -->
			<div class="site-header">
				<nav class="navbar navbar-light">
					<div class="navbar-left">
						<a class="navbar-brand" href="index.html">
							<div class="logo"><img src="{{asset('images/logo-slux.png')}}" width="100%"></div>
						</a>
						<div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second dark float-xs-right hidden-md-up">
							<i class="ti-arrow-left"></i>
						</div>
						<div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
							<span class="more"></span>
						</div>
					</div>
					<div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
						<div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second light float-xs-right hidden-sm-down">
							<i class="ti-arrow-left"></i>
						</div>
						<ul class="nav navbar-nav float-md-right">
							<li class="nav-item dropdown">
								<a class="nav-link" href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-flag-alt"></i>
									<span class="hidden-md-up ml-1">Tasks</span>
									<span class="tag tag-success top">3</span>
								</a>
								<div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">First Task</a>
											<span class="float-xs-right text-muted">75%</span>
										</div>
										<progress class="progress progress-danger progress-sm" value="75" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/2.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">5 min ago</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">Second Task</a>
											<span class="float-xs-right text-muted">40%</span>
										</div>
										<progress class="progress progress-purple progress-sm" value="40" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/3.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">15:07</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">Third Task</a>
											<span class="float-xs-right text-muted">100%</span>
										</div>
										<progress class="progress progress-warning progress-sm" value="100" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/4.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">yesterday</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">Fourth Task</a>
											<span class="float-xs-right text-muted">60%</span>
										</div>
										<progress class="progress progress-success progress-sm" value="60" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/5.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">3 days ago</span>
									</div>
									<a class="dropdown-more" href="index.html#">
										<strong>View all tasks</strong>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-email"></i>
									<span class="hidden-md-up ml-1">Notifications</span>
									<span class="tag tag-danger top">12</span>
								</a>
								<div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="m-item">
										<div class="mi-icon bg-info"><i class="ti-comment"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">commented post</span> <a class="text-black" href="index.html#">Lorem ipsum dolor</a></div>
										<div class="mi-time">5 min ago</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="index.html#">Lorem ipsum dolor</a></div>
										<div class="mi-time">15:07</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-purple"><i class="ti-user"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">followed</span> <a class="text-black" href="index.html#">Kate Doe</a></div>
										<div class="mi-time">yesterday</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="index.html#">Lorem ipsum dolor</a></div>
										<div class="mi-time">3 days ago</div>
									</div>
									<a class="dropdown-more" href="index.html#">
										<strong>View all notifications</strong>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="{{asset('images/user.png')}}" alt="">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right animated fadeInUp">
									<a class="dropdown-item" href="index.html#">
										<i class="ti-email mr-0-5"></i> Inbox
									</a>
									<a class="dropdown-item" href="index.html#">
										<i class="ti-user mr-0-5"></i> Profile
									</a>
									<a class="dropdown-item" href="index.html#">
										<i class="ti-settings mr-0-5"></i> Settings
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="index.html#"><i class="ti-help mr-0-5"></i> Help</a>
									<a class="dropdown-item" href="{{url('/logout')}}"><i class="ti-power-off mr-0-5"></i> Sign out</a>
								</div>
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="nav-item hidden-sm-down">
								<a class="nav-link toggle-fullscreen" href="index.html#">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a class="nav-link" href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-layout-grid3"></i>
								</a>
								<div class="dropdown-apps dropdown-menu animated fadeInUp">
									<div class="a-grid">
										<div class="row row-sm">
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>
														<div class="ai-title">Dropbox</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>
														<div class="ai-title">Github</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>
														<div class="ai-title">Wordpress</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>
														<div class="ai-title">Gmail</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>
														<div class="ai-title">Drive</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>
														<div class="ai-title">Dribbble</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<a class="dropdown-more" href="index.html#">
										<strong>View all apps</strong>
									</a>
								</div>
							</li>
						</ul>
						<div class="header-form float-md-left ml-md-2">
							<form>
								<input type="text" class="form-control b-a" placeholder="Search for...">
								<button type="submit" class="btn bg-white b-a-0">
									<i class="ti-search"></i>
								</button>
							</form>
						</div>
					</div>
				</nav>
			</div>

			<div class="site-content">
				<!-- Content -->
				@yield('content')
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-xs-center">
							<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
								2016 © Neptune
							</div>
							<div class="col-sm-8 text-sm-right">
								<ul class="nav nav-inline l-h-2">
									<li class="nav-item"><a class="nav-link text-black" href="index.html#">Privacy</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="index.html#">Terms</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="index.html#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

		</div>

		<!-- Vendor JS -->
		
		@yield('js')
		<script type="text/javascript">
			function confirmDelete(msg){
	            if(window.confirm(msg)){
	                return true;
	            }
	            else{
	                return false;
	            }

	        }
	        
	    </script>
	    <script type="text/javascript">
	    	$("div.alert").delay(5000).slideUp();
	    </script>
	</body>
</html>