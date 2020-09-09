
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
							<h2><span>PROFILE</span></h2><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="Dashboardside pt-5">
		<div class="container">
			<div class="clearfix"></div>
			<div class="row"> 
				@include('frontend.teacher.commons.sidebar')
				<div class="right col-sm-8 col-lg-9">
                <div class="Loginside pt-0">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="bg">
                                        <div class="title text-center">
                                            Availability
                                        </div>
                                        <div class="form">
                                            <div class="row">


                                            <div class="form-group col-sm-12 col-lg-12 ">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endsection                    	