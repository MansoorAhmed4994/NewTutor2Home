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
                        @include('frontend.student.commons.sidebar')
                        <div class="right col-sm-8 col-lg-9">
                        <div class="Loginside pt-0">
                           <div class="row justify-content-center">
                               <div class="col-lg-12">
                                    <form action="https://www.tutorninjas.com/student-profile" id="profile" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off" novalidate="novalidate">
                                        <div class="bg">
                                            <div class="title text-center">
                                                Profile
                                            </div>
                                            <div class="form">
                                                <div class="">
                                                    <div class="row mb-3 ">

                                                        <div class="col-md-6">
                                                            Student ID: <span class="font-weight-bold">
                                                                TND1595721636                                                       </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            Email ID: <span class="font-weight-bold">
                                                                daniyalmunaf@gmail.com                                                       </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            First name
                                                        </label>
                                                        <input type="text" name="first_name" id="first_name" value="Daniyal" autocomplete="first_name" placeholder="First name" class="form-control">
                                                        <label class="error">
                                                                                                                </label>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Last name
                                                        </label>
                                                        <input type="text" name="last_name" id="last_name" value="Munaf" autocomplete="last_name" placeholder="Last name" class="form-control">

                                                        <label class="error">
                                                                                                                </label>
                                                    </div>

                                                    <div class="form-group  col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Gender
                                                        </label>
                                                        <div class="cover-gender">
                                                            <select name="gender" id="gender" class="custom-select w-100 select2-hidden-accessible" data-select2-id="gender" tabindex="-1" aria-hidden="true">
                                                                <option value="" data-select2-id="2">Select</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                                <option value="3">Other</option>
                                                                <option value="4">Prefer not to say</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 401.25px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gender-container"><span class="select2-selection__rendered" id="select2-gender-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            <label class="error">
                                                                                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Phone number
                                                        </label>
                                                        <input type="text" name="phone" id="phone" value="03152476062" autocomplete="phone" placeholder="Phone number" class="form-control">

                                                        <label class="error">
                                                                                                                </label>
                                                    </div>
                                                    <div class="form-group  col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            DOB
                                                        </label>
                                                        <input type="text" name="dob" id="dob" placeholder="Date of birth" readonly="" value="19/04/2001" class="form-control date bg-white hasDatepicker">
                                                        <label class="error">
                                                                                                                </label>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-6">
                                                                <label class="font-weight-bold">Upload Image
                                                                </label>
                                                            </div>
                                                            <div class="col-6">

                                                                <label class="upload img">
                                                                    <input type="file" name="image" id="image" data-target="image-name" class="d-none" accept="image/jpeg,image/jpg,image/png">
                                                                    <span>Upload</span>
                                                                </label>


                                                            </div>

                                                            <label class="ml-3 image-error myerror">
                                                                                                                        </label>
                                                            <div class="col-sm-12 ml-3 image-name" style="color: teal">
                                                                                                                        </div>
                                                            <small class="ml-3 text-primary">Max file size must be less
                                                                than 10MB.
                                                                <br>
                                                                Only
                                                                (jpg/png/jpeg) extensions allowed. </small>
                                                        </div>
                                                    </div>
                                                    <div class="m-auto">
                                                        <div class="text-center ">
                                                            <button name="search" class="btn btn-sm btn-primary mb-sm-5" type="submit">Update Profile</button>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="p-3 text-right">
                                                <a href="javascript:;" data-id="349" id="delete-account" class="btn btn-danger">Delete my account</a>
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
@endsection