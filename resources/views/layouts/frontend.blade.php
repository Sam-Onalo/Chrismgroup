@php
    $post = get_random_post();
@endphp
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta http-equiv="content-language" content="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="oil and gas, DPK, PMS, petroleum products, shipping, logistics, chrismgroup, products, ecommerce">
	<meta name="author" content="Chrismgroup">
	<meta name="publisher" content="Chrismgroup">
	<meta name="copyright" content="Chrismgroup">
	<meta name="description" content="Chirsmgroup is an independent petroleum products marketers trading  only on refined petroleum products such as Premium Motor Spirits (PMS), Dual Purpose Kerosene (DPK) Auto Gas Oil (AGO) and engine oil">
	<meta name="page-topic" content="Media">
	<meta name="page-type" content="Blogging">
	<meta name="audience" content="Everyone">
	<meta name="robots" content="index, follow">
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<title>@yield('page-title', isset($pageTitle) && $pageTitle != '' ? $pageTitle : 'Home') - Chrism Group</title>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/animations.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome5.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('frontend/css/shop.css') }}" class="color-switcher-link">

    <style>
        .toggle_menu.mobile-active {
            background-color: #298FA6
        }
        .sf-menu {
            border-color: #F29E38
        }
        .page_header.ds.affix {
            background-color: #053959 !important
        }
        .ds, .ds * .ds, [class*=-item] .links-wrap a.link-zoom, .post-type-archive-fw-team [class*=col-]:nth-child(odd) .item-content, .post-type-archive-fw-team .owl-item:nth-child(even) .item-content, .tax-fw-team-category [class*=col-]:nth-child(odd) .item-content, .tax-fw-team-category .owl-item:nth-child(even) .item-content, .team-carousel [class*=col-]:nth-child(odd) .item-content, .team-carousel .owl-item:nth-child(even) .item-content {
            background-color: #053959;
        }
        [role=tablist] .card-header a, .ls h1, .ls h2, .ls h3, .ls h4, .ls h5, .ls h6, .ds .ls h1, .ds .ls h2, .ds .ls h3, .ds .ls h4, .ds .ls h5, .ds .ls h6 {
            color: #053959
        }
        .border-bottom-link {
            font-weight: 600;
            color: #053959;
            text-transform: uppercase;
            position: relative;
        }
        .border-bottom-link:before {
            content: '';
            position: absolute;
            width: 20%;
            background-color: #053959;
            height: 3px;
            position: absolute;
            bottom: -6px;
            transition: .6s;
        }
        .border-bottom-link:hover:before {
            width: 100%
        }

        @media (max-width: 1199px) {
            .sf-arrows .sf-with-ul+.sf-menu-item-mobile-toggler {
                top: 0;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
    </style>

    @stack('styles')

	<script src="{{ asset('frontend/js/vendor/modernizr-2.6.2.min.js') }}"></script>

	<!--[if lt IE 9]>
		<script src="{{ asset('frontend/js/vendor/html5shiv.min.js') }}"></script>
		<script src="{{ asset('frontend/js/vendor/respond.min.js') }}"></script>
		<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="#pages-missing">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>
	<div id="team-form" class="ds modal">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="form-wrapper ls rounded">
						<form class="contact-form" method="post" action="#pages-missing">
							<div class="row c-mb-20">
								<div class="col-12 form-title text-center form-builder-item">
									<div class="header title">
										<h4><span class="thin">Contact</span> me</h4>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="name333">Full Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name333" class="form-control" placeholder="Your name">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="phone35533">Email address<span class="required">*</span></label>
										<input type="tel" aria-required="true" size="30" name="phone" id="phone35533" class="form-control" placeholder="Phone Number">
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="message333">Message</label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="message333" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12 mb-0 mt-10 text-center">
									<div class="form-group">
										<input class="btn btn-gradient" type="submit" value="Contact me">
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>


		</div>


	</div>


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<div class="header_absolute">
				<!--eof topline-->
				<!-- header with two Bootstrap columns - left for logo and right for navigation -->
				<header class="page_header_side header_slide header-special header_side_right ds">

					<div class="scrollbar-macosx">
						<div class="side_header_inner pb-5">
							<p class="text-right mb-0 close-wrapper"><a href="javascript:void(0)">×</a></p>

							<div class="widget widget_recent_posts">

								<h3 class="widget-title">Insights</h3>
                                @if ($post)
								<ul class="list-unstyled">
									<li class="media">
										<article class="vertical-item  post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-content">
												<div class="entry-header">
													<div class="entry-meta">
														<div class="byline">
															<span class="date">
																<a href="blog-@@type.html" rel="bookmark">
																	<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
																</a>
															</span>
															<span class="author vcard">
																<a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> {{ $post->user->name }}</a>
															</span>
														</div>
													</div>
													<h4 class="entry-title">
														<a href="{{ route('blog.show', $post->slug) }}" rel="bookmark">
															{{ $post->title }}
														</a>
													</h4>

													<!-- .entry-meta -->
												</div>
												<!-- .entry-header -->
											</div><!-- .item-content -->
										</article>
									</li>
								</ul>
                                @endif
							</div>
							<div class="widget widget_about">
								<h3 class="widget-title">About</h3>
								<p>
									We render top notch oil, gas and shipping services across countries, no loss, fully insured, thriving to ensure best service delivery by our friendly and respectful employees.
								</p>
                                <button class="btn btn=primary" onclick="window.location.href = '{{ route('about') }}'">About Us</button>
							</div>
							<div class="widget widget_mailchimp">
								<h3 class="widget-title">Newsletter</h3>

								<form class="signup" action="#">
									<label for="mailchimp_email88d">
										<span class="screen-reader-text">Subscribe:</span>
									</label>
									<input id="mailchimp_email88d" name="email" type="email" class="form-control mailchimp_email has-placeholder" placeholder="Email">
									<button type="submit" class="search-submit">
										<span class="screen-reader-text">Subscribe</span>
									</button>
									<div class="response"></div>
								</form>
							</div>
							<div class="widget widget_social_icons">
								<a href="https://www.linkedin.com/in/chrism-oil-nigeria-limited-46038b228/" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="Facebook Chrism Oil"></a>
								<a href="https://web.facebook.com/chrismoil" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="Linkedin Chrism Oil"></a>
								<a href="https://www.linkedin.com/in/chrism-shipping-services-limited-a67174212/" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="Facebook Chrism Shipping"></a>
							</div>
						</div>
					</div>
				</header>

				<header class="page_header header-1 ds bg-transparent s-py-xl-20 s-py-10 ">

					<div class="container-fluid">

						<div class="row d-flex align-items-center justify-content-center">
							<div class="col-xl-3 col-md-4 col-12 text-center">
								<a href="{{ route('home') }}" class="logo">
									<img src="{{ asset('frontend/images/logo.png') }}" alt="" class="mr-2">
									<span class="d-flex flex-column">
										<span class="logo-text color-darkgrey">Chrism</span>
										<span class="logo-subtext">Group</span>
									</span>
								</a>
							</div>
							<div class="col-xl-6 col-1 text-right">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">

										<li>
											<a href="{{ route('services.logistics') }}">Shipping</a>
										</li>

										<li>
											<a href="{{ route('services.oil') }}">Oil</a>
										</li>

										<li>
											<a href="{{ route('services.gas') }}">Gas</a>
										</li>

                                        {{-- @php
                                            $pages = App\Models\ACME\Page::whereIsRoot()->get();
                                        @endphp --}}

										{{-- <li class="active">
											<a href="{{ route('home') }}">Home</a>
										</li> --}}

                                        {{-- @foreach ($pages as $page)
										<li>
											<a href="{{ route($page->route) }}">{{ explode(' ', $page->title)[0] }}</a>
                                                @php
                                                    $subpages = $page->descendants;
                                                    $split = ceil($subpages->count() / 2);
                                                @endphp
                                                @if ($subpages->count() > 0)
											<div class="mega-menu">

												<ul class="mega-menu-row">

                                                    @foreach ($subpages as $subpage)
                                                        @if ($loop->index == 0)
                                                        <li class="mega-menu-col"> <ul>
                                                        @endif
                                                        <li>
                                                            <a href="{{ route($subpage->route) }}">{{ $subpage->title }}</a>
                                                        </li>
                                                        @if ($loop->index + 1 == $split)
                                                        </ul></li> <li class="mega-menu-col"> <ul>
                                                        @endif
                                                        @if ($loop->index + 1 == $subpages->count())
                                                        </ul></li>
                                                        @endif
                                                    @endforeach
												</ul>
											</div> <!-- eof mega menu -->
                                            @endif
										</li>
                                        @endforeach --}}

                                        {{-- <li class="mega-menu-col">
                                            <ul>
                                                <li>
                                                    <a href="header1.html">Shipping Agency</a>
                                                </li>
                                                <li>
                                                    <a href="header2.html">Bunkering/fresh water supplies</a>
                                                </li>
                                                <li>
                                                    <a href="header3.html">Supercargo Operations</a>
                                                </li>
                                            </ul>
                                        </li> --}}

                                        <!-- shop -->
                                        <li>
                                            <a href="{{ route('blog.index') }}">News & Insight</a>
                                            {{-- <ul>
                                                <li>
                                                    <a href="shop-account-dashboard.html">Account</a>
                                                    <ul>

                                                        <li>
                                                            <a href="shop-account-details.html">Account details</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-addresses.html">Addresses</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-address-edit.html">Edit Address</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-orders.html">Orders</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-order-single.html">Single Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-downloads.html">Downloads</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-password-reset.html">Password Reset</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-login.html">Login/Logout</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop-full.html">Full layout</a>
                                                </li>
                                                <li>
                                                    <a href="shop-right.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-right.html">Product Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-left.html">Product Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-received.html">Order Received</a>
                                                </li>

                                            </ul> --}}
                                        </li>
                                        <!-- eof shop -->

                                        <li>
											<a href="{{ route('careers') }}">Company</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('careers') }}">Careers</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Contact Us</a>
                                                </li>
                                            </ul>
										</li>

									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							<div class="col-xl-3 col-md-7 col-12  d-flex justify-content-md-end">
								<ul class="top-includes">
									<li class="metaphone">
										<a href="tel:+2349156448187">915 644 8187</a>
									</li>
									<li class="special-menu">
										<span class="toggle_menu toggle_menu_side header-slide toggle_menu_side_special"><span></span></span>
									</li>
								</ul>


							</div>

						</div>

					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span>menu</span></span>
				</header>
			</div>

			{{ $slot }}


			<footer class="page_footer text-center c-gutter-100 text-sm-left ds">
				<div class="container">
					<div class="row justify-content-center">

						<div class="col-lg-4 col-md-6 order-1 order-lg-1  animate" data-animation="fadeInUp">
							<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
							<a href="{{ route('home') }}" class="logo">
								<img src="{{ asset('frontend/images/logo.png') }}" alt="" class="mr-2">
								<span class="d-flex flex-column">
									<span class="logo-text color-darkgrey">Chrism</span>
									<span class="logo-subtext">Group</span>
								</span>
							</a>
							<p>
								Chrism Group is a conglomerate of over five business entities registered in Nigeria. The Group has interest in clean and renewable energy solution, oil and gas, medical and pharmaceuticals, real estate and maritime shipping services.
							</p>
							<a href="https://www.linkedin.com/in/chrism-oil-nigeria-limited-46038b228/" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="Facebook Chrism Oil"></a>
							<a href="https://web.facebook.com/chrismoil" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="Linkedin Chrism Oil"></a>
							<a href="https://www.linkedin.com/in/chrism-shipping-services-limited-a67174212/" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="Facebook Chrism Shipping"></a>
							<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-60 divider-30"></div>
						</div>

						<div class="col-lg-4 col-md-12 ls order-3 order-lg-2 footer-special-column text-center animate" data-animation="fadeInUp">
							<div class="form-wrapper">
								<form class="contact-form" action="{{ route('contact') }}" method="post">
                                    @csrf
									<div class="row c-mb-20">
										<div class="col-12 form-title text-center form-builder-item">
											<div class="header title">
												<h2>Write Us</h2>
											</div>
										</div>
									</div>
									<div class="row c-mb-10 c-gutter-10">
										<div class="col-lg-12 text-center">
											<div class="form-group has-placeholder">
												<label for="name22335x5553">Full Name <span class="required">*</span></label>
												<input type="text" aria-required="true" size="30" value="" name="name" id="name22335x5553" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
											</div>
										</div>
									</div>
									<div class="row c-mb-10 c-gutter-10">
										<div class="col-lg-12 text-center">
											<div class="form-group has-placeholder">
												<label for="name223355553">Email or Phone Number<span class="required">*</span></label>

												<input type="text" aria-required="true" size="30" value="" name="contact" id="name223355553" class="form-control" placeholder="Email or Phone Number" value="{{ old('contact') }}">
											</div>
										</div>
									</div>
									<div class="row c-mb-10 c-gutter-10">
										<div class="col-sm-12 text-center">
											<div class="form-group has-placeholder">
												<label for="message22335553">Message</label>

												<textarea aria-required="true" rows="6" cols="45" name="message" id="message22335553" class="form-control" placeholder="Your Message" value="{{ old('message') }}"></textarea>
											</div>
										</div>
									</div>
									<div class="row c-mb-10 c-gutter-10">
										<div class="col-sm-12 mb-0 mt-50">
											<div class="form-group">
												<input class="btn btn-gradient big-btn" type="submit" value="Send message">
											</div>
										</div>
									</div>
								</form>
							</div>
							<h6 class="fs-12 text-uppercase">&copy; Copyright <span class="copyright_year">{{ now()->format('Y') }}</span> All Rights Reserved</h6>
						</div>

						<div class="col-lg-4 col-md-6 order-2 order-lg-3 animate" data-animation="fadeInUp">
							<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90"></div>
							<div class="widget widget_icons_list">
								<ul>
									<li class="icon-inline ">
										<div class="icon-styled icon-top  bordered round fs-16">
											<i class="fas fa-phone"></i>
										</div>
										<p>
                                            +234 (0) 915 644 8187
                                            <br>
                                            +234 (0) 907 428 2914
                                            {{-- <br>
                                            +234 815 508 3300 --}}
                                        </p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top bordered round  fs-16">
											<i class="fas fa-envelope"></i>


										</div>
										<p>
                                            <a href="mailto:operations.control@chrismgroup.com">Operations Control</a>
                                            <br>
                                            <a href="mailto:shipping@chrismgroup.com">Shipping</a>
                                        </p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top bordered round  fs-16">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<p>
											Chrism Oil Complex
                                            <br>
                                            Uyo-Oron Road (Airport Road) Mbiabong Ikot Essien, <br>
                                            Uyo LGA, Akwa Ibom State, <br> Nigeria
										</p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top bordered round  fs-16">
											<i class="fas fa-clock"></i>
										</div>
										<p>
											Mon-Sat: 6am - 10pm<br>
											Sun: 6am - 9pm
										</p>
									</li>
								</ul>
							</div>
							<div class="fw-divider-space divider-xl-90 divider-lg-60 divider-md-60 divider-30"></div>
						</div>
					</div>
				</div>

			</footer>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.2/dist/notiflix-aio-3.2.2.min.js"></script>
    <script src="{{ asset('frontend/js/compressed.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	<!-- Start of Async Drift Code -->
	<script>
		"use strict";

		!function() {
			var t = window.driftt = window.drift = window.driftt || [];
			if (!t.init) {
				if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
				t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
				t.factory = function(e) {
				return function() {
					var n = Array.prototype.slice.call(arguments);
					return n.unshift(e), t.push(n), t;
				};
				}, t.methods.forEach(function(e) {
				t[e] = t.factory(e);
				}), t.load = function(t) {
					var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
					o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
					var i = document.getElementsByTagName("script")[0];
					i.parentNode.insertBefore(o, i);
				};
			}
		}();
		drift.SNIPPET_VERSION = '0.3.1';
		drift.load('xxmcy3f7k8xe');
	</script>
	<!-- End of Async Drift Code -->

    <script>
        jQuery(function($) {

            /**
             * This small plugin will scrollTo a target, smoothly
             *
             * First argument = time to scroll to the target
             * Second argument = set the hash in the current url yes or no
             */
            $.fn.smoothScroll = function(t, setHash) {
                // Set time to t variable to if undefined 500 for 500ms transition
                t = t || 500;
                setHash = (typeof setHash == 'undefined') ? true : setHash;

                // Return this as a proper jQuery plugin should
                return this.each(function() {
                    $('html, body').animate({
                        scrollTop: $(this).offset().top - ($('.page_header').height() + 50)
                    }, t);

                    // Lets set the hash to the current ID since if an event was prevented this doesn't get done
                    if (this.id && setHash) {
                        window.location.hash = this.id;
                    }
                });
            };

        });

        $(document).ready(function() {
            if (window.location.hash) {
                window.scrollTo(0, 0);
                $(window.location.hash).smoothScroll();
            }
        });

        $(document).ready( function() {
            var targetNodes         = $("a#toTop");
            var MutationObserver    = window.MutationObserver || window.WebKitMutationObserver;
            var myObserver          = new MutationObserver (mutationHandler);
            var obsConfig           = { childList: true, characterData: true, attributes: true, subtree: true };

            console.log(targetNodes);

            //--- Add a target node to the observer. Can only add one node at a time.
            targetNodes.each ( function () {
                myObserver.observe (this, obsConfig);
            } );

            function mutationHandler (mutationRecords) {
                mutationRecords.forEach ( function (mutation) {
                    $(mutation.target).remove();
                    // if($(mutation.target).css('display') == 'block') {
                    //     $('#drift-frame-chat, #drift-frame-controller').css('transform', 'translateY(-80px)').fadeIn()
                    // } else {
                    //     $('#drift-frame-chat, #drift-frame-controller').css('transform', 'translateY(0px)').fadeIn()
                    // }
                } );
            }
        });
    </script>

    @stack('scripts')

	<!-- Google Map Script -->
	{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap"></script> --}}

</body>

</html>
