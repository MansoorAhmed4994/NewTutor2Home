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
                                <h2><span>Profile Step-2</span></h2><br>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>


     
     <!-- Start Login side -->
    <div class="Loginside">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <div class="bg">
                        <div class="title text-center">
                            Profile Step - 2
                        </div>
                        <div class="form">
                            <h5>Tell us about your University course and past qualifications.</h5>
                            <label class="text-default">What did you study</label>
                            <label>
                                <small class="text-primary">
                                    Degree certificate (.pdf, .jpg or .png)<br> If you don't have your
                                    certificate yet, please
                                    upload a different proof, such as an authenticated letter of acceptance, or
                                    a scan of your student ID
                                </small>
                                <small class="text-primary">(*) All fields are mandatory.</small>
                            </label>
                            <br><br>
                            <div class="row text-center mb-5">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li  class="nav-item ml-4 mb-3">
                                        <a style="width:300px" class="nav-link active btn_add_view" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><span>University Details</span></a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a style="width:300px" class="nav-link btn_add_view ml-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><span>School/College Details</span></a>
                                    </li>
                                
                                </ul>
                            </div>

                            <form>

                            

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                        <div class="text-center">
                                            <small class="text-primary mb-1">Qualification Details</small>
                                            <br>
                                            <small class="font-weight-bold text-primary mt-1">
                                                If you don't see University Name please clear browser's cache
                                                or press Ctrl+F5.
                                            </small>
                                        </div>
                                        <div class="university-block row border border-secondary p-2 m-2">
                                            <div class="content">
                                                <div class="element" id="div_1">

                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-bold">
                                                                Qualifications type
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select name="qualification_type[]" id="qualification_type_1" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">Under Graduate</option>
                                                                <option value="2">Graduate</option>
                                                                <option value="3">Post Graduate</option>
                                                                <option value="4">Master</option>
                                                            </select>
                                                        </div>

                                                        <div id="other_qualification_div_1" class="form-group col-sm-12 other_qualification_div d-none mt-3">
                                                            <label class="font-weight-bold">
                                                                Your Qualification Type
                                                            </label>
                                                            <input type="text" name="other_qualification[]" id="other_qualification_1" class="form-control" placeholder="Add Your Qualification Type">
                                                            <label class="error"></label>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-bold">
                                                                Course Title
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <input type="text" name="course_title[]" id="course_title_1" placeholder="Course Title" class="form-control course_title">
                                                            <hr>
                                                        </div>


                                                        <div class="form-group col-sm-6">

                                                            <label class="font-weight-bold">
                                                                Name of university
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <input type="text" name="name_of_university" id="name_of_university" placeholder="Name of university" class="form-control course_title">
                                                        </div>




                                                        <div class="form-group col-sm-6">
                                                            <label class="font-weight-bold">
                                                                Course Status
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select name="qualification_status[]" id="qualification_status_1" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">Pass</option>
                                                                <option value="2">Pursuing</option>
                                                            </select>
                                                            <label class="error"></label>
                                                        </div>

                                                        <div id="other_university_div_1" class="form-group col-sm-12 other_university_div d-none ">
                                                            <label class="font-weight-bold">
                                                                Your University Name
                                                            </label>
                                                            <input type="text" name="other_university[]" id="other_university_1" class="form-control" placeholder="Other University">
                                                        </div>

                                                        <div class="form-group col-md-12">

                                                            <div class="row align-items-center">
                                                                <div class="col-sm-6">
                                                                    <label class="font-weight-bold">
                                                                        Start Year
                                                                    </label>
                                                                    <span class="text-danger pull-right">*</span>
                                                                    <input type="text" name="start_year" id="start_year" class="form-control" placeholder="Start Year">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="font-weight-bold">
                                                                        End Year
                                                                    </label>
                                                                    <span class="text-danger pull-right">*</span>
                                                                    <input type="text" name="end_year" id="end_year" class="form-control" placeholder="End Year">
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="form-group col-12 ">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <small>
                                                                        Please upload qualification certificate
                                                                        <br>
                                                                        Max file size must be less than 10MB.
                                                                    </small>
                                                                    <span class="text-danger ml-2">*</span>
                                                                    <label class="upload video btn py-2">
                                                                        <input name="document[]" data-target="document_preview_1" id="document_1" type="file" accept=".pdf, .jpg, .png" class=" document d-none">

                                                                        <span>Upload Document</span>

                                                                    </label>
                                                                    <br>                                                                    </div>

                                                            </div>

                                                            <div id="document_preview_1" class="col-12">

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">   
                                        <div class="text-center mt-3 mb-3">
                                            <small class="text-primary mb-1 pt-4">School/College Details</small>
                                        </div>

                                        <div class="school-block border border-secondary p-2 m-2">
                                            <div class="subject_content_1 col-sm-12 p-0">

                                                <div class="subject_element_1" id="subject_div_1_1">
                                                    <div class="form-row">

                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-bold">
                                                                School/College Name
                                                            </label>

                                                            <input type="text" name="school_name" id="school_name" data-target-required="name_1" class="school_name form-control">
                                                            <label class="error"></label>
                                                            <hr>
                                                        </div>



                                                        <div class="form-group col-md-6">
                                                            <label class="font-weight-bold">
                                                                Subject
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select class="form-control" id="select_subject" name="select_subject">
                                                                <option value="">Select Subject</option>
                                                                <option value="">Animal Communication</option>
                                                                <option value="s">Cat Education</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label class="font-weight-bold">Examination board</label>
                                                            <span class="text-danger pull-right">*</span> 
                                                            <select class="form-control" id="select_level" name="select_level">
                                                                <option value="">Select Board</option>
                                                                <option value="">Matric Board</option>
                                                                <option value="">Inter Board</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label class="font-weight-bold">
                                                                Grade Level
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select class="form-control" name="grade_level[]" id="grade_level_1_1" >
                                                                <option value="" >Select</option>
                                                                <option value="1">Primary</option>
                                                                <option value="2">Secondary</option>
                                                                <option value="3">A Level</option>
                                                                <option value="4"> GCSE</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label class="font-weight-bold">
                                                                Result
                                                            </label>
                                                            <!-- <span class="text-danger pull-right">*</span> -->
                                                            <select name="course_status[]" id="course_status_1_1" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">Pass</option>
                                                                <option value="2">Fail</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group col-12 mt-5 p-0">
                                    <a class=" btn btn-primary w-100" href="{{ route('teacher-step-three') }}">
                                        Save
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
     <!-- End Login side -->
@endsection