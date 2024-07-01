<section class="main_banner">
    <div class="container-fluid">
        <div class="row">
            <div class="bnr_slide owl-carousel owl-theme">
                @foreach (\App\Models\Slider::take(5)->latest()->get() as $slider)
                <div class="item">
                    <img src="{{ asset( $slider->image) }}" alt="{{ $slider->alt_text }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

