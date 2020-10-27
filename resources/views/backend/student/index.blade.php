@extends('layouts.app', ['activePage' => 'admin/students', 'titlePage' => __('Student Management')])

@section('content')
                <div class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Student</h4>
                            <p class="card-category"> Here you can manage Student</p>
                          </div>
                          <div class="card-body">
                           {{--  <div class="row">
                              <div class="col-12 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Add Student</a>
                              </div>
                            </div> --}}
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Creation date</th>
                                    <th>Active</th>
                                    <th class="text-right">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($students as $student)
                                  <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->created_at }}</td>
                                    <td>{{ ($student->email_verified_at)?'Yes':'No' }}</td>
                                    <td class="td-actions text-right">
                                      <a rel="tooltip" href="{{ route('admin.activate',$student->id) }}" class="btn btn-success btn-link" href="#" data-original-title="Active or De-active" title="Active or De-active">
                                        <i class="material-icons">edit</i>
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