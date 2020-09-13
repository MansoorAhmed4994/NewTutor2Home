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
							<form class="form" method="POST" action="{{ route('student-update-password') }}">
        @csrf
                                              
                                        <div class="bg">
                                            <div class="title text-center">
                                                My Classes
                                            </div>
                                            <div class="form">
                                                <table class="table">
                                                <thead style="background-color: #a8b1b7; color: white;">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td><a href="{{ route('student-view-class') }}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                        <td><a href="{{ route('student-view-class') }}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                        <td><a href="{{ route('student-view-class') }}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                </tbody>
                                                </table>
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