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
                                    <div class="form">
                                        <form>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label class="font-weight-bold">
                                                        First Name
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" placeholder="First name" name="first_name" id="first_name" value="" class="form-control">
                                                    <label class="error">
                                                                                                    </label>
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label class="font-weight-bold">
                                                        Last Name
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" placeholder="Last name" name="last_name" id="last_name" value="" class="form-control">
                                                </div>

                                                <div class="form-group mt-2 col-sm-6">
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
                                                    <div class="mt-3 row">
                                                        <div class="col-md-6 col-lg-4">
                                                            <label class="font-weight-bold">Can you work in UK
                                                                <span class="text-danger pull-right ml-2">*</span>
                                                            </label>

                                                        </div>
                                                        <div class="col-md-6 col-lg-8">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="work_in_uk" value="1" >
                                                                        <span>Yes</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="work_in_uk" value="2" >
                                                                        <span>No</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-12 mb-4">
                                                    <label class="font-weight-bold">
                                                        Country
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="country" id="country" placeholder="Country" class="form-control">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        State
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="state" id="state" placeholder="State" class="form-control">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        City
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="city" id="city" placeholder="City" class="form-control">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        Postal Code
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="postal_code" id="postal_code" placeholder="Postal Code" class="form-control">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        Nationality
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="nationality" id="nationality" placeholder="Nationality" class="form-control">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold">
                                                        Phone Number
                                                    </label>
                                                    <span class="text-danger pull-right">*</span>
                                                    <input type="text" name="phone" id="phone" value="" placeholder="Phone Number" class="form-control">
                                                </div>

                                                <div class="form-group mt-1  col-12">
                                                    <div>
                                                        <label class="font-weight-bold">
                                                            Gender
                                                        </label>
                                                        <span class="text-danger pull-right">*</span>
                                                        <select class="form-control" id="select_gender" name="select_gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="1">Male</option>
                                                            <option value="1">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4 col-12">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-12 col-lg-12">
                                                            <label class="font-weight-bold">Date of Birth</label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <input type="text" id="dob" name="dob" maxlength="10" readonly="" value="" placeholder="Date of Birth" class="bg-white form-control date hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label class="font-weight-bold" for="description">
                                                        Please complete bio
                                                    </label>
                                                    <!-- <span class="text-danger pull-right">*</span> -->
                                                    <textarea rows="4" cols="4" id="description" name="description" class="form-control" placeholder="Add description (Bio)"></textarea>
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
                                                        <select class="form-control" id="select_subject" name="select_subject">
                                                            <option value="">Select</option>
                                                            <option value="1">Fresh</option>
                                                            <option value="1">0 - 1 Year</option>
                                                            <option value="1">1 - 2 Year</option>
                                                            <option value="1">2 - 3 Year</option>
                                                            <option value="1">3 - 4 Year</option>
                                                            <option value="1">4 - 5 Year</option>
                                                            <option value="1">5 - 6 Year</option>
                                                            <option value="1">6 - 7 Year</option>
                                                            <option value="1">7 - 8 Year</option>
                                                            <option value="1">8 - 9 Year</option>
                                                            <option value="1">9 - 10 Year</option>
                                                            <option value="1">10+ Year</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-3 col-12">
                                                    <div>
                                                        <label class="font-weight-bold">
                                                            How did you hear of us
                                                        </label>
                                                        <span class="text-danger pull-right">*</span>
                                                        <select class="form-control"  id="here_of_us">
                                                            <option value="">Select</option>
                                                            <option value="1">Google</option>
                                                            <option value="2">Facebook</option>
                                                            <option value="3">Twitter</option>
                                                            <option value="4">By Friends</option>
                                                            <option value="5">Newspapers</option>
                                                            <option value="6">Magazines</option>
                                                            <option value="7">Youtube</option>
                                                            <option value="8">Linkedin</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="mt-5 form-group col-12">
                                                    <a class=" btn btn-primary w-100" href="{{ route('teacher-step-two') }}">
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