<x-frontend-layout>

    @push('styles')
        <style>
            .page_slider .intro_layers {
                background-image: linear-gradient(to top,#F29E38 0%,#298FA6 100%);
            }

            /* Slider */

            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-slider
            {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                        user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                    touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .slick-list
            {
                position: relative;
                display: block;
                overflow: hidden;
                margin: 0;
                padding: 0;
            }
            .slick-list:focus
            {
                outline: none;
            }
            .slick-list.dragging
            {
                cursor: pointer;
                cursor: hand;
            }

            .slick-slider .slick-track,
            .slick-slider .slick-list
            {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                    -ms-transform: translate3d(0, 0, 0);
                    -o-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
            }

            .slick-track
            {
                position: relative;
                top: 0;
                left: 0;
                display: block;
            }
            .slick-track:before,
            .slick-track:after
            {
                display: table;
                content: '';
            }
            .slick-track:after
            {
                clear: both;
            }
            .slick-loading .slick-track
            {
                visibility: hidden;
            }

            .slick-slide
            {
                display: none;
                float: left;
                height: 100%;
                min-height: 1px;
            }
            [dir='rtl'] .slick-slide
            {
                float: right;
            }
            .slick-slide img
            {
                display: block;
            }
            .slick-slide.slick-loading img
            {
                display: none;
            }
            .slick-slide.dragging img
            {
                pointer-events: none;
            }
            .slick-initialized .slick-slide
            {
                display: block;
            }
            .slick-loading .slick-slide
            {
                visibility: hidden;
            }
            .slick-vertical .slick-slide
            {
                display: block;
                height: auto;
                border: 1px solid transparent;
            }
            .slick-arrow.slick-hidden {
                display: none;
            }

            .partners a {
                display: block;
                height: 100%;
            }

            .partners a > div {
                padding-left: 0;
                padding-right: 0;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .partners img {
                margin: auto;
                max-height: 70px;
            }

            @media (min-width: 992px) {
                .partners img {
                    max-width: 100px;
                    max-height: unset;
                }
            }

            .store-previewer {
                height: 250px;
                background-size: cover;
                background-size: 80%;
                background-repeat: no-repeat;
                background-position: center;
                background-color: white;
            }
        </style>
    @endpush

    <section class="page_slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="ds cover-image">
                    <img src="{{ asset('frontend/images/slide01.jpg') }}" alt="img">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer">
                                            <h6 class="intro_before_featured_word">01. Providing for Today</h6>
                                            <h2 class="text-capitalize intro_featured_word">
                                                Cooking Gas
                                            </h2>
                                            <a href="{{ route('services.gas') }}" class="btn btn-outline-darkgrey big-btn">Know more</a>
                                            <span class="text-divider">or</span>
                                            <a href="{{ route('contact') }}" class="btn just-link">Request a Callback</a>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
                <li class="ds cover-image">
                    <img src="{{ asset('frontend/images/slide02.jpg') }}" alt="img">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer">
                                            <h6 class="intro_before_featured_word">02. Innovations</h6>
                                            <h2 class="text-capitalize intro_featured_word">
                                                Who we are
                                            </h2>
                                            <a href="{{ route('about') }}" class="btn btn-outline-darkgrey big-btn">Know more</a>
                                            <span class="text-divider">or</span>
                                            <a href="{{ route('contact') }}" class="btn just-link">Request a Callback</a>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
                <li class="ds cover-image">
                    <img src="{{ asset('frontend/images/slide03.jpg') }}" alt="img">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer">
                                            <h6 class="intro_before_featured_word">03. Industry</h6>
                                            <h2 class="text-capitalize intro_featured_word">
                                                Cheapest Fuel Rate
                                            </h2>
                                            <a href="{{ route('services.oil') }}" class="btn btn-outline-darkgrey big-btn">Know more</a>
                                            <span class="text-divider">or</span>
                                            <a href="{{ route('contact') }}" class="btn just-link">Request a Callback</a>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>


            </ul>
        </div> <!-- eof flexslider -->
    </section>

    <section class="ds text-sm-left text-center container-px-0 c-gutter-0">
        <div class="container-fluid">
            <div class="row service-v2">
                <div class="col-sm-6 col-md-4 col-xl-2   ">
                    <div class="icon-box service-single with-icon layout2 ds text-center">
                        <a class="link-icon" href="{{ route('services.logistics') }}#chandlers">
                            <div class="icon-styled  fs-50">
                                <i class="ico ico-refinery"></i>
                            </div>
                        </a>
                        <a href="{{ route('services.logistics') }}#chandlers">
                            <h5>
                                Chandler
                            </h5>
                        </a>

                        <p>Best and quality equipment for your shipping needs</p>
                        <a class="btn btn-outline-darkgrey" href="{{ route('services.logistics') }}#chandlers">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2   ">
                    <div class="icon-box service-single with-icon layout2 ds text-center">
                        <a class="link-icon" href="{{ route('services.logistics') }}">
                            <div class="icon-styled  fs-50">
                                <i class="ico ico-tank"></i>
                            </div>
                        </a>
                        <a href="{{ route('services.logistics') }}">
                            <h5>
                                Shipping
                            </h5>
                        </a>

                        <p>We render fully insured oil services across countries</p>
                        <a class="btn btn-outline-darkgrey" href="{{ route('services.logistics') }}">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2   ">
                    <div class="icon-box service-single with-icon layout2 ds text-center">
                        <a class="link-icon" href="{{ route('services.gas') }}#outlets">
                            <div class="icon-styled  fs-50">
                                <i class="ico ico-oil"></i>
                            </div>
                        </a>
                        <a href="{{ route('services.gas') }}#outlets">
                            <h5>
                                Gas Stations
                            </h5>
                        </a>

                        <p>Our gas stations across differnt cities, get at fingertip</p>
                        <a class="btn btn-outline-darkgrey" href="{{ route('services.gas') }}#outlets">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2   ">
                    <div class="icon-box service-single with-icon layout2 ds text-center">
                        <a class="link-icon" href="{{ route('services.oil') }}#outlets">
                            <div class="icon-styled  fs-50">
                                <i class="ico ico-extraction"></i>
                            </div>
                        </a>
                        <a href="{{ route('services.oil') }}#outlets">
                            <h5>
                                Fuel Station
                            </h5>
                        </a>

                        <p>Walk into our fuel station across cities, best prices </p>
                        <a class="btn btn-outline-darkgrey" href="{{ route('services.oil') }}#outlets">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2   ">
                    <div class="icon-box service-single with-icon layout2 ds text-center">
                        <a class="link-icon" href="{{ route('services.logistics') }}#services">
                            <div class="icon-styled  fs-50">
                                <i class="ico ico-oil-tanker"></i>
                            </div>
                        </a>
                        <a href="{{ route('services.logistics') }}#services">
                            <h5>
                                Cargo Agents
                            </h5>
                        </a>

                        <p>Well trained agents for your expedite and route movement </p>
                        <a class="btn btn-outline-darkgrey" href="{{ route('services.logistics') }}#services">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2   ">
                    <div class="icon-box service-single with-icon layout2 ds text-center">
                        <a class="link-icon" href="{{ route('services.logistics') }}">
                            <div class="icon-styled  fs-50">
                                <i class="ico ico-pipe"></i>
                            </div>
                        </a>
                        <a href="{{ route('services.logistics') }}">
                            <h5>
                                Specialization
                            </h5>
                        </a>

                        <p>We are well positioned to support your diverse needs</p>
                        <a class="btn btn-outline-darkgrey" href="{{ route('services.logistics') }}#specialization">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 text-center">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Our Philosophy
                        </span>
                    </h2>
                    <div class="divider-30"></div>
                    <a class="btn btn-gradient big-btn" href="{{ route('blog.index') }}">get insights</a>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <div class="divider-35 hidden-above-lg"></div>
                    <div class="divider--5"></div>
                    <p class="excerpt">
                        Driven by innovations and passion to deliver excellent services to all our esteemed clients,  we are a purpose-driven team determined to make a difference in quality and affordable service delivery
                    </p>
                        Chrism Group is a conglomerate of over five business entities registered in Nigeria with interest in clean and renewable energy solution, oil and gas, medical and pharmaceuticals, real estate and maritime shipping services. Born from a single self-developed petroleum products marketing organisation, the firm has over the years, proven to be a dependable and reliable partner in Nigeria and beyond.
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

    <section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
        <div class="cover-image s-cover-left">
            <img src="{{ asset('frontend/images/services/marine.jpg') }}" alt="01">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-12 col-lg-6">
                </div>
                <div class="col-xs-12 col-12 col-lg-6">
                    <div class="content-center">
                        <h2 class="special-heading numeric text-sm-left text-center">
                            <span class="text-capitalize">
                                Shipping
                            </span>
                        </h2>
                        <div class="divider-45 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <p>
                            Chrismgroup Shipping is one of the world’s largest providers of ship agency, husbandry and support services to ship owners and operators.
                        </p>
                        {{-- <div class="divider-35 hidden-below-lg"></div>
                        <div class="divider-20 hidden-above-lg"></div>
                        <ul class="list-styled">
                            <li>Laudantium, totam rem aperiam</li>
                            <li>Eaque ipsa quae ab illo inventore veritatis</li>
                            <li>Quasi architecto beatae</li>
                        </ul>
                        <div class="divider-35 hidden-below-lg"></div>
                        <div class="divider-20 hidden-above-lg"></div> --}}

                        <div class="divider-45 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <a href="{{ route('services.logistics') }}" class="border-bottom-link">Shipping Services</a>
                        <div class="divider--10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
        <div class="cover-image s-cover-right">
            <img src="{{ asset('frontend/images/services/service1.jpg') }}" alt="01">
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-12 col-lg-6">
                    <div class="content-center">
                        <h2 class="special-heading numeric text-sm-left text-center">
                            <span class="text-capitalize">
                                Oil
                            </span>
                        </h2>
                        <div class="divider-45 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <p>
                            Chrismgroup Oil fleet of supply craft and barges that provide vital support for offshore exploration, construction and production, and more.
                        </p>
                        <div class="divider-45 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <a href="{{ route('services.oil') }}" class="border-bottom-link">Oil Services</a>
                    </div>
                </div>
                <div class="col-xs-12 col-12 col-lg-6">


                </div>
            </div>
        </div>
    </section>

    <section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
        <div class="cover-image s-cover-left">
            {{-- <a href="{{ asset('frontend/images/services/service3') }}" class="photoswipe-link side-video" data-width="800" data-height="800" data-iframe="https://www.youtube.com/embed/GhthHC0s38A"></a> --}}
            <img src="{{ asset('frontend/images/custom/gas.jpg') }}" alt="01">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-12 col-lg-6">

                </div>
                <div class="col-xs-12 col-12 col-lg-6">
                    <div class="content-center">
                        <h2 class="special-heading numeric text-sm-left text-center">
                            <span class="text-capitalize">
                                Gas
                            </span>
                        </h2>
                        <div class="divider-45 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <p>
                            Chrismgroup Gas built between August and December, 2016, offers best and customer services and products. Our gas station are located across different cities.
                        </p>
                        <div class="divider-45 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <a href="{{ route('services.gas') }}" class="border-bottom-link">Gas Services</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ds s-overlay portfolio-section  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Our Store
                        </span>
                    </h2>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-8">
                            <div class="filters gallery-filters">
                                <a href="#" data-filter="*" class="active selected">show All</a>
                                <a href="#" data-filter=".corporate">Gas</a>
                                <a href="#" data-filter=".business">oil</a>
                                <a href="#" data-filter=".entertainment">Industry</a>
                                <a href="#" data-filter=".innovations">eco</a>
                                <a href="#" data-filter=".news">Factory</a>

                            </div>
                        </div>
                    </div>
                    <div class="row isotope-wrapper portfolio masonry-layout c-mb-30" data-filters=".gallery-filters">

                        <div class="col-xl-4 col-sm-6 business news">

                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/P/o/Portable-Gas-Cooker---A41-GS001-7990788.jpg" alt="img" style="display: none">
                                    <div style="background-image: url('https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/P/o/Portable-Gas-Cooker---A41-GS001-7990788.jpg');" class="store-previewer"></div>
                                </div>
                                <div class="item-content">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/P/o/Portable-Gas-Cooker---A41-GS001-7990788.jpg"></a>
                                        <a class="link-anchor" title="" href="{{ route('shop') }}"></a>
                                    </div>
                                    <h6>
                                        <a href="{{ route('shop') }}">Portable Gas Cooker</a>
                                    </h6>

                                </div>
                            </div>

                        </div>

                        <div class="col-xl-4 col-sm-6 innovations corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="https://www.kindpng.com/picc/m/553-5538448_gas-cylinder-png-photo-lpg-gas-cylinder-png.png" alt="img" style="display: none">
                                    <div style="background-image: url('https://www.kindpng.com/picc/m/553-5538448_gas-cylinder-png-photo-lpg-gas-cylinder-png.png');" class="store-previewer"></div>
                                </div>
                                <div class="item-content ">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="https://www.kindpng.com/picc/m/553-5538448_gas-cylinder-png-photo-lpg-gas-cylinder-png.png"></a>
                                        <a class="link-anchor" title="" href="{{ route('shop') }}"></a>
                                    </div>
                                    <h6>
                                        <a href="{{ route('shop') }}">LGP Gas Cylinder</a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 entertainment news innovations">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="http://ohlheiser.files.wordpress.com/2012/03/gas-process-equipment.jpg" alt="img" style="display: none">
                                    <div style="background-image: url('http://ohlheiser.files.wordpress.com/2012/03/gas-process-equipment.jpg');" class="store-previewer"></div>
                                </div>
                                <div class="item-content ">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="http://ohlheiser.files.wordpress.com/2012/03/gas-process-equipment.jpg"></a>
                                        <a class="link-anchor" title="" href="{{ route('shop') }}"></a>
                                    </div>

                                    <h6>
                                        <a href="{{ route('shop') }}">Gas Process Equipment</a>
                                    </h6>


                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 business entertainment">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="https://mykitchenspecs.com/wp-content/uploads/2021/02/The-4-Categories-of-Kitchen-Equipment-1.jpg" alt="img" style="display: none">
                                    <div style="background-image: url('https://mykitchenspecs.com/wp-content/uploads/2021/02/The-4-Categories-of-Kitchen-Equipment-1.jpg');" class="store-previewer"></div>
                                </div>
                                <div class="item-content ">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="https://mykitchenspecs.com/wp-content/uploads/2021/02/The-4-Categories-of-Kitchen-Equipment-1.jpg"></a>
                                        <a class="link-anchor" title="" href="{{ route('shop') }}"></a>
                                    </div>

                                    <h6>
                                        <a href="{{ route('shop') }}">3 in 1 Kitchen Cooker</a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 innovations corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="https://5.imimg.com/data5/UR/WU/MY-35656840/italian-gas-ranges-500x500.png" alt="img" style="display: none">
                                    <div style="background-image: url('https://5.imimg.com/data5/UR/WU/MY-35656840/italian-gas-ranges-500x500.png');" class="store-previewer"></div>
                                </div>
                                <div class="item-content">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="https://5.imimg.com/data5/UR/WU/MY-35656840/italian-gas-ranges-500x500.png"></a>
                                        <a class="link-anchor" title="" href="{{ route('shop') }}"></a>
                                    </div>

                                    <h6>
                                        <a href="{{ route('shop') }}">Italian Kitchen Gas Range</a>
                                    </h6>


                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 entertainment news corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="https://images.yaoota.com/Jz9o1tfp0ItBUx8OyiN4-zfkvOs=/trim/yaootaweb-production-ng/media/crawledproductimages/d0a9cadfd22d1583beb55c167622c625ff83e320.jpg" alt="img" style="display: none">
                                    <div style="background-image: url('https://images.yaoota.com/Jz9o1tfp0ItBUx8OyiN4-zfkvOs=/trim/yaootaweb-production-ng/media/crawledproductimages/d0a9cadfd22d1583beb55c167622c625ff83e320.jpg');" class="store-previewer"></div>
                                </div>
                                <div class="item-content">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="https://images.yaoota.com/Jz9o1tfp0ItBUx8OyiN4-zfkvOs=/trim/yaootaweb-production-ng/media/crawledproductimages/d0a9cadfd22d1583beb55c167622c625ff83e320.jpg"></a>
                                        <a class="link-anchor" title="" href="{{ route('shop') }}"></a>
                                    </div>

                                    <h6>
                                        <a href="{{ route('shop') }}">Stainless Gas Burner</a>
                                    </h6>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="mt--30"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="divider-60"></div>
                            <a class="btn btn-maincolor2 big-btn" href="{{ route('shop') }}">All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center c-gutter-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="special-heading text-sm-left text-center">
                        <span class="text-capitalize">
                            FAQ & Information
                        </span>
                    </h2>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div id="accordion01" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse01_header">
                                <h5>
                                    <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                        Get to know us
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Chrism Group is a conglomerate of over five business entities registered in Nigeria with interest in clean and renewable energy solution, oil and gas, medical and pharmaceuticals, real estate and maritime shipping services. <br> Born from a single self-developed petroleum products marketing organisation, the firm has over the years, proven to be a dependable and reliable partner in Nigeria and beyond.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse02_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                        Our Mission
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                                <div class="card-body">
                                    To become a team of motivated experts poised to proffer innovative solutions to our esteemed clients employing the most sustainable business processes aimed at building local capacities and job creation.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse03_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                        Our Vision
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                                <div class="card-body">
                                    To be a brand of first choice delivering world-class maritime shipping services to our esteemed clients.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse04_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                        Contact Us
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                                <div class="card-body">
                                    <div class="media text-center text-sm-left">
                                        <div class="icon-styled fs-60 color-main">
                                            <i class="ico ico-location"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="">
                                                Our Address
                                            </h6>
                                            <p class="">Suite 12, Libra Building, Eleganza Complex, Apapa, Lagos, Nigeria</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media text-center text-sm-left">
                                        <div class="icon-styled fs-60 color-main">
                                            <i class="ico ico-call"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="">
                                                Our Number
                                            </h6>
                                            <p class="">+234 (0) 816 849 7792<br> +234 (0) 701 966 8254</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media text-center text-sm-left">
                                        <div class="icon-styled fs-60 color-main">
                                            <i class="ico ico-email"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="">
                                                Our Email
                                            </h6>
                                            <p class="">operations.control@chrismgroup.com<br> gas@chrismgroup.com</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <span class="social-icons">
                                        <a href="#" class="fab fa-facebook-f bg-icon light-bg rounded-icon"></a>
                                        <a href="#" class="fab fa-twitter bg-icon light-bg rounded-icon"></a>
                                        <a href="#" class="fab fa-linkedin-in bg-icon light-bg rounded-icon"></a>
                                        <a href="#" class="fab fa-instagram bg-icon light-bg rounded-icon"></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse09_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                        Other Questions
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse09" class="collapse" role="tabpanel" aria-labelledby="collapse09_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Incase of any questions, contact us via email at operations.control@chrismgroup.com or you can call us on +234 (0) 816 849 7792 visit the <a href="{{ route('contact') }}">contact us</a> page for more option
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="divider-30 hidden-above-lg"></div>
                    {{-- <div class="customer-logos slider">
                        <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                     </div> --}}
                     <div class="row masonry-layout images-grid c-mb-30 c-gutter-30 partners">
                        <div class="col-lg-4  col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/01.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/02.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/03.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/04.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/05.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/06.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        {{-- <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/07.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/08.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6  ">
                            <a href="#">
                                <div class="bordered text-center p-xl-50 p-20 rounded">
                                    <img src="{{ asset('frontend/images/partners/09.png') }}" alt="">
                                </div>
                            </a>
                        </div> --}}
                        <div class="col-12">
                            <hr>
                            <div class="media text-center text-sm-left">
                                <div class="icon-styled fs-60 color-main">
                                    <i class="ico ico-location"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="">
                                        Main Office
                                    </h6>
                                    <p class="">Chrism Oil Complex, Uyo-Oron Road (Airport Road) Mbiabong Ikot Essien, Uyo LGA, Akwa Ibom State, Nigeria</p>
                                </div>
                            </div>
                            <hr>
                            <div class="media text-center text-sm-left">
                                <div class="icon-styled fs-60 color-main">
                                    <i class="ico ico-call"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="">
                                        Our Hotline
                                    </h6>
                                    <p class="">+234 (0) 816 849 7792<br> +234 (0) 701 966 8254</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt--30"></div>
                </div>
            </div>
        </div>
    </section>

    <x-team-list class="s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60" />

    <section class="ds call-to-action text-center  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize big">
                            All for Good. Good for All.
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <a class="btn btn-darkgrey big-btn" href="blog-right.html">Get Insight</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ls map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="special-heading">
                        <span class="text-capitalize">
                            We Help Build On Past & <br> Prepare For Your Future
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p class="special-heading">
                        <span>
                            We look out for customers while the business takes care of it self customer value and goal
                        </span>
                    </p>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between flex-wrap ">
                        <div class="simple-counter">
                            <h3 class="special-heading counter-wrap">
                                <span class="counter color-main thin big" data-from="0" data-to="{{ $years = Carbon\Carbon::parse('1 january 2015')->diffInYears() }}" data-speed="1800">0</span>
                            </h3>
                            <p class="special-heading bold color-darkgrey">
                                <span>
                                    Years
                                </span>
                            </p>
                            <h6 class="special-heading text-capitalize">
                                <span>
                                    Experience
                                </span>
                            </h6>
                        </div>
                        <div class="divider-30 hidden-above-sm"></div>
                        <div class="simple-counter">
                            <h3 class="special-heading counter-wrap">
                                <span class="counter color-main thin big" data-from="0" data-to="10" data-speed="1800">0</span>
                            </h3>
                            <p class="special-heading bold color-darkgrey">
                                <span>
                                    Offices
                                </span>
                            </p>
                            <h6 class="special-heading text-capitalize">
                                <span>
                                    Worldwide
                                </span>
                            </h6>
                        </div>
                        <div class="divider-30 hidden-above-sm"></div>
                        <div class="simple-counter">
                            <h3 class="special-heading counter-wrap">
                                <span class="counter color-main thin big" data-from="0" data-to="50" data-speed="1800">0</span>
                                <span class="counter-add thin color-main big">+</span>
                            </h3>
                            <p class="special-heading bold color-darkgrey">
                                <span>
                                    Workers
                                </span>
                            </p>
                            <h6 class="special-heading text-capitalize">
                                <span>
                                    Employed
                                </span>
                            </h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="divider-40 hidden-above-lg"></div>
                    <div id="map-vector"></div>
                </div>
            </div>
        </div>
    </section>

    @if ($posts->count() > 0)
    <section class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Latest News
                        </span>
                    </h2>
                    <p class="special-heading text-center">
                        <span class="text-capitalize color-darkgrey bold">
                            our blog
                        </span>
                    </p>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="shortcode-posts row tiled-layout c-gutter-30 c-mb-30">
                        <div class="bigitem col-xl-6 col-lg-5">
                            @php
                                // $mainPost = $posts->random();
                                $mainPost = $post = $posts->first();
                            @endphp
                            <article class="vertical-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
                                <div class="item-media post-thumbnail">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        <img src="{{ asset('frontend/images/blog/01') }}.jpg" alt="img">
                                    </a>
                                </div><!-- .post-thumbnail -->
                                <div class="item-content">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <div class="byline">
                                                <span class="date">
                                                    <a href="{{ route('blog.show', $post->slug) }}" rel="bookmark">
                                                        <time class="published entry-date" datetime="{{ $post->created_at }}">20.03.2019</time>
                                                    </a>
                                                </span>
                                                <span class="author vcard">
                                                    <a class="url fn n" href="{{ route('blog.show', $post->slug) }}" rel="author"><span>by</span> {{ $post->user->name }}</a>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="entry-title">
                                            <a href="{{ route('blog.show', $post->slug) }}" rel="bookmark">
                                                {{ $post->title }}
                                            </a>
                                        </h4>

                                        <!-- .entry-meta -->
                                    </header>
                                    <!-- .entry-header -->

                                    <div class="entry-content">
                                        <p>
                                            {!! $post->summary !!}
                                        </p>
                                    </div><!-- .entry-content -->
                                </div><!-- .item-content -->
                            </article><!-- #post-## -->
                        </div>
                        <div class=" smallitem col-xl-6 col-lg-7">
                            @foreach ($posts->reject( fn($value, $key) => $value->id == $mainPost->id) as $post)
                            {{-- {{ dd($post->user) }} --}}
                            <article class="vertical-item side-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
                                <div class="item-media post-thumbnail">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        <img src="{{ asset('frontend/images/blog/square') }}/02.jpg" alt="img">
                                    </a>
                                </div><!-- .post-thumbnail -->
                                <div class="item-content">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <div class="byline">
                                                <span class="date">
                                                    <a href="{{ route('blog.show', $post->slug) }}" rel="bookmark">
                                                        <time class="published entry-date" datetime="{{ $post->published_at }}">20.03.2019</time>
                                                        {{-- 2019-04-09T12:23:09+00:00 --}}
                                                    </a>
                                                </span>
                                                <span class="author vcard">
                                                    <a class="url fn n" href="{{ route('blog.show', $post->slug) }}" rel="author"><span>by</span> {{ $post->user->name }}</a>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="entry-title">
                                            <a href="{{ route('blog.show', $post->slug) }}" rel="bookmark">
                                                {{ $post->title }}
                                            </a>
                                        </h4>

                                        <!-- .entry-meta -->
                                    </header>
                                    <!-- .entry-header -->

                                    <div class="entry-content">
                                        <p>
                                            {!! $post->summary !!}
                                        </p>
                                    </div><!-- .entry-content -->
                                </div><!-- .item-content -->
                            </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt--30"></div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @push('scripts_r')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    @endpush
</x-frontend-layout>
