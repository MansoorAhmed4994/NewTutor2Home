
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
                    <div class="Loginside pt-0">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                @include('frontend.frontalert')
							<form class="form" method="POST">
        @csrf
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
                                                        <p>Importance of Software</p>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <h2 >
                                                            Date
                                                        </h2>
                                                        <p>11-September-2020</p>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <h2 >
                                                            Time
                                                        </h2>
                                                        <p>02:30P.M</p>
                                                    </div>
                                                    
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <h2 >
                                                            Time Zone
                                                        </h2>
                                                        <p>(GMT -9:30) Taiohae</p>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <h2 >
                                                            Duration
                                                        </h2>
                                                        <p>1 Hour</p>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-12">
                                                        <hr>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <h2 >
                                                            Student Id
                                                        </h2>
                                                            <p>04</p>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <h2 >
                                                            Student
                                                        </h2>
                                                            <p>Daniyal</p>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <h2 >
                                                            Email
                                                        </h2>
                                                            <p>Daniyal@gmail.com</p>
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
    <script>


    

    
</script>   


    
    @endsection