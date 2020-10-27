@extends('layouts.app', ['activePage' => 'courses/create', 'titlePage' => __('Create Course')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('courses-store') }}" autocomplete="off" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Course') }}</h4>
                <p class="card-category">{{ __('Create Course information') }}</p>
              </div>
              <div class="card-body ">
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
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Duration') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('duration') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" name="duration" id="input-name" type="text" placeholder="{{ __('Duration') }}" value="{{ old('duration') }}" required="true" aria-required="true"/>
                      @if ($errors->has('duration'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('duration') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-name" type="text" placeholder="{{ __('price') }}" value="{{ old('price') }}" required="true" aria-required="true"/>
                      @if ($errors->has('price'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                  <div class="col-sm-7">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                     {{--  <div class="fileinput-new thumbnail img-raised">
                          <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
                      </div> --}}
                      <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                      <div>
                          <span class="btn btn-raised btn-round btn-default btn-file">
                              <span class="fileinput-new">Select image</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="image_url" />
                          </span>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <textarea name="description" id="exampleFormControlTextarea1" rows="3" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>
                      @if ($errors->has('description'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection