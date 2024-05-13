@extends('errors.layout')
@push('styles')
<style>
    .container > p {
        margin: 0 !important;
        padding: 0 !important
    }
</style>
@endpush
@section('title', __('Site Maintenance'))

@section('message')
<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; The Team</p>
    </div>
</article>
@endsection
