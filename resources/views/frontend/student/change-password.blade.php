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
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="bg">
                                            <div class="title text-center">
                                                Change Password
                                            </div>
                                            <div class="form">
                                                <div class="row">


                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <label class="font-weight-bold">
                                                            Current password
                                                        </label>
                                                        <input type="password" name="password" id="password" placeholder="Current password" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class=" font-weight-bold">
                                                            New password
                                                        </label>
                                                        <input type="password" name="new_password" id="new_password" placeholder="New password" class="form-control ">
                                                    </div>


                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Confirm password
                                                        </label>
                                                        <input type="password" name="c_password" id="c_password" placeholder="Confirm password" class="form-control ">
                                                    </div>

                                                    <div class="col-sm-12 m-auto pt-2">
                                                        <div class="text-center ">
                                                            <button name="search" class="btn btn-sm btn-primary" type="submit">
                                                                Change Password
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
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