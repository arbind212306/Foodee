@extends('layouts.master')

@section('title')
    TasteIt | Menu
@endsection

@section('content')

@endsection
	
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ url('assets/images/bg_5.jpg') }});" data-stellar-background-ratio="0.5">
    @include('frontend.common.breadcrum', ['name' => 'Menu', 'url' => '/home'])
</section>

<!-- <section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary"> -->
                @include('frontend.common.msg')
            <!-- </div>
        </div>
    </div>
</section> -->

<section class="ftco-section">
    @include('frontend.common.menu', ['categories' => $categories])
</section>

<section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                @include('frontend.common.reservation', ['class' => 'col-md-4'])
            </div>
        </div>
    </div>
</section>

@section('scripts')

@endsection