@extends('frontend.layouts.app')
@section('meta_title','rcem')
@include('frontend.includes.navbar')

<section class="rlvng_ordrs">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Training Programs</h2>
				<div class="ordr_fltr">
					<h4>Filters</h4>
					<div class="fltr_inr">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Select Months</label>
									<select name="">
										<option value="" selected="selected">Select Months</option>
										<option value="1">January 2024</option>
										<option value="2">February 2024</option>
										<option value="3">March 2024</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Search</label>
									<input class="form-control" type="search" name="" placeholder="Search">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="ordr_list">
					<h4>Training & Programs</h4>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
								  <th>S.No.</th>
								  <th>Details</th>
								  <th>View</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>1</td>
								  <td>Banking</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>2</td>
								  <td>Processing</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>3</td>
								  <td>Audit</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>4</td>
								  <td>Planning</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>5</td>
								  <td>Publicity</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>6</td>
								  <td>Elections</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>7</td>
								  <td>Housing</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>8</td>
								  <td>Rules</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>9</td>
								  <td>RSVVN</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>10</td>
								  <td>Consumer & Marketing</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>11</td>
								  <td>Administration/HRD</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>12</td>
								  <td>ICDP</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>13</td>
								  <td>Budget</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>14</td>
								  <td>Women Cell</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>15</td>
								  <td>Tenders</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>16</td>
								  <td>Miscellaneous</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>17</td>
								  <td>Training</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								</tr>
								<tr>
								  <td>18</td>
								  <td>TA</td>
								<td><a href="#"><img src="images/view.png" alt="view"></a></td>
								<tr>
								  <td>19</td>
								  <td>Legal</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
								<tr>
								  <td>20</td>
								  <td>Other Order</td>
								  <td><a href="#"><img src="images/view.png" alt="view"></a></td>
							</tbody>
						</table>
					</div></div>

			</div>

		</div>
	</div>
</section>



@include('frontend.includes.footer')

@section('style')

@endsection
@section('script')

@endsection
