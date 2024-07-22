@extends('frontend.layouts.app')
@section('meta_title','rcem')

@include('frontend.includes.navbar')

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head">
					<h2>About us</h2>
                    @foreach (\App\Models\About::all() as $aboutService)
                    <p>{{ $aboutService->brief_description }}</p>
                @endforeach
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
