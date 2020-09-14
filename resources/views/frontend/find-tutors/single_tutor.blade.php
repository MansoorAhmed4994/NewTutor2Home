@extends('frontend.layouts.app')
@section('content')
      
        <!-- Start of Header section
	============================================= -->


	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-3">
								<h2><span>Find </span> Your  <br> Perfect  <span>Tutor</span></h2>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="container mb-3">
                <!-- <div class="search_course_bg">
                     <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="country" id="country" class="custom-select ">
                                <option value="" data-select2-id="8">Country</option>
                            </select>
                        </div>
            
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="price" id="price" class="custom-select ">
                                <option value="" data-select2-id="8">Price</option>
                            </select>
                        </div>
                    
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="subject" id="subject" class="custom-select ">
                                <option value="" data-select2-id="8">Subject</option>
                            </select>
                        </div>
                        <div class="form-group col-12 mb-0">
                            <div class="genius-btn float-right gradient-bg text-center text-uppercase ul-li-block bold-font">
                                <a href="#">Find Now <i class="fas fa-caret-right"></i></a>
                            </div>
                            <div class="about-btn">
                                <div class="genius-btn float-right gradient-bg text-center text-uppercase ul-li-block bold-font">
                                    <a href="#">Reset  <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-9 col-md-8">
                        <div id="dynamic-content">
                            <div class="item">
                                <div class="row no-gutters">
                                    <div class="img col-lg-4">
                                    <img class="premium-badge-find-a-ninja-badge" src="{{asset('front/img/premium-badeg.png')}}">
                                        <img class="premium-badge-find-a-ninja" src="{{asset('front/img/icon_offre-pro1.png')}}">
    
                                        @if($teacher->image!="")
									<img src="{{ url('images') }}/{{$teacher->image }}" alt="">
									@else
									<img src="{{ asset('front/img/teacher/mt-3.jpg') }}" alt="">
									@endif
                                    </div>
                                    <div class="text col-lg-8">
                                        <div class="row h-100">
                                            <div class="left col-lg-7 col-md-6">
                                            <h4>{{ $teacher->name }}
                                                    <span class="subtitle d-block">{{$teacher->description }}</span>
                                                </h4>
                                                <p>I am a Afrocentric Dr. Of…</p>
                                                @if(isset($teacher->teacherSpecialization) && !empty($teacher->teacherSpecialization))
                                                <h6>Subjects: <span class="subtitle">  @for($i=0;$i<=count($subjectall)-1;$i++)
                              @if($teacher->teacherSpecialization->subject==$i) {{ $subjectall[$i] }} @endif
                             @endfor</span></h6>    
                                                <h6>Levels: <span class="subtitle">
                                                @for($i=0;$i<=count($level)-1;$i++)
                              @if($teacher->teacherSpecialization->level==$i) {{ $level[$i] }} @endif
                             @endfor</span></h6> 
                                                @endif     
                                            </div>
                                        <div class="right col-lg-5 col-md-6">
                                        <div class="bdr">
                                            <div class="text-center">
                                                <span class="hour">
                                                @if(isset($teacher->qualification) && !empty($teacher->qualification)) 
                                                    <span class="price d-block">
                                                    @for($i=0;$i<=count($rate)-1;$i++)
                              @if($teacher->qualification->Tutor_per_hour==$i) ${{ $rate[$i] }} @endif
                             @endfor</span> /hour
                             @endif
                                                </span>
                                            </div>
                                            <div>
                                                <ul class="rating mb-0">
                                                    <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    <li><small style="font-size: small;">0 reviews</small></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <!-- <p><span class="badge badge-success">0</span> completed lessons</p> -->
                                            </div>
                                            <!-- <p class="d-none">Complete Session <span class="icn">450</span></p> -->
                                            <!-- <p class=""><span class="icn"><img style="max-width: 20px;" src="assets/img/orange-1.png" alt=""></span>
                                                        Orange Belt</p> -->
                                                        <p></p>
                                                            
                                            <div class="text-center">
                                                <a href="{{ route('book-class', ['id' =>  $teacher->id]) }}" class="btn btn-primary">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-9 col-md-8">
                        <div id="dynamic-content">
                            <div class="Details">
                                <div class="block">
                                    <h4>About me</h4>
                                    <p>
                                        <span class="half-description">{{$teacher->description }}</span>
                                        <span class="full-description"></span>
                                        <span class="show-more text-primary">Show more</span>
                                    </p>
                                </div>
                                <div class="block">
                                    <h4>About my sessions</h4>
                                    <p>
                                        <span class="half-description">Sessions will be adjusted to student needs.</span>
                                    </p>
                                </div>
                                <div class="Qualifications qualify">
                                    <h4>Qualifications</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>University</th>
                                                    <th>Course Title</th>
                                                    <th>Qualification</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($teacher->qualification) && !empty($teacher->qualification)) 
                                                <tr>
                                                    <td>Eastern Mediterranean University                                            </td>
                                                    <td>@for($i=0;$i<=count($qualification_type)-1;$i++)
                              @if($teacher->qualification->qualification_type==$i) {{ $qualification_type[$i] }} @endif
                             @endfor</td>
                                                    <td> @for($i=0;$i<=count($qualificationall)-1;$i++)
                              @if($teacher->qualification->class_type==$i) {{ $qualificationall[$i] }} @endif
                             @endfor</td>
                                                </tr>
                                            @endif    
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mb-5">
                                    </div>
                                <?php //dump($teacherslots);?>

                                    <div class="Qualifications">
                                        <h4>General Availability</h4>
                                        <div class="table-responsive">
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
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==1 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==2 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==3 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==4 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==5 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==6 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==7 && $slots->time==1)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{ url('front/img/logo/genaral-icn1-trns.png') }}" alt="12 - 5 PM">
  													6PM-8PM
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==1 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==2 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==3 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==4 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==5 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==6 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==7 && $slots->time==2)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{ url('front/img/logo/genaral-icn2-trns.png')}}" alt="After 5 PM">
  													4PM-8PM
                                                    </td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==1 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==2 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==3 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==4 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==5 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==6 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==7 && $slots->time==3)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{  url('front/img/logo/genaral-icn-trns.png')}}" alt="After 5 PM">
                                                    10AM-12PM
                                                    </td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==1 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==2 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==3 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==4 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==5 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==6 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==7 && $slots->time==4)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{  url('front/img/logo/genaral-icn1-trns.png')}}" alt="12 - 5 PM">
  													12PM-2PM
                                                    </td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==1 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==2 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==3 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==4 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==5 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==6 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==7 && $slots->time==5)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                    <img src="{{  url('front/img/logo/genaral-icn2-trns.png')}}" alt="After 5 PM">
  													  2PM-4PM
                                                    </td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==1 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==2 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==3 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==4 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td> @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==5 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==6 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif</td>
                                                    <td>
                                                    @if(count($teacherslots))  
                                                            @foreach($teacherslots as $key => $slots) 
                                                            @if($slots->days==7 && $slots->time==6)
                                                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                    </td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                                                    <!--<div class="text-center mb-4 d-none d-block d-md-none">
                                            <a href="https://www.tutorninjas.com/student-login" class="btn btn-primary">
                                                15 minute free consultation
                                            </a>
                                        </div>-->

                                    <div class="rating-review" id="rating-review">
                                        <h4>Rating &amp; Reviews</h4>
                                        <div class="totalReview">
                                            <div class="row align-items-center">
                                                <div class="col-sm-6">
                                                    <span class="total">0</span>
                                                    <ul class="rating">
                                                        <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>                                            <li><i>no reviews yet                                                </i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="review-list student-reviews-box">
                                    </div>

                                    <div class="mt-3 mb-3 text-center book-session">
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    
                </div>
            </div>

		</section>
	<!-- End of slider section
		============================================= -->
        @endsection