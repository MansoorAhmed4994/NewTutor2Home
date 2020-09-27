
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
                                                    <p>{{ $classData->topic }}</p>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Date
                                                    </h2>
                                                    <p>{{ $classData->start_date }}</p>
                                                </div>

                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Time
                                                    </h2>
                                                    <p>{{ $classData->start_time }}</p>
                                                </div>

                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Time Zone
                                                    </h2>
                                                    <p>{{ $classData->timezone }}</p>
                                                </div>

                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Duration
                                                    </h2>
                                                    <p>{{ $classData->duration }} Hours</p>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <h2 >
                                                        Start Class 
                                                    </h2>
                                                    <p> <a href="{{ $classData->meeting->start_url }}"> Click to start</a> </p>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-12">
                                                    <hr>
                                                </div>

                                                 <div class="form col-md-12">
                                                <table class="table">
                                                    <thead style="background-color: #a8b1b7; color: white;">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Student Name</th>
                                                            <th scope="col">Student Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($classStudents as $data)
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>{{ $data->students->name }}</td>
                                                            <td>{{ $data->students->email }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    <script>





    </script>   


    
    @endsection