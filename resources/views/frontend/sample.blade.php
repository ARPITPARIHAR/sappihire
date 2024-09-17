@extends('frontend.layouts.app')

@section('meta_title', 'Our Gallery | ' . env('APP_NAME'))
@section('meta_description', 'Our Gallery | ' . env('APP_NAME'))

@section('content')



  
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('captcha.sitekey') }}"></script>

<section class="cntct_buyer smpl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="smpl_inr">
                    <h3>Sample</h3>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form action="{{ route('sample.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-box name">
                                    <label>Name</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="first" required>
                                        <span>First</span>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="last" required>
                                        <span>Last</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <label>Phone</label>
                                    <div class="form-group">
                                        <input class="form-control" type="tel" name="number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <label>Details</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="detail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <label>Subject</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <label>Message</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- reCAPTCHA v2 widget -->
                            <div class="col-md-12">
                                <!-- reCAPTCHA Widget -->
                                <div class="g-recaptcha" data-sitekey="{{ config('captcha.sitekey') }}"></div>

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="sbmt_btn">Submit</button>
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



@section('scripts')

@endsection

@endsection

