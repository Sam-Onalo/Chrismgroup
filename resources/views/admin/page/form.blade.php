<x-app-layout>
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">{{ $page->title ?? $cpage->title . ' Subservice'}}</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Chrismgroup</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                            <li class="breadcrumb-item active">{{ isset($page) ? 'Edit Service' : 'Add New' }}</li>
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
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Page Settings</h4>
                    <p class="text-muted mb-0">Bootstrap-wysihtml5 is a javascript plugin that makes it
                        easy to create simple, beautiful wysiwyg editors with the help of wysihtml5 and
                        Twitter Bootstrap.
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form method="post" action="{{ isset($page) ? route('admin.pages.update', $page->slug) : route('admin.pages.store', $cpage->slug) }}">
                        @csrf
                        @if($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="" class="mb-1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title', $page->title ?? null) }}">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="" class="mb-1">Slug</label>
                                <input type="text" class="form-control" value="{{ old('slug', $page->slug ?? null) }}" disabled>
                            </div>

                            {{-- <div class="col-lg-6 form-group">
                                <label for="" class="mb-1">URI</label>
                                <input type="text" class="form-control" name="uri" value="{{ old('uri', $page->uri ?? null) }}">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="" class="mb-1">Route</label>
                                <input type="text" class="form-control" name="route" value="{{ old('route', $page->route ?? null) }}">
                            </div> --}}

                            <div class="col-lg-12 form-group">
                                <label for="" class="mb-2">Content</label>
                                <textarea class="form-control" id="basic-conf" name="content">{{ old('content', $page->content ?? null) }}</textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</x-app-layout>
