@extends('frontend.layouts.app')
@section('meta_title','Welcome To | '.env('APP_NAME'))
@section('meta_description','Welcome To | '.env('APP_NAME'))


@section('content')
    @include('frontend.includes.slidebar')

    <section class="hm_abt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2>Inception year 2009. A Very Young & Very Aspirational Government Recognised Apparel Star Export House.</h2>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('style')

@endsection
@section('script')

@endsection
