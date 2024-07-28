@extends('frontend.layouts.app')
@section('meta_title',$management->name.' | '.env('APP_NAME'))
@section('meta_description',$management->name.' | '.env('APP_NAME'))
@include('frontend.includes.navbar')

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head">
					<h2>{{ $management->name }}</h2>
					<h2>{{ $management->designation }}</h2>
					<h2>{{ $management->sub_designation }}</h2>
                    <p>{{ $management->brief_description }}</p>
				</div>
			</div>

		</div>
	</div>
</section>

@include('frontend.includes.footer')
@section('style')

@endsection
@section('script')

@endsection
