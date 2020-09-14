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
								<h2><span>Forgot Password </span></h2><br>
                               
							</div><br>

						</div>
					</div>
				</div>
			</div>

			
		</section>

        <!-- Registration form -->
        <br>
        
        <div class="Loginside">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="bg">
							
							<div class="form">
							@include('frontend.frontalert')
							<form class="form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Forgot Password') }}</strong></h4>
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="row">
                <div class="col-sm-12">
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('status') }}</span>
                  </div>
                </div>
              </div>
            @endif
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Send Password Reset Link') }}</button>
          </div>
        </div>
      </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection