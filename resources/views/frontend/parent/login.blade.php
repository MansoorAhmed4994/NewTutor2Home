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
                                <h2><span>Parent Login</span></h2><br>
                                <p><span>Knowledge sharing platform for</span><p>
								<p><span>student, professionals and tutors alike.</span><p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        
        <!--login form-->

        <div class="Loginside">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg">
                            <div class="title text-center">
                                login
                            </div>
                            <div class="form">
                                <label class="ml-1 mt-3"><small class="text-primary">(*) All fields are
                                        mandatory.</small></label>
                                        <form id="tutor_login_form" method="post"   action="{{ route('login') }}" accept-charset="utf-8" autocomplete="off" novalidate="novalidate">
                               
                               @csrf
                       
                                                       <div class="form-group">
                                                           <span class="text-danger pull-right">*</span>
                                                           <input type="email" name="email" class="form-control" placeholder="{{ __('Enter Email Address') }}" value="{{ old('email', '') }}" required>
                                                         
                                                       </div>
                                                       @if ($errors->has('email'))
                                       <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                         <strong>{{ $errors->first('email') }}</strong>
                                       </div>
                                     @endif
                                                       <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                                                           <span class="text-danger pull-right">*</span>
                                                           <input type="password" name="password" id="password" placeholder="Password" autocomplete="new-password" class="form-control">
                                                          
                                                           @if ($errors->has('password'))
                                       <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                         <strong>{{ $errors->first('password') }}</strong>
                                       </div>
                                     @endif
                                                       </div>
                                                       <div class="form-group">
                                                           <div class="row">
                                                               <div class="col-6">
                                                               </div>
                                                               <div class="col-6 text-right">
                                                               @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                    Forgot password
                                    </a>
                                @endif
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="form-group">
                                                         
                                                           <button type="submit" class=" btn btn-primary w-100">{{ __('Lets Go') }}</button>
                                                       </div>
                                                       
                                                       <div class="form-group text-center mb-0">
                                                           <p>Don't have an account? <a href="{{ route('parent-registration') }}">Sign Up</a>
                                                           </p>
                                                       </div>
                                                       </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection