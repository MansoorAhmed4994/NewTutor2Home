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
                                <h2><span>Profile Step-1</span></h2><br>
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
                                        Profile Step - 1
                                    </div>
                                    <label class="mt-3 ml-3"><small class="text-primary">(*) All fields are
                                            mandatory.</small></label>
                                    <div style="padding-top:0px; padding-bottom:0px;" class="form">
                                    @include('frontend.frontalert')
                                    <form  class="form" method="POST" 
                                    action="{{ route('teacher-step-one-save') }}" enctype="multipart/form-data"
                                     method="post" accept-charset="utf-8" autocomplete="off" novalidate="novalidate">
        @csrf
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label class="font-weight-bold">
                                                         Name
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" placeholder="First name" name="name" id="first_name" value="{{ Auth::user()->name }}" class="form-control">
                                                    <label class="error">
                                                                                                    </label>
                                                </div>

                                                <!-- <div class="form-group col-sm-6">
                                                    <label class="font-weight-bold">
                                                        Last Name
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" placeholder="Last name" name="last_name" id="last_name" value="" class="form-control">
                                                </div> -->

                                                <div class="form-group  col-sm-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-6">
                                                            <label class="font-weight-bold">Upload Image
                                                                <span class="text-danger pull-right ml-1">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-6">

                                                            <label class="upload img">
                                                                <input type="file" name="image" id="image" data-target="image-name" class="d-none" accept="image/jpeg,image/jpg,image/png">
                                                                <span>Upload</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-12 ml-3 image-name" style="color: teal"></div>
                                                        <small class="ml-3 text-primary">Max file size must be less than 10MB.
                                                            <br>
                                                            Only
                                                            (jpg/png/jpeg) extensions allowed. </small>
                                                    </div>
                                                </div>


                                                <!--<div class="form-group col-sm-6 mt-4">
                                                    <label class="font-weight-bold">
                                                        Youtube Video Link
                                                    </label>
                                                    <input type="text" placeholder="" name="video_link" id="video_link" value="" class="form-control">
                                                </div>-->

                                                <div class="form-group col-12">
                                                    <div style="margin-top:-10px;" class=" row">
                                                        <div class="col-md-6 col-lg-4">
                                                            <label class="font-weight-bold">Can you work in UK
                                                                <span class="text-danger pull-right ml-2">*</span>
                                                            </label>

                                                        </div>
                                                        <div class="col-md-6 col-lg-8">
                                                            
                                                                    <label>
                                                                        <input type="radio" name="work_in_uk" value="1" @if( Auth::user()->work_in_uk==1) checked @endif>
                                                                        <span>Yes</span>
                                                                    </label>
                                                                
                                                                    <label class="ml-4">
                                                                        <input type="radio" name="work_in_uk" value="2"  @if( Auth::user()->work_in_uk==2) checked @endif>
                                                                        <span>No</span>
                                                                    </label>
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-12 mb-4">
                                                    <label class="font-weight-bold">
                                                        Country
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                     <select class="form-control text-uppercase" name="country" required id="country">
                                                        <option value="">Select Country</option>   
                                                        @foreach($countries as $key => $country)
                                                        <option value="{{ $key }}" 
                                                        @if(old('country')==  $key) selected @endif
                                                        >{{$country }}</option> 
                                                        @endforeach;
                                                    </select>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        State
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                        <select class="form-control text-uppercase" name="state" required id="states">
                                                        <option value="">Select State</option>   
                                                     
                                                    </select>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        City
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <select class="form-control text-uppercase" name="city" required id="city">
                                                                    <option value="">Select City</option>   
                                                                  
                                                                </select>
                                                </div>
                                               
                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        Postal Code
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="postal_code" id="postal_code" placeholder="Postal Code" class="form-control" value="{{ Auth::user()->postal_code}}">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        Nationality
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="nationality" id="nationality" placeholder="Nationality" class="form-control" value="{{ Auth::user()->nationality}}">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        Phone Number
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="phone_number" id="phone" value="" placeholder="Phone Number" class="form-control" value="{{ Auth::user()->phone_no}}">
                                                </div>

                                                <div class="form-group mt-1  col-12">
                                                    <div>
                                                        <label class="font-weight-bold">
                                                            Gender
                                                        </label>
                                                        <span class="text-danger pull-right">*</span>
                                                        <select class="form-control" id="select_gender" name="gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="Male" @if(Auth::user()->gender=="Male") checked  @endif>Male</option>
                                                            <option value="Female" @if(Auth::user()->gender=="Female") checked  @endif>Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4 col-12">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-12 col-lg-12">
                                                            <label class="font-weight-bold">Date of Birth</label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <input type="date" id="dob" name="dob"  value="{{ Auth::user()->dob }}" placeholder="Date of Birth" class="bg-white form-control date hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold" for="description">
                                                        Please complete bio
                                                    </label>
                                                    <!-- <span class="text-danger pull-right">*</span> -->
                                                    <textarea rows="4" cols="4" id="description" name="description" class="form-control" placeholder="Add description (Bio)">{{ Auth::user()->description }}</textarea>
                                                    <small class="pull-right text-danger" id="char_num">
                                                        100 character left.
                                                    </small>
                                                </div>

                                                <div id="experience_div" class="form-group mt-3 col-12">
                                                    <div>
                                                        <label class="font-weight-bold">
                                                            Experience
                                                        </label>
                                                        <span class="text-danger pull-right">*</span>
                                                        <select class="form-control" id="select_subject" name="experience">
                                                            <option value="">Select</option>
                                                            @for($i=0;$i<=count($experience)-1;$i++)
                                                            <option value="{{ $i  }}"  @if(Auth::user()->experience==$i) checked  @endif> {{ $experience[$i] }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-3 col-12">
                                                    <div>
                                                        <label class="font-weight-bold">
                                                            How did you hear of us
                                                        </label>
                                                        <span class="text-danger pull-right">*</span>
                                                        <select class="form-control"  id="here_of_us" name="here_of_us">
                                                            <option value="">Select</option>
                                                            @for($j=0;$j<=count($social)-1;$j++)
                                                            <option value="{{ $j }}"  @if(Auth::user()->here_of_us==$i) checked  @endif> {{ $social[$j] }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="mt-1 form-group col-12">
                                                <button name="search" class="btn btn-primary w-100" type="submit">
                                                              save
                                                            </button>
                                                    <!-- <a class=" btn btn-primary w-100" href="{{ route('teacher-step-two') }}">
                                                    Save
                                                    </a> -->
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
@include('frontend.teacher.commons.additionjs')
@endsection
