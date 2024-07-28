@extends('frontend.layouts.app')
@section('meta_title','Welcome To | '.env('APP_NAME'))
@section('meta_description','Welcome To | '.env('APP_NAME'))


@section('content')
    @include('frontend.includes.slidebar')

    <section class="hm_about">
        <div class="container">
            <div class="row">
                @foreach (\App\Models\Page::where('parent_id',0)->where('featured',1)->get() as $page)
                    <div class="col-md-12">
                        <div class="abt_instut">
                            <h2>{{ $page->title }}</h2>
                            <p>{{ $page->brief_description }}</p>
                            <a href="{{ route('page', $page->slug) }}" class="btn">View More ></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="hm_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>The Management Desk</h2>
                    </div>
                </div>
                @php
                    $managements = \App\Models\Management::all();
                @endphp
                @foreach ($managements as $member)
                    <div class="col-md-4">
                        <div class="team_box">
                            <div class="team_imag">
                                <img src="{{ asset($member->thumbnail_img) }}" alt="team">
                            </div>
                            <div class="team_txt">
                                <h3><strong>{{ $member->name }}</strong> {{ $member->designation }}</h3>
                                <span>{{ $member->sub_designation }}</span>
                                <p>{{ $member->brief_description }}</p>
                                <a href="{{ route('management.detail', $member->slug) }}" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="vsn_msn">
        <div class="container-fluid">
            <div class="row align-items-center">
                @foreach (\App\Models\Page::where('parent_id',1)->where('featured',1)->get() as $page)
                    <div class="col-md-6 no_padding">
                        <div class="vision">
                            <div class="vision_txt">
                                <h3>{{ $page->title }}</h3>
                                <p>{{ $page->brief_description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="nws_trng">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="head">
                        <h3>Latest News & Highlights</h3>
                    </div>
                    <div class="nws_evnt">
                        <ul class="marquee"  onMouseOver="this.stop()" onMouseOut="this.start()">
                            @foreach (\App\Models\News::all() as $newsItem)
                                <a href="{{ $newsItem->hyperlink }}" target="_blank">
                                    <li>{{ $newsItem->news_description }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="upcmng_trng">
                        <div class="head">
                            <h3>Upcoming Training Programmes/Events at RICEM</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Title</th>
                                        <th>From Date | To Date</th>
                                        <th>Venue</th>
                                        <th>Know More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $upcomings = \App\Models\Upcoming::latest()->get();
                                    @endphp
                                    @foreach ($upcomings as $upcoming)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $upcoming->title }}</td>
                                        <td>{{ date('d-m-Y', strtotime($upcoming->from_date)) }} | {{ date('d-m-Y', strtotime($upcoming->to_date)) }}</td>
                                        <td>{{ $upcoming->venue }}</td>
                                        <td>
                                        <a href="{{  asset($upcoming->pdf_file) }}" download >
                                            <img src="{{ asset('images/pdf.png') }}" alt="pdf">
                                        </a>
                                    </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usfulweb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>Training & Events Held</h2>
                    </div>
                </div>
                @foreach (\App\Models\Training::all() as $training)
                <div class="col-md-4">
                    <div class="web_box">
                        <a href="{{ $training->hyperlink }}" target="_blank">
                            <img src="{{ asset($training->thumbnail_img) }}" alt="web">
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <section class="othr_logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>Other Useful Information</h2>
                    </div>
                    <div class="othr_slide owl-carousel owl-theme">
                        @foreach (\App\Models\Information::all() as $info)
                            <div class="item">
                                <img src="{{asset($info->logo)}}" alt="othr_logo">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="crtfcat">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 no_padding">
                    @foreach (\App\Models\Slider::orderBy('id', 'desc')->take(1)->get() as $banner)
                    <div class="crtfct_bnr">
                        <img src="{{asset($banner->thumbnail_img)}}" alt="banner">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
@section('style')

@endsection
@section('script')

@endsection
