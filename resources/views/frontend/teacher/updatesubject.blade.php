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
  							<h2><span>Update Subject</span></h2><br>
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
                                  Update Subject
  								</div>
  								<label class="ml-3 mt-3"><small class="text-primary">(*) All fields are
  								mandatory.</small>
  							</label>
  							<div class="form">
  								<h5 class="mb-5">Tell us what subjects you specialise in</h5>

								  @include('frontend.frontalert')
 <form class="form" method="POST" action="{{ route('teacher-step-three-save') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off" novalidate="novalidate">
        @csrf
        <input type="hidden" placeholder="First name" name="profile" value="update" class="form-control">
                          
  									<div class="row">
  										<div class="content col-12">
  											<div class="element" id="div_1">
  												<div class="row pr-4 pl-4">

  													<div class="form-group col-md-12 col-sm-12 ">
  														<label class="font-weight-bold">What is your specialist
  														subjects</label>
  														<span class="text-danger pull-right">*</span>
  														<select class="form-control" id="select_subject" name="subject">
  															<option value="">Select Subject</option>
															  @for($i=0;$i<=count($subject)-1;$i++)
                                                            <option value="{{ $i  }}"  @if($result->subject==$i) selected @endif> {{ $subject[$i] }}</option>
                                                            @endfor
  														</select>
  													</div>

  													<div class="form-group col-md-12 col-sm-12">
  														<label class="font-weight-bold">Teaching Level</label>
  														<span class="text-danger pull-right">*</span>
  														<select class="form-control" id="select_level" name="level">
  															<option value="">Select Level</option>
															  @for($i=0;$i<=count($level)-1;$i++)
                                                            <option value="{{ $i  }}"  @if($result->level==$i) selected @endif> {{ $level[$i] }}</option>
                                                            @endfor  													
														</select>
  													</div>
  												</div>

  												

  												<hr>

  											</div>
  											<!-- element div  -->
  										</div>

  										<!-- content div  -->

  										<!--<div class="form-group col-12 mt-2">
  											<div class="offset-sm-6 text-right">
  												<button type="button" class="btn btn-primary small add-more">
  													Add More
  												</button>
  											</div>
  										</div>-->

  										<div class="row pr-5 pl-5">
  											<!--<div class="form-group col-sm-12 col-md-12">
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
  											</div>-->

  											
  										</div>



<!-- 
  										<div class="row pr-5 pl-5">
  											<div class="form-group col-sm-12 col-md-12 ">
  												<div class="Qualifications  p-0">
  													<div id="" class="table-responsive ">
  														<table class="table text-center">
  															<thead>
  																<tr>
  																	<th class="text-left">Time</th>
  																	<th>Mon</th>
  																	<th>Tue</th>
  																	<th>Wed</th>
  																	<th>Thu</th>
  																	<th>Fri</th>
  																</tr>
  															</thead>
  															<tbody id="availability_div">
  																<tr>
  																	<td class="text-left">
  																		<img src="{{ url('front/img/logo/genaral-icn-trns.png') }}" alt="Pre 12 PM">
  																		4PM-6PM
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																		    <input type="checkbox" class="custom-control-input gettime" name="daysTime[]"  id="customCheck1" value="1-1" >
																			<label class="custom-control-label " for="customCheck1"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck2" name="daysTime[]"  value="1-2">
																			<label class="custom-control-label " for="customCheck2"></label>
																		</div>
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3" name="daysTime[]"  value="1-3">
																			<label class="custom-control-label " for="customCheck3"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4"name="daysTime[]"  value="1-4">
																			<label class="custom-control-label " for="customCheck4"></label>
																		</div>
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5" name="daysTime[]"  value="1-5">
																			<label class="custom-control-label " for="customCheck5"></label>
																		</div>
  																	</td>
  																</tr>

  																<tr>
  																	<td class="text-left">
  																		<img src="{{ url('front/img/logo/genaral-icn1-trns.png') }}" alt="12 - 5 PM">
  																		6PM-8PM
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6" name="daysTime[]"  value="2-1">
																			<label class="custom-control-label " for="customCheck6"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck7" name="daysTime[]"  value="2-2">
																			<label class="custom-control-label " for="customCheck7"></label>
																		</div>
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck8" name="daysTime[]"  value="2-3">
																			<label class="custom-control-label " for="customCheck8"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck9" name="daysTime[]"  value="2-4">
																			<label class="custom-control-label " for="customCheck9"></label>
																		</div>
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck10"name="daysTime[]"  value="2-5">
																			<label class="custom-control-label " for="customCheck10"></label>
																		</div>
  																	</td>
  																</tr>

  																<tr>
  																	<td class="text-left">
  																		<img src="{{ url('front/img/logo/genaral-icn2-trns.png')}}" alt="After 5 PM">
  																		4PM-8PM
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck11" name="daysTime[]"  value="3-1">
																			<label class="custom-control-label " for="customCheck11"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12" name="daysTime[]"  value="3-2">
																			<label class="custom-control-label " for="customCheck12"></label>
																		</div>
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck13"  name="daysTime[]" value="3-3">
																			<label class="custom-control-label " for="customCheck13"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck14"  name="daysTime[]" value="3-4">
																			<label class="custom-control-label " for="customCheck14"></label>
																		</div>
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck15" name="daysTime[]"  value="3-5">
																			<label class="custom-control-label " for="customCheck15"></label>
																		</div>
  																	</td>
  																</tr>
  															</tbody>
  														</table>
  													</div>
												</div>
												  <br><br>
												<div class="Qualifications  p-0">
  													<div id="" class="table-responsive ">
  														<table class="table text-center">
  															<thead>
  																<tr>
  																	<th class="text-left">Time</th>
  																	<th>Saturday</th>
  																	<th>Sunday</th>
  																</tr>
  															</thead>
  															<tbody id="availability_div">
  																<tr>
  																	<td class="text-left">
  																		<img src="{{  url('front/img/logo/genaral-icn-trns.png')}}" alt="Pre 12 PM">
  																		10AM-12PM
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck16"  name="daysTime[]"value="4-6">
																			<label class="custom-control-label " for="customCheck16"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck17" name="daysTime[]" value="4-7">
																			<label class="custom-control-label " for="customCheck17"></label>
																		</div>
  																	</td>
  																
  																</tr>

  																<tr>
  																	<td class="text-left">
  																		<img src="{{  url('front/img/logo/genaral-icn1-trns.png')}}" alt="12 - 5 PM">
  																		12PM-2PM
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck18" name="daysTime[]" value="5-6">
																			<label class="custom-control-label " for="customCheck18"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck19" name="daysTime[]" value="5-7">
																			<label class="custom-control-label " for="customCheck19"></label>
																		</div>
  																	</td>
  																	
  																</tr>

  																<tr>
  																	<td class="text-left">
  																		<img src="{{  url('front/img/logo/genaral-icn2-trns.png')}}" alt="After 5 PM">
  																		2PM-4PM
  																	</td>
  																	<td>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck20"  name="daysTime[]"value="6-6">
																			<label class="custom-control-label " for="customCheck20"></label>
																		</div>
  																	</td>
  																	<td>
																	  	<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck21" name="daysTime[]" value="6-7">
																			<label class="custom-control-label " for="customCheck21"></label>
																		</div>
  																	</td>
  																	
  																</tr>
  															</tbody>
  														</table>
  													</div>
  												</div>
  											</div>
  										</div> -->
  										<div class="mt-5 form-group col-12">
										  <button name="search" class="btn btn-primary w-100" type="submit">
                                                              Update
                                                            </button>
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