<x-app-layout>
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Services</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Chrismgroup</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                            <li class="breadcrumb-item active">{{ $cpage->title }}</li>
                        </ol>
                    </div>
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                            <span class="" id="Select_date">Jan 11</span>
                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i data-feather="download" class="align-self-center icon-xs"></i>
                        </a>
                        {{-- <a href="{{ route('admin.pages.create', $cpage->slug) }}" class="btn btn-sm btn-outline-primary">
                            Create Subservice
                        </a> --}}
                        <a href="{{ route('admin.pages.edit', $cpage->slug) }}" class="btn btn-sm btn-outline-primary">
                            Edit Page
                        </a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Categories</h4>
                        </div><!--end col-->
                        <div class="col-auto">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <i class="las la-menu align-self-center text-muted icon-xs"></i>  -->
                                    <i class="mdi mdi-dots-horizontal text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#">Create Folder</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="files-nav">
                        <div class="nav flex-column nav-pills" aria-orientation="vertical">
                            @foreach ($pages as $page)
                            <a href="{{ route('admin.pages', $page->slug) }}" class="nav-link {{ $page->id == $cpage->id ? 'active' : '' }}">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder align-self-center icon-dual-file icon-sm me-3"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                <div class="d-inline-block align-self-center">
                                    <h5 class="m-0">{{ $page->title }}</h5>
                                    <small>{{ $page->descendants->count() }} subservice</small>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    {{-- <small class="float-end">62%</small>
                    <h6 class="mt-0">620GB / 1TB Used</h6>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> --}}
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

        <div class="col-lg-9">
            <div class="">
                <div class="tab-content" id="files-tabContent">

                    <div class="tab-pane fade show active" id="files-projects">
                        <h4 class="card-title mt-0 mb-3">Sub Services</h4>
                        <div class="file-box-content">
                            @foreach ($cpage->descendants as $subpage)
                            <div class="file-box">
                                <a href="{{ route('admin.pages.edit', $subpage->slug) }}" class="download-icon-link d-block mb-2" style="text-align: right;">
                                    <i class="fas fa-edit" style="font-size: 14px; margin: auto;"></i>
                                </a>
                                <div class="text-center">
                                    {{-- <i class="lar la-file-alt text-primary"></i> --}}
                                    {!! Avatar::create(Str::upper($subpage->title))->setDimension(30)->setFontSize(10)->toSvg() !!}
                                    <h6 class="text-truncate">{{ $subpage->title }}</h6>
                                    <small class="text-muted">{{ $subpage->updated_at }}</small>
                                    {{-- 06 March 2019 / 5MB --}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div><!--end tab-pane-->
                </div>  <!--end tab-content-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div>
</x-app-layout>
