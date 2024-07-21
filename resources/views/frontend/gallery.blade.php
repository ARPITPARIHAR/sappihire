@extends('frontend.layouts.app')
@section('meta_title', 'rcem')
@include('frontend.includes.navbar')

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="head">
                <h2>Our Gallery</h2>
            </div>

            @foreach(\App\Models\Gallery::all() as $item)
            <div class="col-lg-3">
                <div class="glry_box">
                    @php
                        $images = json_decode($item->image_paths);
                    @endphp
                    @if($images)
                        @foreach($images as $image)
                            <a class="example-image-link" href="{{ asset($image) }}" data-lightbox="example-set">
                                <div class="glry_imag">
                                    <img class="example-image" src="{{ asset($image) }}" alt="{{ $item->title }}" />
                                </div>
                            </a>
                        @endforeach
                    @endif
                    <h4>{{ $item->title }}</h4>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

@include('frontend.includes.footer')

@section('style')
@endsection
@section('script')
@endsection
