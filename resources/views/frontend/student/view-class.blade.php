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

                                    @include('frontend.frontalert')
                                    <div class="bg">
                                        <div class="title text-center">
                                            Class
                                        </div>
                                        <div class="form">
                                            <div class="row">


                                                <div class="form-group col-sm-12 col-lg-6 ">
                                                    <h2 >
                                                        Topic
                                                    </h2>
                                                    <p>{{ $class->topic }}</p>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Date
                                                    </h2>
                                                    <p>{{ $class->start_date }}</p>
                                                </div>

                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Time
                                                    </h2>
                                                    <p>{{ $class->start_time }}</p>
                                                </div>

                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Time Zone
                                                    </h2>
                                                    <p>{{ $class->timezone }}</p>
                                                </div>

                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Duration
                                                    </h2>
                                                    <p>{{ $class->duration }} Hour</p>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Join With
                                                    </h2>
                                                    <p> <a href="{{ $classMeeting->join_url }}">Click To Join</a> </p>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-12">
                                                    <hr>
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