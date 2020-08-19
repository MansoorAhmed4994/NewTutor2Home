@extends('frontend.layouts.app')
@section('content')
  <!-- Start of slider section
  	============================================= -->
  	<section id="slide" class="slider-section">
  		<div id="slider-item" class="slider-item-details">
  			<div  class="slider-area slider-bg-1 relative-position">
  				<div class="slider-text">
  					<div class="section-title mb20 headline text-center ">
  						<div class="layer-1-3 heading">
  							<h2><span>Profile Step-3</span></h2><br>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>


  	<div class="Loginside">
  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-lg-7">
  					<div class="tab-content" id="myTabContent">
  						<div class="tab-pane fade show active" id="ninja" role="tabpanel" aria-labelledby="ninja-tab">
  							<div class="bg">
  								<div class="title text-center">
  									Profile Step - 3
  								</div>
  								<label class="ml-3 mt-3"><small class="text-primary">(*) All fields are
  								mandatory.</small>
  							</label>
  							<div class="form">
  								<h5 class="mb-5">Tell us what subjects you specialise in</h5>

  								<form>
  									<div class="row">
  										<div class="content col-12">
  											<div class="element" id="div_1">
  												<div class="row pr-4 pl-4">

  													<div class="form-group col-md-12 col-sm-12 ">
  														<label class="font-weight-bold">What is your specialist
  														subjects</label>
  														<span class="text-danger pull-right">*</span>
  														<select class="form-control" id="select_subject" name="select_subject">
  															<option value="">Select Subject</option>
  															<option value="">Animal Communication</option>
  															<option value="s">Cat Education</option>
  														</select>
  													</div>

  													<div class="form-group col-md-12 col-sm-12">
  														<label class="font-weight-bold">Teaching Level</label>
  														<span class="text-danger pull-right">*</span>
  														<select class="form-control" id="select_level" name="select_level">
  															<option value="Select Level">Select Level</option>
  															<option value="Primary">Primary</option>
  															<option value="Secondary">Secondary</option>
  														</select>
  													</div>
  												</div>

  												<div class="row pr-4 pl-4">

  													<div class="form-group col-md-12 col-sm-12">
  														<label class="font-weight-bold">Examination board</label>
  														<span class="text-danger pull-right">*</span> 
  														<select class="form-control" id="select_level" name="select_level">
  															<option value="">Select Board</option>
  															<option value="">Matric Board</option>
  															<option value="">Inter Board</option>
  														</select>
  													</div>
  												</div>

  												<hr>

  											</div>
  											<!-- element div  -->
  										</div>

  										<!-- content div  -->

  										<div class="form-group col-12 mt-2">
  											<div class="offset-sm-6 text-right">
  												<button type="button" class="btn btn-primary small add-more">
  													Add More
  												</button>
  											</div>
  										</div>

  										<div class="row pr-5 pl-5">
  											<div class="form-group col-sm-12 col-md-12">
  												<label class="font-weight-bold">
  													Will you be teaching student under 18
  													<span class="text-danger pull-right ml-2">*</span>
  												</label>
  												<ul>
  													<li>
  														<label>
  															<input type="radio" id="yes" name="teach_under_16" class="teach_under_16" value="1">
  															<span>Yes</span>
  														</label>
  													</li>
  													<li>
  														<label>
  															<input type="radio" id="no" name="teach_under_16" class="teach_under_16" value="0">
  															<span>No</span>
  														</label>
  													</li>
  												</ul>
  											</div>

  											<div id="dbs_certificate_div" class="col-md-12" style="display:none">
  												<small>Max file size must be less than 10MB.</small>
  												<br>
  												<label class="upload img btn py-2">

  													<input type="file" name="dbs_certificate" id="dbs_certificate" data-target="image-name" class="d-none" accept="image/jpeg,image/jpg,image/png,application/pdf">
  													<span>
  													Government background check certificate                                                     </span>
  												</label>
  												<!-- <span class="text-danger ml-2">*</span> -->
  												<br>
  											</div>
  											<div class="col-md-12 ml-3 image-name" style="color: teal">
  											</div>
  										</div>




  										<div class="row pr-5 pl-5">
  											<div class="form-group col-sm-12 col-md-12 ">
  												<label class="font-weight-bold">
  													Availability
  												</label>
  												<div class="Qualifications p-0">
  													<div id="" class="table-responsive">
  														<table class="table text-center">
  															<thead>
  																<tr>
  																	<th class="text-left">Time</th>
  																	<th>Mon</th>
  																	<th>Tue</th>
  																	<th>Wed</th>
  																	<th>Thu</th>
  																	<th>Fri</th>
  																	<th>Sat</th>
  																	<th>Sun</th>
  																</tr>
  															</thead>
  															<tbody id="availability_div">
  																<tr>
  																	<td class="text-left">
  																		<img src="assets/img/logo/genaral-icn-trns.png" alt="Pre 12 PM">
  																		Pre 12 PM
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																</tr>

  																<tr>
  																	<td class="text-left">
  																		<img src="assets/img/logo/genaral-icn1-trns.png" alt="12 - 5 PM">
  																		12 - 5 PM
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																</tr>

  																<tr>
  																	<td class="text-left">
  																		<img src="assets/img/logo/genaral-icn2-trns.png" alt="After 5 PM">
  																		After 5 PM
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																	<td>
  																		<label>
  																			<input type="checkbox" value="1">                                                                                    <span></span>
  																			<span></span>
  																		</label>
  																	</td>
  																</tr>
  															</tbody>
  														</table>
  													</div>
  												</div>
  											</div>
  										</div>
  										<div class="mt-5 form-group col-12">
  											<a class=" btn btn-primary w-100" href="{{ route('teacher-dashboard') }}">
  												Save
  											</a>
  										</div>
  									</div>
  								</form>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  @endsection