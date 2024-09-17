@extends('frontend.layouts.app')
@section('meta_title','Our Gallery | '.env('APP_NAME'))
@section('meta_description','Our Gallery | '.env('APP_NAME'))
@section('content')





<section class="cntct_buyer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="buyer">
					<p>Buyer - We facilitate shared aspiration in the field of fashion. If you are someone with great ,head turning fashion sense and always aspired to have a brand in your name but don't know how to start, contact us. <a href="#">Email:- ankit@sapphirefashions.in</a></p>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
					<form action="{{ route('buyer.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="detail" placeholder="Details" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="subject" placeholder="Subject" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="sbmt_btn">Send Message</button>
                            </div>
                        </div>
                    </form>

				</div>
			</div>

		</div>
	</div>
</section>



<style>
    .custom-alert {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        width: 100%;
        max-width: 350px;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: navy; /* Navy blue background */
        color: white; /* White text color */
    }

    .custom-alert .btn-close {
        filter: invert(1); /* Inverts the color of the close button to make it visible */
    }

    .custom-alert .btn-close:hover {
        filter: invert(0.8); /* Slightly less inversion on hover */
    }

    </style>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('style')

@endsection
@section('script')

@endsection
