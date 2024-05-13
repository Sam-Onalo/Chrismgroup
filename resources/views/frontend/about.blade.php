<x-frontend-layout>

    @section('page-title', "About Us")

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
                                About Us
                            </li>
                        </ol>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 text-center">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Our Philosophy
                        </span>
                    </h2>
                    <div class="divider-30"></div>
                    <a class="btn btn-gradient big-btn" href="#">get insights</a>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <div class="divider-35 hidden-above-lg"></div>
                    <div class="divider--5"></div>
                    <p class="excerpt">
                        Driven by innovations and passion to deliver excellent services to all our esteemed clients,  we are a purpose-driven team determined to make a difference in quality and affordable service delivery
                    </p>
                        Chrism Group is a conglomerate of over five business entities registered in Nigeria. The Group has interest in clean and renewable energy solution, oil and gas, medical and pharmaceuticals, real estate and maritime shipping services.
                        <br>
                        Born from a single self-developed petroleum products marketing organisation, the firm has over the years, proven to be a  dependable and reliable partner  in Nigeria and beyond
                    </p>
                </div>
                <div class="col-12 col-lg-3 text-sm-left text-center">
                    <div class="divider-35 hidden-above-lg"></div>
                    <div class="signature">
                        <div class="signature-image">
                            <img src="https://cdn-icons-png.flaticon.com/512/432/432693.png" alt="">
                        </div>
                        <div class="signature-content">
                            <span>Solomon Okon</span>
                            <img src="{{ asset('frontend/images/signature.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ds container-px-xl-0 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12 px-xl-50 ds column-overlay d-flex flex-column align-items-center justify-content-center text-center column-video">
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Our Values
                        </span>
                    </h2>
                    <div class="divider-30"></div>
                    <div class="video-shortcode">
                        <a href="{{ asset('frontend/images/services/service3.jpg"') }} class="photoswipe-link" data-width="800" data-height="800" data-iframe="https://www.youtube.com/embed/GhthHC0s38A"></a>
                    </div>

                    <div class="divider-30"></div>
                    <p>
                        Our values are the core foundation of chrismgroup and it what makes us stronger as a staff and good in serving you with the best services/products
                    </p>
                    <div class="fw-divider-space divider-xl-135 divider-lg-95 divider-md-65 divider-35"></div>
                </div>
                <div class="col-lg-9 p-0 col-12">
                    <div class="step-gorizontal">
                        <div class="step">
                            <div class="step-number">
                                <h3>
                                    01.
                                </h3>
                            </div>
                            <h6>
                                Our Vision
                            </h6>
                            <p>
                                To be a brand  of first choice delivering world-class services to our esteemed clients.
                            </p>
                        </div>
                        <div class="step">
                            <div class="step-number">
                                <h3>
                                    02.
                                </h3>
                            </div>
                            <h6>
                                Our Mission
                            </h6>
                            <p>
                                To become a team of motivated experts poised to proffer solutions to our esteemed clients employing the most sustainable and innovative processes aimed at building local capacities and job creation.
                            </p>
                        </div>
                        <div class="step">
                            <div class="step-number">
                                <h3>
                                    03.
                                </h3>
                            </div>
                            <h6>
                                Our Core Value
                            </h6>
                            <p>
                                Our team of professionals highly uphold the following values includes Teamwork, Integrity, Mutual respect, Excellence
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls s-py-xl-160 text-sm-left text-center s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h2 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            Our Brief History
                        </span>
                    </h2>
                    <div class="divider-line bg-maincolor text-sm-left text-center"></div>
                    <div class="fw-divider-space divider-30"></div>
                    <p>
                        Chrism Group started as a single registered entity, Chrism Oil Nigeria Limited,  in 2015. The company operated  as an independent petroleum products marketers trading  only on refined petroleum products such as Premium Motor Spirits (PMS), Dual Purpose Kerosene (DPK) Auto Gas Oil (AGO) and engine oil.
                        <br>
                        At that time, the company had only One petroleum products retail outlet / service station which served as the corporate headquarter of the organisation.

                    </p>
                    <p>
                        Motivated by a team of young professionals, the company has witnessed tremendous success and has since metamorphosed into a conglomerate of companies with interests spanning through Oil and Gas, Energy production and marketing, Shipping and maritime Services, Engineering and Construction, Medical Care and supplies, pharmaceuticals, Real Estate and Manufacturing.

                    </p>
                    <div class="divider-30 hidden-above-lg"></div>
                    <a class="btn btn-gradient big-btn hidden-below-lg" href="about.html#">Get Insights</a>
                    {{-- <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="owl-carousel sync1" data-center="false" data-nav="false" data-margin="15" data-loop="true" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="2">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/full/01.jpg') }}" alt="">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/full/02.jpg') }}" alt="">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/full/03.jpg') }}" alt="">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/full/04.jpg') }}" alt="">

                    </div> --}}
                </div>
                <div class="col-lg-5 col-12">
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="owl-carousel sync2" data-center="false" data-draggable="false" data-nav="false" data-margin="10" data-loop="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/square/01.jpg') }}" alt="">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/square/02.jpg') }}" alt="">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/square/03.jpg') }}" alt="">
                        <img class="rounded" src="{{ asset('frontend/images/gallery/square/04.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>
                        In 2016, the organisation saw a future in the Liquefied Petroleum Gas (LPG) sub-sector of the industry and after detailed risk analysis, decided to launch herself into the industry. Our first LPG Bottling Plant was therefore designed and built between August and December, 2016.

                    </p>
                    <p>
                        In 2019, The Group decided to launch herself into the maritime industry by floating Chrism Shipping Services Limited as another subsidiary. This too has since witnessed unprecedented growth and has enjoyed unparalleled patronage from both local and international clients.
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                    </p>
                    <div class="divider-30 hidden-above-lg"></div>
                    <a class="btn btn-gradient big-btn hidden-above-lg" href="about.html#">Get Insights</a>
                </div>
            </div>
        </div>
    </section>

    <x-team-list class="s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60" />

</x-frontend-layout>
