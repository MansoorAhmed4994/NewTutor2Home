
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
                                                Create Class
                                            </div>
                                            <div class="form">
                                                <div class="row">


                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <label class="font-weight-bold">
                                                            Topic
                                                        </label>
                                                        <input type="text" name="topic" id="topic" placeholder="Topic" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class=" font-weight-bold">
                                                            Date
                                                        </label>
                                                        <input type="date" name="date" id="date" placeholder="Date" class="form-control ">
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class=" font-weight-bold">
                                                            Time
                                                        </label>
                                                        <input type="time" name="time" id="time" placeholder="Time" class="form-control ">
                                                    </div>
                                                    
                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class="font-weight-bold">
                                                            Time Zone
                                                        </label>
                                                            <select name="time_zone" id="time_zone" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">(GMT -12:00) Eniwetok, Kwajalein</option>
                                                                <option value="">(GMT -11:00) Midway Island, Samoa</option>
                                                                <option value="">(GMT -10:00) Hawaii</option>
                                                                <option value="">(GMT -9:30) Taiohae</option>
                                                            </select>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6">
                                                        <label class=" font-weight-bold">
                                                            Duration
                                                        </label>
                                                        <input type="duration" name="duration" id="duration" placeholder="Duration" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-sm-12 col-lg-12">
                                                        <hr>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <label class="font-weight-bold">
                                                            Student Id
                                                        </label>
                                                        <select name="student_id" id="v" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="">01</option>
                                                            <option value="">02</option>
                                                            <option value="">03</option>
                                                            <option value="">04</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <label class="font-weight-bold">
                                                            Students
                                                        </label>
                                                        <select name="students" id="students" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="">Ahmed</option>
                                                            <option value="">Huzaifa</option>
                                                            <option value="">Daniyal</option>
                                                            <option value="">Muzammil</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-sm-12 col-lg-6 ">
                                                        <label class="font-weight-bold">
                                                            Email
                                                        </label>
                                                        <select name="email" id="email" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="">Ahmed@gmail.com</option>
                                                            <option value="">Huzaifa@gmail.com</option>
                                                            <option value="">Daniyal@gmail.com</option>
                                                            <option value="">Muzammil@gmail.com</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 m-auto pt-2">
                                                        <div class="text-center ">
                                                            <button name="search" style="width: 120px" class="btn btn-sm btn-primary" type="submit">
                                                                Submit
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
    <script>


    

    
</script>   


    
    @endsection