@php
    $page = App\Models\ACME\Page::find($page->id);
    $p = $page->ancestors;
@endphp

<x-frontend-layout>
    @section('page-title', $page->title . ($p->count() == 0 ? ' Service' : ''))

    @push('styles')
        <style>
            .page_slider .intro_layers {
                background-image: linear-gradient(to top,#F29E38 0%,#298FA6 100%);
            }
        </style>
    @endpush

    <section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{ $page->title . ($p->count() == 0 ? ' Service' : '') }}</h1>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" onclick="return false">Services</a>
                            </li>
                            @if ($p->count() > 0)
                            <li class="breadcrumb-item">
                                <a href="{{ route($p->first()->route) }}">{{ $p->first()->title }}</a>
                            </li>
                            @endif
                            <li class="breadcrumb-item active">
                                {{ $page->title }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls ms text-sm-left text-center s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60 c-gutter-60">
        <div class="container" id="editorjs">
            {!! str_replace("../../..", url('/'), $page->content) !!}
        </div>
    </section>

    @push('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/gh/givanz/VvvebJs/"></script> --}}
    <!-- builder code-->
    {{-- <script src="https://cdn.jsdelivr.net/gh/givanz/VvvebJs/libs/builder/builder.js"></script>
    <!-- undo manager-->
    <script src="https://cdn.jsdelivr.net/gh/givanz/VvvebJs/libs/builder/undo.js"></script>
    <!-- inputs-->
    <script src="https://cdn.jsdelivr.net/gh/givanz/VvvebJs/libs/builder/inputs.js"></script>
    <!-- components-->
    <script src="https://cdn.jsdelivr.net/gh/givanz/VvvebJs/libs/builder/components-bootstrap4.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/givanz/VvvebJs/libs/builder/components-widgets.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/vvvebjs@0.0.1/libs/builder/builder.min.js"></script>

    <script>
        $(document).ready( function () {
            // Vvveb.Builder.init('index.html', function() {
            //     //load code after page is loaded here
            //     // Vvveb.Gui.init();
            // });
        });
    </script>
    @endpush

</x-frontend-layout>

