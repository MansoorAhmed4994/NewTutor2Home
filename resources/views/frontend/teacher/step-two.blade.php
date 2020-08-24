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
                            

                            <form>

                            

                                
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
                                                                Qualification
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select name="qualification" id="qualification" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">PGC Primary</option>
                                                                <option value="2">PGC Secondary</option>
                                                            </select>
                                                        </div>

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
                                                            <div class="row ml-1 align-items-center">
                                                                <label for="img" class="upload_img">Upload image:</label>
                                                                <input type="file" id="img" name="img" accept="image/*">
                                                                <input type="submit">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-bold">
                                                                Class type
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select name="class_type" id="class_type" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">Physical Class</option>
                                                                <option value="2">Online Class</option>
                                                            </select>
                                                        </div>
                                                        
                                                        

                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-bold">
                                                                Licence
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select name="licence" id="licence" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">QTLS</option>
                                                                <option value="2">QTS</option>
                                                                <option value="2">Train</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-bold">
                                                                Tutoer Per Hour Rate
                                                            </label>
                                                            <span class="text-danger pull-right">*</span>
                                                            <select name="tutoer_per_hour_rate" id="tutoer_per_hour_rate" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="1">10$</option>
                                                                <option value="2">15$</option>
                                                                <option value="2">20$</option>
                                                                <option value="2">25$</option>
                                                                <option value="2">30$</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <!--<div class="form-group1">
                                                                <input type="checkbox" id="customcheck20">
                                                                <label class="upload_img" for="customcheck20">Monday To Friday 4PM TO 8PM</label>
                                                            </div>
                                                            <div class="form-group1">
                                                                <input type="checkbox" id="customcheck21">
                                                                <label class="upload_img" for="customcheck21">Monday To Friday 4PM TO 8PM</label>
                                                            </div>-->
                                                            <label>
                                                                <input type="radio" id="yes" name="teach_under_16" class="teach_under_16" value="0">
                                                                <span class="upload_img">Monday To Friday 4PM TO 8PM</span>
                                                            </label>

                                                            <label>
                                                                <input type="radio" id="yes" name="teach_under_16" class="teach_under_16" value="0">
                                                                <span class="upload_img">Saturday Sunday 10AM TO 4PM</span>
                                                            </label>
                                                        </div>
                                   
                                                        <div class="form-group col-md-12">

                                                            <div class="row ml-1 align-items-center">
                                                                <label for="cv" class="upload_img">Upload CV:</label>
                                                                <input type="file" id="myFile" name="filename">
                                                                <input type="submit">
                                                            </div>
                                                        </div>

                                                        <!--<div class="form-group col-12 ">
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
                                                                    <br>
                                                                </div>
                                                            </div>

                                                            <div id="document_preview_1" class="col-12">

                                                            </div>

                                                        </div>-->

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