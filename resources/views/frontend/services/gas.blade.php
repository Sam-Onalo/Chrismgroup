<x-frontend-layout>
    @section('page-title', 'Gas Services')

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
                --header-height: 170px;
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

            .card__body-header-subtitle, .card__body-header-subtitle a, .card__body address {
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

            .page_title {
                background-image: url("{{ asset('frontend/images/custom/gas_banner.jpg') }}");
                background-position: center !important;
            }
            .s-parallax:before {
                opacity: .3;
                background-color: #000;
            }

        </style>
    @endpush

    <section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Gas Services</h1>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" onclick="return false">Services</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Oil
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
                    <img class="rounded" src="{{ asset('frontend/images/services/service1.jpg') }}" alt="">
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <h2 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                           Our Gas Philosophy
                        </span>
                    </h2>
                    <div class="divider-25"></div>
                    <p>
                        In 2016, the organisation saw a future in the Liquefied Petroleum Gas (LPG) sub-sector of the industry and after detailed risk analysis, decided to launch herself into the industry. Our first LPG Bottling Plant was therefore designed and built between August and December, 2016.
                    </p>
                    <p>
                        Motivated by a team of young professionals, the company has witnessed tremendous success and has since metamorphosed into a conglomerate of companies with interests spanning through Oil and Gas, Energy production and marketing, Shipping and maritime Services, Engineering and Construction, Medical Care and supplies, pharmaceuticals, Real Estate and Manufacturing.
                    </p>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
                <div class="col-lg-6 col-12 col-xl-5 offset-xl-1 d-flex align-items-center">
                    <img class="rounded" src="{{ asset('frontend/images/custom/gas_banner.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-12 col-xl-5">
                    <div class="divider-30 hidden-above-lg"></div>
                    <h3 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            Our Services
                        </span>
                    </h3>
                    <div class="divider-25"></div>
                    <p>
                        Our superior and affordable services include;
                    </p>
                    <ul class="list-styled">
                        <li>Unadulterated products</li>
                        <li>Best metering</li>
                        <li>Happy and customer-friendly staff</li>
                        <li>Free Air services</li>
                        <li>Free car wash</li>
                        <li>Free cash back</li>
                        <li>Point of Sale Services (POS)</li>
                        <li>24/7 Availability</li>
                        <li>Best Prices</li>
                        <li>Home delivery</li>
                        <li>Post-payment services</li>
                        <li>Bonuses for loyal customers</li>
                    </ul>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60 bg-white">
        <div class="container">
            <div class="row" id="outlets">
                <div class="col-12">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Our Outlets
                        </span>
                    </h2>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="fw-divider-space divider-25"></div>
                    <p class="special-heading text-center">
                        <span>
                            Our team of professionals highly uphold Teamwork, Integrity, Cost effectiveness, Excellence and many more
                        </span>
                    </p>
                    <div class="divider-35 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>
                <div class="col-12">
                    <div class="grid">
                        <label class="card_custom" for="uyo-branch">
                            <input type="radio" class="card__input" type="checkbox" id="uyo-branch" value="Chrism Cooking Gas Refilling Plant and Fuel Station, A342, 520102, Uyo">
                            <div class="card__body">
                                <div class="card__body-cover"><img class="card__body-cover-image"
                                        src="https://www.pngmart.com/files/5/City-PNG-Transparent-Image.png" /><span
                                        class="card__body-cover-checkbox">
                                        <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span></div>
                                <header class="card__body-header">
                                    <h2 class="card__body-header-title">
                                        Uyo Plant
                                    </h2>
                                    <address>
                                        Chrism Gas Refilling Plant <br>
                                        Km7 Uyo-Oron Rd (Airport Rd) Mbiabong Ikot Essien, <br>
                                        Uyo LGA,
                                        Akwa Ibom State, <br>
                                        Nigeria
                                    </address>
                                    <p class="card__body-header-subtitle">
                                        <a href="tel:+2349154473475" class="d-block">
                                            <i class="fa fa-phone mr-1"></i>
                                            +234 (0) 915 447 3475
                                        </a>
                                    </p>
                                </header>
                            </div>
                        </label>
                        <label class="card_custom" for="ik-branch">
                            <input type="radio" class="card__input" type="checkbox" id="ik-branch" value="">
                            <div class="card__body">
                                <div class="card__body-cover"><img class="card__body-cover-image"
                                        src="https://www.pngmart.com/files/5/City-PNG-Transparent-Image.png" /><span
                                        class="card__body-cover-checkbox">
                                        <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span></div>
                                <header class="card__body-header">
                                    <h2 class="card__body-header-title">
                                        Ikot Ekpene Plant
                                    </h2>
                                    <address>
                                        Chrism Gas Refilling Plant <br>
                                        Km7 Uyo-Ikot Ekpene highway Utu Ikot Ekpenyong, <br>
                                        Ikot Ekpene LGA,
                                        Akwa Ibom State, <br>
                                        Nigeria
                                    </address>
                                    <p class="card__body-header-subtitle">
                                        <a href="tel:+2349154473475" class="d-block">
                                            <i class="fa fa-phone mr-1"></i>
                                            +234 (0) 810 525 2267
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
