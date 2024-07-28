@extends('frontend.layouts.app')
@section('meta_title','Contact Us | '.env('APP_NAME'))
@section('meta_description','Contact Us | '.env('APP_NAME'))
@include('frontend.includes.navbar')
<section class="section-cntct">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head">
					<h2>Contact Us</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cntct_box">
					<span><img src="images/adrs.png" alt="adrs"></span>
					<h4>Adress</h4>
					<p> {{ businessSetting(1)->address }}</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cntct_box">
					<span><img src="images/phone.png" alt="phone"></span>
					<h4>Phone Number</h4>
					<p> {{ businessSetting(1)->contact_numbers }}</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cntct_box">
					<span><img src="images/mail.png" alt="mail"></span>
					<h4>Email ID</h4>
					<p>{{ businessSetting(1)->email }}</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="cntct_frm">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
					<form action="{{ route('contact.store') }}" method="POST">
                        @csrf
						<div class="head">
							<h2>Contact Form</h2>
						</div>
						<div class="form_group">
							<input class="fotm_control" type="text" name="first_name" value="" placeholder="First Name" required>
							@error('first_name')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="form_group">
							<input class="fotm_control" type="text" name="last_name" value="" placeholder="Last Name" required>
							@error('last_name')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="form_group">
							<input class="fotm_control" type="number" name="phone_number" value="" placeholder="Phone Number" required>
							@error('phone_number')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="form_group">
							<input class="fotm_control" type="mail" name="email" value="" placeholder="Email" required>
							@error('email')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="form_group">
							<textarea class="fotm_control" name="message" placeholder="Message" required ></textarea>
							@error('message')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
                        <div class="form_group">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="cntct_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.94692956534!2d75.81450367451914!3d26.873427161779343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db67d3fffffff%3A0xe62f0576aa624683!2s10-A%2C%20Jhalana%20Institutional%20Area%2C%20Jhalana%20Doongri%2C%20Jaipur%2C%20Rajasthan%20302004!5e0!3m2!1sen!2sin!4v1715282265333!5m2!1sen!2sin" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
