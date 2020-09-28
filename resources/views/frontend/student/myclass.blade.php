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
                                                My Classes
                                            </div>
                                            <div class="form">
                                                <table class="table">
                                                    <thead style="background-color: #a8b1b7; color: white;">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Teacher Name</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">Start Time</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach($studentClass as $key => $studentData)  
                                                        <tr>
                                                            <?php $var =  $key; ?>
                                                            <th scope="row">{{ $var + 1 }}</th>
                                                            <td>{{ $studentData->class->teacher->name }}</td>
                                                            <td>{{ $studentData->class->topic }}</td>
                                                            <td>{{ $studentData->class->start_date }}</td>
                                                            <td>{{ $studentData->class->start_time }}</td>
                                                            <td>{{ $studentData->class->duration }} Hours</td>
                                                            <td><a href="{{ route('student-view-class',$studentData->class_id) }}"><i class="fa fa-eye"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
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
    @endsection