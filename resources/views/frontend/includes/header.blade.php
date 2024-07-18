<section class="hm_about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="abt_instut">
					<h2>About Institute</h2>
                    @foreach (\App\Models\About::all() as $aboutService)
                    <p>{{ $aboutService->brief_description }}</p>
                @endforeach
					<a href="#" class="btn">View More > </a>
				</div>
				<div class="abt_instut">
					<h2>Placement Services</h2>
                    @foreach (\App\Models\Placementservice::all() as $placementService)
                    <p>{{ $placementService->brief_description }}</p>
                @endforeach
					<a href="#" class="btn">View More > </a>
				</div>
				<div class="abt_instut">
					<h2>Hostel Facility</h2>
                    @foreach (\App\Models\Hostelservice::all() as $hostelService)
                    <p>{{ $hostelService->brief_description }}</p>
                @endforeach
					<a href="#" class="btn">View More > </a>
				</div>
			</div>
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
			<div class="col-md-4">
				<div class="team_box">
					<div class="team_imag"><img src="images/team001.jpg" alt="team"></div>
					<div class="team_txt">
				 		<h3><strong>Smt. Shuchi Tyagi</strong> Chairman's</h3>
						<span>Secretary, Cooperatives</span>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						<a href="#" class="btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team_box">
					<div class="team_imag"><img src="images/team001.jpg" alt="team"></div>
					<div class="team_txt">
						<h3><strong>Smt. Archana Singh</strong> Vice Chairman's</h3>
						<span>Registrar, Cooperative Societies</span>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						<a href="#" class="btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team_box">
					<div class="team_imag"><img src="images/team001.jpg" alt="team"></div>
					<div class="team_txt">
						<h3><strong>Smt. Shuchi Tyagi</strong> Director's</h3>
						<span>Secretary, Cooperatives</span>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						<a href="#" class="btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="vsn_msn">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-6 no_padding">
				<div class="vision">
					<div class="vision_txt">
						<h3>Vision</h3>
						<p>To strengthen cooperative movement in Rajasthan 	through education, training and research.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 no_padding">
				<div class="mision">
					<h3>Mision</h3>
					<p>To provide need based training programme and facilitate the process of human resource development in coopratives.</p>
				</div>
			</div>
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
                    <ul class="marquee">
                        @foreach (\App\Models\News::all() as $newsItem)
                            <li>{{ $newsItem->news_description }}</li>
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
                                    $upcomings = \App\Models\Upcoming::all();
                                @endphp
                                @foreach ($upcomings as $upcoming)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $upcoming->title }}</td>
                                    <td>{{ date('d-m-Y', strtotime($upcoming->from_date)) }} | {{ date('d-m-Y', strtotime($upcoming->to_date)) }}</td>
                                    <td>{{ $upcoming->venue }}</td>
                                    <td>
                                        @if ($upcoming->pdf_file)
                                        <a href="{{ asset('storage/upcomings/' . $upcoming->pdf_file) }}" download="{{ $upcoming->title }}.pdf">
                                            <img src="{{ asset('images/pdf.png') }}" alt="pdf">
                                        </a>
                                    @else
                                        No PDF available
                                    @endif


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                        <img src="{{asset($training->thumbnail_img)}}" alt="web">
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
                @foreach (\App\Models\Banner::all() as $banner)
				<div class="crtfct_bnr">
                    <img src="{{asset($banner->thumbnail_img)}}" alt="banner">
				</div>
                @endforeach
			</div>
		</div>
	</div>
</section>
