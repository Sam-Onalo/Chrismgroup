<x-frontend-layout>
    @section('page-title', 'Shipping Services')

    @push('styles')
        <style>
            body .grid {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 1rem;
            }

            @media (min-width: 992px) {
                body .grid {
                    grid-template-columns: repeat(3, 1fr);
                    grid-gap: 3rem;
                }
            }

            .card_custom {
                --background: #fff;
                --background-checkbox: #0082ff;
                --background-image: #fff, rgba(0, 107, 175, 0.2);
                --text-color: #666;
                --text-headline: #000;
                --card-shadow: #0082ff;
                --card-height: 100%;
                --card-width: 100%;
                --card-radius: 12px;
                --header-height: 130px;
                --blend-mode: overlay;
                --transition: 0.15s;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .card_custom:nth-child(odd) .card__body-cover-image {
                --x-y1: 100% 90%;
                --x-y2: 67% 83%;
                --x-y3: 33% 90%;
                --x-y4: 0% 85%;
            }

            .card_custom:nth-child(even) .card__body-cover-image {
                --x-y1: 100% 85%;
                --x-y2: 73% 93%;
                --x-y3: 25% 85%;
                --x-y4: 0% 90%;
            }

            .card__input {
                position: absolute;
                display: block;
                outline: none;
                border: none;
                background: none;
                padding: 0;
                margin: 0;
                -webkit-appearance: none;
            }

            .card__input:hover~.card__body {
                --shadow: 0 0 0 3px var(--card-shadow);
            }

            .card__input:hover~.card__body .card__body-cover-checkbox {
                --check-bg: var(--background-checkbox);
                --check-border: #fff;
                --check-scale: 1;
                --check-opacity: 1;
            }

            .card__input:hover~.card__body .card__body-cover-checkbox--svg {
                --stroke-color: #fff;
                --stroke-dashoffset: 0;
            }

            .card__input:hover~.card__body .card__body-cover:after {
                --opacity-bg: 0;
            }

            .card__input:hover~.card__body .card__body-cover-image {
                --filter-bg: grayscale(0);
            }

            .card__input:disabled~.card__body {
                cursor: not-allowed;
                opacity: 0.5;
            }

            .card__input:disabled~.card__body:active {
                --scale: 1;
            }

            .card__body {
                display: grid;
                grid-auto-rows: calc(var(--card-height) - var(--header-height)) auto;
                background: var(--background);
                width: var(--card-width);
                border-radius: var(--card-radius);
                overflow: hidden;
                position: relative;
                cursor: pointer;
                /* box-shadow: var(--shadow, 0 4px 4px 0 rgba(0, 0, 0, 0.02)); */
                box-shadow: var(--shadow, 0 1px 4px 0 rgba(0, 0, 0, 0.15));
                transition: transform var(--transition), box-shadow var(--transition);
                transform: scale(var(--scale, 1)) translateZ(0);
                font-family: work sans, sans-serif;
            }

            .card__body:active {
                --scale: 0.96;
            }

            .card__body-cover {
                --c-border: var(--card-radius) var(--card-radius) 0 0;
                --c-width: 100%;
                --c-height: 100%;
                position: relative;
                overflow: hidden;
            }

            .card__body-cover:after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: var(--c-width);
                height: var(--c-height);
                border-radius: var(--c-border);
                background: linear-gradient(to bottom right, var(--background-image));
                mix-blend-mode: var(--blend-mode);
                opacity: var(--opacity-bg, 1);
                transition: opacity var(--transition) linear;
            }

            .card__body-cover-image {
                width: var(--c-width);
                height: var(--c-height);
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: var(--c-border);
                filter: var(--filter-bg, grayscale(1));
                -webkit-clip-path: polygon(0% 0%, 100% 0%, var(--x-y1, 100% 90%), var(--x-y2, 67% 83%), var(--x-y3, 33% 90%), var(--x-y4, 0% 85%));
                clip-path: polygon(0% 0%, 100% 0%, var(--x-y1, 100% 90%), var(--x-y2, 67% 83%), var(--x-y3, 33% 90%), var(--x-y4, 0% 85%));
            }

            .card__body-cover-checkbox {
                background: var(--check-bg, var(--background-checkbox));
                border: 2px solid var(--check-border, #fff);
                position: absolute;
                right: 10px;
                top: 10px;
                z-index: 1;
                width: 28px;
                height: 28px;
                border-radius: 50%;
                opacity: var(--check-opacity, 0);
                transition: transform var(--transition), opacity calc(var(--transition) * 1.2) linear;
                transform: scale(var(--check-scale, 0));
            }

            .card__body-cover-checkbox--svg {
                width: 13px;
                height: 11px;
                display: inline-block;
                vertical-align: top;
                fill: none;
                margin: 7px 0 0 5px;
                stroke: var(--stroke-color, #fff);
                stroke-width: 2;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-dasharray: 16px;
                stroke-dashoffset: var(--stroke-dashoffset, 16px);
                transition: stroke-dashoffset 0.4s ease var(--transition);
            }

            .card__body-header {
                height: var(--header-height);
                background: var(--background);
                padding: 0 20px 20px 20px;
            }

            .card__body-header-title {
                color: var(--text-headline);
                font-weight: 700;
                margin-bottom: 8px;
                font-size: 20px
            }

            .card__body-header-subtitle,
            .card__body-header-subtitle a,
            .card__body address {
                color: var(--text-color);
                font-weight: 500;
                font-size: 13px;
                margin-bottom: 10px;
            }

            .card__body address {
                line-height: 18px
            }

            .page_slider .intro_layers {
                background-image: linear-gradient(to top, #F29E38 0%, #298FA6 100%);
            }

            @media (max-width: 768px) {
                .col-img {
                    order: 1;
                }

                .col-text {
                    order: 2;
                }
            }
            .page_title {
                background-image: url("{{ asset('frontend/images/custom/logistics_banner.jpg') }}");
                background-position: center !important;
            }
            .s-parallax:before {
                opacity: .6;
                background-color: #000;
            }

        </style>
    @endpush

    <section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Shipping Services</h1>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" onclick="return false">Services</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Shipping
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="ls ms text-sm-left text-center s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-50 s-pb-lg-40 s-pb-md-20 s-pb-10 c-gutter-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <img class="rounded" src="{{ asset('frontend/images/custom/logistics.jpg') }}" alt="">
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <h2 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            Our Shipping Philosophy
                        </span>
                    </h2>
                    <div class="divider-25"></div>
                    <p>
                        Chrism Shipping Services Limited (CSSL) is a subsidiary of Chrism Group. The company offers
                        shipping and maritime services.
                        <br> The Group saw an opportunity in the hailing Nigerian Maritime sector and decided to
                        contribute her quota by proffering superb services thereby enhancing the growth of the industry.
                        Born out of passion for excellence in service delivery, the team made up of highly trained and
                        UK certified maritime professionals,promises to deliver on its mandate of offering unparalleled
                        shipping services to her esteemed clients.
                    </p>
                    <p>
                        The arm of the Group deals on ship owners, ship operations, operators and managers, crewing and
                        manning services, agents, brokers and general shipping service delivery.
                        <br> With her head office in Lagos Nigeria, the maritime shipping hub of Nigeria, and physical
                        presence in all other shipping ports and terminals in Nigeria, the company is well positioned to
                        deliver on its mandates.
                        <br> The company brings with it technological revolution and innovative solutions to help cater
                        for the Nigerian maritime industry needs.
                    </p>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
                <div class="col-lg-6 col-12 col-xl-5 offset-xl-1 d-flex align-items-center">
                    <img class="rounded" src="{{ asset('frontend/images/services/service-single2.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-12 col-xl-5" id="specialization">
                    <div class="divider-30 hidden-above-lg"></div>
                    <h3 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            Specialization
                        </span>
                    </h3>
                    <div class="divider-25"></div>
                    <p>
                        We are a young, vibrant and very innovative team with just one mandate, excellent shipping
                        service delivery. Our clients have testified to this and we promise to continue to sustain this
                        feat.
                    </p>
                    <p>
                        Our areas of expertise include;
                    </p>
                    <ul class="list-styled">
                        <li>Port/terminal Agents/Representatives</li>
                        <li>Ship chandling services</li>
                        <li>Ship brokerage</li>
                        <li>Clearing and forwarding</li>
                        <li>Crewing and manning Agency</li>
                        <li>Bunkering services</li>
                        <li>Fresh water supplies</li>
                        <li>Ships' solid wastes / garbage and sludge removal services</li>
                        <li>Supply of provision, crew essentials, and other consumables</li>
                        <li>Supply of technical spares, lubricants and other consumables etc.</li>
                    </ul>
                    <p>We are available and determined to give you the best shipping services at no additional cost.
                    </p>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
                <div class="col-12">

                </div>
                {{-- <div class="col-12 col-xl-10 offset-xl-1">
                    <div id="accordion01" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse01_header">
                                <h5>
                                    <a data-toggle="collapse" href="#collapse01" aria-expanded="true"
                                        aria-controls="collapse01">
                                        How Do We Conduct Shipping?
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse01" class="collapse show" role="tabpanel"
                                aria-labelledby="collapse01_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Our team has been gelpingclients throughout the country for 10 years lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse02_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse02"
                                        aria-expanded="false" aria-controls="collapse02">
                                        Can I Pay After Receiving An Order?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse02" class="collapse" role="tabpanel"
                                aria-labelledby="collapse02_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Our team has been gelpingclients throughout the country for 10 years lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse03_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse03"
                                        aria-expanded="false" aria-controls="collapse03">
                                        Contacting The Sales Department
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse03" class="collapse" role="tabpanel"
                                aria-labelledby="collapse03_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Our team has been gelpingclients throughout the country for 10 years lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60 bg-white">
        <div class="container" id="services">
            <div class="row" id="agents">
                <div class="col-lg-6 col-text">
                    <div class="divider-30 hidden-above-lg"></div>
                    <h3 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            Ship Agents
                        </span>
                    </h3>
                    <div class="divider-25"></div>
                    <p>
                        We help grow your shipping dreams
                    </p>

                    <ul class="list-styled">
                        <li>We'll help grow your shipping dreams, wherever and whenever</li>
                        <li>We are available to serve in all ports in Nigeria.</li>
                        <li>We help facilitate your shipping dreams. From contacts to clearances, we are more than just
                            an agency</li>
                        <li>Port tariffs</li>
                        <li>Anchorage clearances</li>
                        <li>Crew changes</li>
                        <li>Port representatives</li>
                        <li>Owners representatives</li>
                        <li>Charterers' representatives</li>
                    </ul>

                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
                <div class="col-lg-6 col-img">
                    <img src="{{ asset('frontend/images/custom/shipping-agent-1.png') }}"
                        alt="">
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-30 hidden-above-lg"></div>
            <div class="row" id="chandlers">
                <div class="col-lg-6 col-img">
                    <img src="{{ asset('frontend/images/custom/container-ship.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 col-text">
                    <div class="divider-30 hidden-above-lg"></div>
                    <h3 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            Ship Chandlers
                        </span>
                    </h3>
                    <div class="divider-25"></div>
                    <p>
                        We're the best in what we do.
                    </p>

                    <ul class="list-styled">
                        <li>Whatever your shipping needs are, we've got you covered</li>
                        <li>Our prices are affordable, our products durable and our services sustainably incomparable
                        </li>
                        <li>Experience peace while doing business with us!</li>
                    </ul>

                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-30 hidden-above-lg"></div>
            <div class="row" id="outlets">
                <div class="col-12">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Our Locations
                        </span>
                    </h2>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="fw-divider-space divider-25"></div>
                    <p class="special-heading text-center">
                        <span>
                            Our team of professionals highly uphold Teamwork, Integrity, Cost effectiveness, Excellence
                            and many more
                        </span>
                    </p>
                    <div class="divider-35 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
                <div class="col-12">
                    <div class="grid">
                        <label class="card_custom" for="lekki-branch">
                            <input type="radio" class="card__input" type="checkbox" id="lekki-branch" value="">
                            <div class="card__body">
                                <div class="card__body-cover"><img class="card__body-cover-image"
                                        src="https://www.pngmart.com/files/5/City-PNG-Transparent-Image.png" /><span
                                        class="card__body-cover-checkbox">
                                        <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span></div>
                                <header class="card__body-header">
                                    <h2 class="card__body-header-title">
                                        Lagos Office
                                    </h2>
                                    <address>
                                        #1 Association Drive Off Lekki-Epe Express road, <br>
                                        Lekki,
                                        Lagos State, <br>
                                        Nigeria
                                    </address>
                                    <p class="card__body-header-subtitle">
                                        <a href="+2349156448187" class="mb-0">
                                            <i class="fa fa-phone mr-1"></i>
                                            +234 (0) 915 644 8187
                                        </a>
                                    </p>
                                </header>
                            </div>
                        </label>
                        <label class="card_custom" for="ph-branch">
                            <input type="radio" class="card__input" type="checkbox" id="ph-branch" value="">
                            <div class="card__body">
                                <div class="card__body-cover"><img class="card__body-cover-image"
                                        src="https://www.pngmart.com/files/5/City-PNG-Transparent-Image.png" /><span
                                        class="card__body-cover-checkbox">
                                        <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span></div>
                                <header class="card__body-header">
                                    <h2 class="card__body-header-title">
                                        Portharcourt Office
                                    </h2>
                                    <address>
                                        #21A Ohiamini Street, GRA Phase II <br>
                                        Port Harcourt,
                                        Rivers State, <br>
                                        Nigeria
                                    </address>
                                    <p class="card__body-header-subtitle">
                                        <a href="+2349074282914" class="mb-0">
                                            <i class="fa fa-phone mr-1"></i>
                                            +234 (0) 907 428 2914
                                        </a>
                                    </p>
                                </header>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        {{-- <script src="https://cdn.jsdelivr.net/npm/vvvebjs@0.0.1/libs/builder/builder.min.js"></script> --}}
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}"></script>
        <script>
            $(document).ready( () => {
                $('.card__input').change( function() {
                    var address = (typeof $(this).val() == 'string' && !$(this).val().trim() || typeof $(this).val() == 'undefined' || $(this).val() === null ? $(this).parent().find('address').text() : $(this).val()).replace(/\s+/g, " ").trim();
                    Notiflix.Confirm.show(
                        'Visit Our Branch',
                        'Do you want to visit our branch, continue to get instant direction to our branch closer to you',
                        'Yes',
                        'No',
                        function () {
                            Notiflix.Loading.standard();
                            var geocoder = new google.maps.Geocoder();
                            geocoder.geocode({
                                    address: address
                                }, function(data) {
                                    address = data.pop();
                                    let win = window.open(`https://www.google.com/maps/dir/?api=1&destination=${address.geometry.location.lat()},${address.geometry.location.lng()}&travelmode=driving`, '_blank');
                                    win.focus()
                                    Notiflix.Loading.remove(600);
                                    $('.card__input').prop('checked', false)
                                }
                            );

                        },
                        {
                            width: '320px',
                            borderRadius: '8px',
                        },
                    );
                    return;

                    // navigator.geolocation.getCurrentPosition(
                    //     function (position) {
                    //     },
                    //     function errorCallback(error) {
                    //         console.log(error)
                    //     }
                    // );
                })
            })
        </script>
    @endpush

</x-frontend-layout>
