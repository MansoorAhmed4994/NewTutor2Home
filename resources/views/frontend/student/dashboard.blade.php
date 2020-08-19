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
                            <div>
                                <div class="Profile bg-light position-relative">
                                    <div class="row no-gutters">
                                        <div class="img col-lg-4">
                                            <img src="{{asset('front/img/teacher/mt-3.jpg')}}" alt="">
                                        </div>
                                        <div class="text col-lg-8">
                                            <div class="name">
                                                <h4>Daniyal Munaf<!-- <span style="color: #13a89e;font-size: small;">()</span> -->
                                                </h4>
                                                <span class="subtitle d-block"><b>Student ID:</b>
                                                    TND1595721636
                                                </span>
                                                <span class="subtitle d-block"><b>DOB:</b>
                                                    19th Apr, 2001
                                                </span>
                                                <span class="subtitle d-block"><b>Email Id:</b>
                                                    daniyalmunaf@gmail.com
                                                </span>
                                                <span class="subtitle d-block"><b>Phone No.:</b>
                                                    03152476062
                                                </span>
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