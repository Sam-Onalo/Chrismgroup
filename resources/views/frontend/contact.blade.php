<x-frontend-layout>
    @push('styles')
        <style>
            .gm-style .gm-style-iw .icon-inline {
                position: relative;
                display: block;
                padding-left: 25px;
                text-align: left !important;
            }
            .gm-style .gm-style-iw .icon-inline .icon-styled {
                position: absolute;
                left: 0;
                top: 4px
            }
            .gm-style .gm-style-iw .icon-inline .icon-styled + span {
                margin-right: 0px;
            }
        </style>
    @endpush
    @section('page-title', "Contact Us")

    <section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>About Us</h1>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Company</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Contact Us
                            </li>
                        </ol>
                    </div>

                </div>


            </div>
        </div>
    </section>


    <section class="ls  container-px-xl-0">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6 col-xl-7 ls ">
                    <div class="special-column">
                        <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                        <h2 class="special-heading text-left">
                            <span class="text-capitalize">
                                Drop Us A Line
                            </span>
                        </h2>
                        {{-- {{ dd($errors)}} --}}
                        <div class="divider-line bg-maincolor"></div>
                        <div class="fw-divider-space divider-25"></div>
                        <p class="special-heading text-left">
                            <span>
                                We are a purpose-driven team determined to make a difference in quality and affordable service delivery
                            </span>
                        </p>
                        <div class="divider-50 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <form class="contact-form" method="post">
                            @csrf
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="name335x5553">Full Name <span class="required">*</span></label>
                                        <i class="fas fa-user"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="name" id="name335x5553" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="email333">Email address<span class="required">*</span></label>
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" aria-required="true" size="30" value="" name="email" id="email333" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="name3355553">Phone Number <span class="required">*</span></label>
                                        <i class="fas fa-phone"></i>
                                        <input type="tel" aria-required="true" size="30" value="" name="phone" id="name3355553" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-placeholder">
                                        <label for="name3355d553">Subject <span class="required">*</span></label>
                                        <i class="fas fa-paperclip"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="subject" id="name3355d553" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="message335553">Message</label>
                                        <i class="fas fa-edit"></i>
                                        <textarea aria-required="true" rows="8" cols="45" name="message" id="message335553" class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row c-mb-10 c-gutter-10">
                                <div class="col-sm-12 mb-0 mt-lg-50 mt-30">
                                    <div class="form-group">
                                        <input class="btn btn-gradient big-btn" type="submit" value="Send message">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 text-sm-left text-center ls ms animate animated scaleAppear" data-animation="scaleAppear">
                    <div class="special-column2">
                        <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                        <div class="media text-center text-sm-left">
                            <div class="icon-styled fs-60 color-main">
                                <i class="ico ico-location"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="">
                                    Our Address
                                </h6>
                                <p class="">Chrism Oil Complex, Uyo-Oron Road (Airport Road) Mbiabong Ikot Essien, Uyo LGA, Akwa Ibom State, Nigeria</p>
                            </div>
                        </div>
                        <div class="divider-50 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <div class="divider-line bg-maincolor text-center"></div>
                        <div class="divider-60 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <div class="media text-center text-sm-left">
                            <div class="icon-styled fs-60 color-main">
                                <i class="ico ico-call"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="">
                                    Our Number
                                </h6>
                                <p class="">+234 (0) 915 644 8187<br> +234 (0) 907 428 2914</p>
                            </div>
                        </div>
                        <div class="divider-50 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <div class="divider-line bg-maincolor text-center"></div>
                        <div class="divider-60 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <div class="media text-center text-sm-left">
                            <div class="icon-styled fs-60 color-main">
                                <i class="ico ico-email"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="">
                                    Our Email
                                </h6>
                                <p class="">operations.control@chrismgroup.com<br> shipping@chrismgroup.com</p>
                            </div>
                        </div>
                        <div class="divider-50 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <div class="divider-line bg-maincolor text-center"></div>
                        <div class="divider-60 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <span class="social-icons">
                            <a href="https://www.linkedin.com/in/chrism-oil-nigeria-limited-46038b228/" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="Facebook Chrism Oil"></a>
							<a href="https://web.facebook.com/chrismoil" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="Linkedin Chrism Oil"></a>
							<a href="https://www.linkedin.com/in/chrism-shipping-services-limited-a67174212/" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="Facebook Chrism Shipping"></a>
                        </span>
                        <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>

                    </div>
                </div>
                <!--.col-* -->
            </div>
        </div>
    </section>

    <section class="ls s-py-0 container-px-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms page_map d-none" data-draggable="false" data-scrollwheel="false" style="display: none !important">
                        <div class="marker">
                            <div class="marker-address">Chrism Cooking Gas Refilling Plant and Fuel Station, A342, 520102, Uyo</div>
                            <div class="marker-title">Reach Us</div>
                            <div class="marker-description" style="text-align: left">

                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon-inline">
                                            <span class="icon-styled color-main">
                                                <i class="fa fa-map-marker"></i>
                                            </span>

                                            <span>
                                                Chrism Oil Complex, Uyo-Oron Road (Airport Road) Mbiabong Ikot Essien, Uyo LGA, Akwa Ibom State, Nigeria
                                            </span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="icon-inline">
                                            <span class="icon-styled color-main">
                                                <i class="fa fa-phone"></i>
                                            </span>

                                            <span>
                                                +234 (0) 816 849 7792
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon-inline">
                                            <span class="icon-styled color-main">
                                                <i class="fa fa-envelope"></i>
                                            </span>

                                            <span>
                                                operations.control@chrismgroup.com
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <img class="marker-icon" src="{{ asset('frontend/images/map_marker_icon.png') }}" alt="">
                        </div>
                    </div>
                    <div id="map" class="page_map"></div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // Initialize and add the map
            function initMap() {
                // alert("OK")
                // The location of Uluru
                // 4.989525,7.9698913
                const uluru = { lat: 4.9895253842441845, lng: 7.969891824618353 };
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: uluru,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    icon: "{{ asset('frontend/images/map_marker_icon.png') }}"
                });
            }
        </script>
        <!-- Google Map Script -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}&callback=initMap"></script>
        @if(session()->has('success'))
        <script>
            $(document).ready( () => {
                Notiflix.Report.success("Hurray, We got your mail", "{{ session()->get('success') }}", "Close");
            });
        </script>
        @endif
    @endpush

</x-frontend-layout>
