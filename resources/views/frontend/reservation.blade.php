@extends('layouts.master')

@section('title')
    Foodee | Reservation
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ url('assets/images/bg_5.jpg') }});" data-stellar-background-ratio="0.5">
	@include('frontend.common.breadcrum', ['name' => 'Reservation', 'url' => '/home'])
</section>

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    @include('frontend.common.reservation', ['class' => 'col-md-4'])
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url({{ url('assets/images/bg_6.jpg') }});"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image: url({{ url('assets/images/bg_4.jpg') }});"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">This is our secrets</span>
						<h2 class="mb-4">Perfect Ingredients</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
						</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')

@endsection