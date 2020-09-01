
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
                            <div class="Availability">
                                <div class="title">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <h4>Tutor Availability</h4>
                                            <input type="hidden" id="tutor_id" name="tutor_id" value="7166">
                                        </div>
                                    </div>
                                </div>
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
                                                    <img src="{{ url('front/img/logo/genaral-icn-trns.png') }}" alt="Pre 12 PM">
  						                               4PM-6PM
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{ url('front/img/logo/genaral-icn1-trns.png') }}" alt="12 - 5 PM">
  													6PM-8PM
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{ url('front/img/logo/genaral-icn2-trns.png')}}" alt="After 5 PM">
  													4PM-8PM
                                                    </td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{  url('front/img/logo/genaral-icn1-trns.png')}}" alt="12 - 5 PM">
  													12PM-2PM
                                                    </td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{  url('front/img/logo/genaral-icn2-trns.png')}}" alt="After 5 PM">
  													  2PM-4PM
                                                    </td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                                                    <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
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

        @endsection                    	