@extends('layouts.app', ['activePage' => 'admin/courses', 'titlePage' => __('Course Management')])

@section('content')
                <div class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Course</h4>
                            <p class="card-category"> Here you can manage Course</p>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-12 text-right">
                                <a href="{{ route('courses-create') }}" class="btn btn-sm btn-primary">Add Course</a>
                              </div>
                            </div>
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Description</th>
                                    <th>Creation date</th>
                                    <th class="text-right">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($course as $courses)
                                  <tr>
                                    <td> <img src="{{env('APP_URL').$courses->image_url }}" width="50"></td>
                                    <td>{{ $courses->name }}</td>
                                    <td>{{ $courses->price }}</td>
                                    <td>{{ $courses->duration }}</td>
                                    <td>{{ $courses->description }}</td>
                                    <td>{{ $courses->created_at }}</td>
                                    <td class="td-actions text-right">
                                      <a rel="tooltip" href="{{ route('courses-edit',$courses->id) }}" class="btn btn-success btn-link" href="#" data-original-title="Edit" title="Edit">
                                        <i class="material-icons">edit</i>
                                        <div class="ripple-container"></div>
                                      </a>
                                      <a rel="tooltip" href="{{ route('courses-delete',$courses->id) }}" title="Delete" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                          <i class="material-icons">close</i>
                                        <div class="ripple-container"></div>
                                      </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        {{-- <div class="alert alert-danger">
                          <span style="font-size:18px;">
                            <b> </b> This is a PRO feature!</span>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
@endsection