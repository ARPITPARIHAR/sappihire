@extends('frontend.layouts.app')
@section('meta_title','Our Gallery | '.env('APP_NAME'))
@section('meta_description','Our Gallery | '.env('APP_NAME'))
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
                        @if($images && count($images) > 0)
                            <!-- Display the first image initially -->
                            <a class="example-image-link" href="{{ asset($images[0]) }}" data-lightbox="gallery-set-{{ $item->id }}">
                                <div class="glry_imag">
                                    <img class="example-image" src="{{ asset($images[0]) }}" alt="{{ $item->title }}" />
                                </div>
                            </a>
                            <!-- Display the rest of the images hidden but in the same lightbox set -->
                            @foreach(array_slice($images, 1) as $image)
                                <a class="example-image-link d-none" href="{{ asset($image) }}" data-lightbox="gallery-set-{{ $item->id }}"></a>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    // Initialize lightbox
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });
</script>
@endsection
