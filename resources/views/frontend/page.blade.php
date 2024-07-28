@extends('frontend.layouts.app')
@section('meta_title',$page->meta_title.' | '.env('APP_NAME'))
@section('meta_description',$page->meta_description.' | '.env('APP_NAME'))

@include('frontend.includes.navbar')

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head">
					<h2>{{ $page->title }}</h2>
                    <p>{!! $page->description !!}</p>
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
