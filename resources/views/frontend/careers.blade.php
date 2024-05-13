<x-frontend-layout>

    @push('styles')
        <style>
            #main{
                display: table;
                width: 100%;
                text-align: center;
            }

            .fof{
                display: table-cell;
                vertical-align: middle;
            }

            .fof h1{
                font-size: 50px;
                display: inline-block;
                padding-right: 12px;
                animation: type .5s alternate infinite;
                color: #888
            }

            @keyframes type{
                from {
                    box-shadow: inset -3px 0px 0px #888;
                }
                to {
                    box-shadow: inset -3px 0px 0px transparent;
                }
            }
        </style>
    @endpush
    @section('page-title', "Our Careers")

    <section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Careers</h1>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Company</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Careers
                            </li>
                        </ol>
                    </div>

                </div>


            </div>
        </div>
    </section>


    <section class="ls careers s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="special-heading">
                        <span class="text-capitalize">
                            Join Our Fast Growing Company Today!
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>
                        Our staffs are driven by innovations and passion to deliver excellent services to all our esteemed clients, we are a purpose-driven team determined to make a difference in quality and affordable service delivery.
                    </p>
                    <p>
                        Our benefits includes
                    </p>
                    <ul class="list-styled">
                        <li>Paid time off such as sick days, and vacation days;</li>
                        <li>Healthcare spending or reimbursement accounts;</li>
                        <li>Workplace perks such as activities, food and coffee;</li>
                        <li>Provided long term disability insurance;</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12">

                </div>
            </div>
        </div>
    </section>

    <section class="ls s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="special-heading text-center">
                        <span class="text-capitalize">
                            Open Vacancies
                        </span>
                    </h2>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="fw-divider-space divider-25"></div>
                    <p class="special-heading text-center">
                        <span>
                            Join in maintaining our core goals and values, best ecosystem to belong. Choose from dozens of oppurtunities below
                        </span>
                    </p>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                </div>

                <div id="main">
                    <div class="fof">
                        <h1>No Job Entry Available</h1>
                    </div>
                </div>

                {{-- <div class="col-12 col-xl-10 offset-xl-1">
                    <div class="tabs-accardion">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab01" data-toggle="tab" href="#tab01_pane" role="tab" aria-controls="tab01_pane" aria-expanded="true">australia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab02" data-toggle="tab" href="#tab02_pane" role="tab" aria-controls="tab02_pane">UK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab03" data-toggle="tab" href="#tab03_pane" role="tab" aria-controls="tab03_pane">USA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab04" data-toggle="tab" href="#tab04_pane" role="tab" aria-controls="tab04_pane">China</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab05" data-toggle="tab" href="#tab05_pane" role="tab" aria-controls="tab05_pane">India</a>
                            </li>

                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab01_pane" role="tabpanel" aria-labelledby="tab01">
                                <div id="accordion01" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse01_header">
                                            <h5>
                                                <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                                    CEO Of Capital Construction
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse2_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                    Oil Reservoir Management
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="collapse2_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/02.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse3_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                    Oil Supply Planner/Dispatcher
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="collapse3_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/03.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse4_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                    Project Engineer (Oil & Gas)
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="collapse4_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/04.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab02_pane" role="tabpanel" aria-labelledby="tab02">

                                <div id="accordion02" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse05_header">
                                            <h5>
                                                <a data-toggle="collapse" href="#collapse05" aria-expanded="true" aria-controls="collapse05">
                                                    CEO Of Capital Construction
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse05" class="collapse show" role="tabpanel" aria-labelledby="collapse05_header" data-parent="#accordion02">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab03_pane" role="tabpanel" aria-labelledby="tab03">

                                <div id="accordion03" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse06_header">
                                            <h5>
                                                <a data-toggle="collapse" href="#collapse06" aria-expanded="true" aria-controls="collapse06">
                                                    CEO Of Capital Construction
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse06" class="collapse show" role="tabpanel" aria-labelledby="collapse06_header" data-parent="#accordion03">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab04_pane" role="tabpanel" aria-labelledby="tab04">

                                <div id="accordion04" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse07_header">
                                            <h5>
                                                <a data-toggle="collapse" href="#collapse07" aria-expanded="true" aria-controls="collapse07">
                                                    CEO Of Capital Construction
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse07" class="collapse show" role="tabpanel" aria-labelledby="collapse07_header" data-parent="#accordion04">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab05_pane" role="tabpanel" aria-labelledby="tab05">

                                <div id="accordion06" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse08_header">
                                            <h5>
                                                <a data-toggle="collapse" href="#collapse08" aria-expanded="true" aria-controls="collapse08">
                                                    CEO Of Capital Construction
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse08" class="collapse show" role="tabpanel" aria-labelledby="collapse08_header" data-parent="#accordion06">
                                            <div class="card-body">
                                                <div class="side-item">
                                                    <div class="item-media">
                                                        <img src="{{ asset('frontend/images/gallery/square/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="item-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                        </p>
                                                        <h6>Duties & Responsibilities:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                        <h6>Required Knowledge & Skills:</h6>
                                                        <ul class="list-styled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Sint animi non ut sed</li>
                                                            <li>Eaque blanditiis nemo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
    </section>

    <section class="ls ms map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
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

</x-frontend-layout>
