@extends('layouts.master')

@section('title')
    Foodee | Blog
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ url('assets/images/bg_5.jpg') }})" data-stellar-background-ratio="0.5">
  @include('frontend.common.breadcrum', ['name' => 'Blog', 'url' => '/home'])
</section>

<section class="ftco-section bg-light">
    @include('frontend.common.blog')
</section>
@endsection

@section('script')

@endsection
