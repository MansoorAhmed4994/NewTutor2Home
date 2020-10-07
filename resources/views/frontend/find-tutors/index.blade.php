@extends('frontend.layouts.app')
@section('content')
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
            <form class="form" action="" method="GET" accept-charset="utf-8" id="filterfrom" >
        @csrf
      
            <div class="container mb-3" style="margin-top: -105px;">
                <div class="search_course_bg">
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="country" id="country" class="custom-select" name="country">
                                                        <option value="">Select Country</option>   
                                                        @foreach($countries as $countries)

                                                        <option value="{{ $countries }}" 
                                                        @if(request()->get('country')== $countries) Selected  @endif

                                                        >{{$countries }}</option> 
                                                        @endforeach;
                                                    </select>
                        </div>
            
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="examination_board" id="examination_board" class="custom-select ">
                                <option value="" data-select2-id="8">Examination Board</option>
                            </select>
                        </div>
                    
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="subject" id="subject" class="custom-select ">
                            <option value=""> Select  Subject</option>
                                                            @for($i=0;$i<=count($subjectall)-1;$i++)
                                                            <option value="{{ $i  }}"   @if(request()->get('subject')== $i ) Selected  @endif> {{ $subjectall[$i] }}</option>
                                                            @endfor
                                                        </select>
                            </select>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="level" id="level" class="custom-select " >
                            <option value=""> Select  Lavel</option>
                            @for($i=0;$i<=count($level)-1;$i++)
                                                            <option value="{{ $i  }}"  @if(request()->get('level')== $i ) Selected  @endif > {{ $level[$i] }}</option>
                                                            @endfor
                            </select>
                        </div>
            
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="price" id="price" class="custom-select ">
                            <option value=""> Select  Price</option>
                            @for($i=0;$i<=count($rate)-1;$i++)
                                                            <option value="{{ $i  }}"  @if(request()->get('price')== $i ) Selected  @endif> {{ $rate[$i] }}</option>
                                                            @endfor
                            </select>
                        </div>
                    
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="availability" id="availability" class="custom-select ">
                                <option value="" data-select2-id="8">Availability</option>
                            </select>
                        </div>
                        <div class="form-group col-12 mb-0">
                            <div class="about-btn">
                                <div class="genius-btn btn-margin-short-width float-right gradient-bg text-center text-uppercase ul-li-block bold-font">
                                    <button name="search" class="find-tutor-now" type="submit">Find Now <i class="fas fa-caret-right"></i> </button>
                                </div>
                            </div>
                            <div class="about-btn">
                                <div class="genius-btn float-right gradient-bg text-center text-uppercase ul-li-block bold-font">
                                    <a href="javascript:void(0)" onClick="clearForm()">Reset  <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
          </form>  
            <div class="container sidebar-content-find-tutor">
                <div class="row">
                    <div class=" col-lg-3 col-md-4">
                        <div id="sidebar">
                            <div class="sidebar__inner">
                                <div class="bg">
                                    <h4>Related subjects</h4>
                                    <ul id="related_subjacts">
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-9 col-md-8">
                        <div id="dynamic-content" class="dynamic-content-padding">
                          @if(count($teachers))  
                           @foreach($teachers as $key => $teacher) 
                           <?php //dump($teacher->qualification->id);?>
                            <div class="item @if($key>0) mt-5 @endif">
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
                                                <!-- <p>I am a Afrocentric Dr. Of…</p> -->
                                                @if(isset($teacher->teacherSpecialization) && !empty($teacher->teacherSpecialization))
                                                <h6>Subjects: 
                                                    <span class="subtitle">  
                                                        @for($i=0;$i<=count($subjectall)-1;$i++)

                                                            @if($teacher->teacherSpecialization->subject==$i)

                                                            {{ $subjectall[$i] }} 

                                                            @endif

                                                        @endfor
                                                    </span>
                                                </h6>    
                                                <h6>Levels: 
                                                    <span class="subtitle">
                                                        @for($i=0;$i<=count($level)-1;$i++)
                                                            @if($teacher->teacherSpecialization->level==$i) 
                                                            
                                                            {{ $level[$i] }} 

                                                            @endif
                                                        @endfor
                                                    </span>
                                                </h6> 
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
                                                                @endfor
                                                            </span> /hour
                                                                @endif
                                                        </span>
                                                    </div>
                                                <div>
                                                
                                                    <ul class="rating mb-0">
                                                        <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><small style="font-size: small;">0 reviews</small></li>
                                                    </ul>
                                                    <div class="clearfix">

                                                    
                                                    </div>
                                                </div>
                                                <!-- <p><span class="badge badge-success">0</span> completed lessons</p> -->
                                                </div> 
                                                <p class="d-none">Complete Session <span class="icn">450</span></p> 

                                                <div class="text-center ">
                                                    <a href="{{ route('single-tutor', ['id' =>  $teacher->id]) }}" class="teacher-book-bottun-box btn btn-primary">View Profile</a>
                                                    @if(isset(Auth::user()->id) && Auth::user()->role_id!=2) 
                                                    <a href="{{ route('book-class', ['id' =>  $teacher->id]) }}" class="teacher-book-bottun-box btn btn-primary">Book Now</a>
                                                    @else
                                                    <a href="{{ route('book-class', ['id' =>  $teacher->id]) }}" class="teacher-book-bottun-box btn btn-primary">Book Now</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           @else
                           <div class="item">
                               No Tutors Found
                           </div>
                           @endif 
                        </div>
                    </div>
                    
                </div>
            </div>

		</section>
	<!-- End of slider section
		============================================= -->
        <script>
        function clearForm(){
    document.getElementById("filterfrom").reset();
    window.location="{{ route('find-tutors') }}";
        }
        </script>
@endsection