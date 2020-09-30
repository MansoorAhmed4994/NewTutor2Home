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
                        @include('frontend.parent.commons.sidebar')
                        <div class="right col-sm-8 col-lg-9">
                        <div class="Loginside pt-0">
                           <div class="row justify-content-center">
                               <div class="col-lg-12">
                               @include('frontend.frontalert')
							<form class="form" method="POST" action="{{ route('parent-update-profile') }}" id="profile" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off" novalidate="novalidate">
                            @csrf       <div class="bg">
                                            <div class="title text-center">
                                                Profile
                                            </div>
                                            <div class="form">
                                                <div class="">
                                                    <div class="row mb-3 ">

                                                        <div class="col-md-6">
                                                            Partent ID: <span class="font-weight-bold">
                                                                TND {{ Auth::user()->id }}                                                       </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            Email ID: <span class="font-weight-bold">
                                                            {{ Auth::user()->email }}                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="form-group col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Name
                                                        </label>
                                                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" autocomplete="first_name" placeholder="First name" class="form-control">
                                                        <label class="error">
                                                                                                                </label>
                                                    </div>
                                                    <!-- <div class="form-group col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Last name
                                                        </label>
                                                        <input type="text" name="last_name" id="last_name" value="Munaf" autocomplete="last_name" placeholder="Last name" class="form-control">

                                                        <label class="error">
                                                                                                                </label>
                                                    </div> -->

                                                    <div class="form-group  col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Gender
                                                        </label>
                                                        <div class="cover-gender">
                                                        <select name="gender" id="gender" class="custom-select w-100 select2-hidden-accessible" data-select2-id="gender" tabindex="-1" aria-hidden="true">
                                                                <option value="" data-select2-id="2">Select</option>
                                                                <option value="Male" @if(Auth::user()->gender=="Male") selected  @endif>Male</option>
                                                                <option value="Female"  @if(Auth::user()->gender=="Female") selected  @endif>Female</option>
                                                                <option value="Other"  @if(Auth::user()->gender=="Other") selected  @endif>Other</option>
                                                                <option value="Prefer not to say"  @if(Auth::user()->gender=="MaPrefer not to sayle") selected  @endif>Prefer not to say</option>
                                                            </select>    <label class="error">
                                                                                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Phone number
                                                        </label>
                                                        <input type="text" name="phone_number" id="phone" value="{{ Auth::user()->phone_number }}" autocomplete="phone" placeholder="Phone number" class="form-control">

                                                        <label class="error">
                                                                                                                </label>
                                                    </div>
                                                    <div class="form-group  col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            DOB
                                                        </label>
                                                        <input type="date" name="dob" id="dob" placeholder="Date of birth"  value="{{ Auth::user()->dob }}" class="form-control date bg-white hasDatepicker">
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
                                                    



                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button name="search" class="btn btn-primary float-left ml-3" type="submit">Update Profile</button>
                                                <a href="javascript:;" data-id="349" id="delete-account" class="btn btn-danger mr-3">Delete my account</a>
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