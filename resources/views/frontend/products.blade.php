@extends('frontend.layouts.app')
@section('meta_title','Our Gallery | '.env('APP_NAME'))
@section('meta_description','Our Gallery | '.env('APP_NAME'))
@section('content')

<section class="prdcts">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="prdct_box">
					<div class="prdct_img">
						<img src="images/prdct001.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct002.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct003.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct004.jpg" alt="prdct">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="prdct_box">
					<div class="prdct_img">
						<img src="images/prdct005.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct006.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct007.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct008.jpg" alt="prdct">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="prdct_box">
					<div class="prdct_img">
						<img src="images/prdct009.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct010.jpg" alt="prdct">
					</div>
					<div class="prdct_img">
						<img src="images/prdct011.jpg" alt="prdct">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('style')

@endsection
@section('script')

@endsection
