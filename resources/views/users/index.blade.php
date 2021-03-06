@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Admin Management')])

@section('content')
                <div class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Admins</h4>
                            <p class="card-category"> Here you can manage Admins</p>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-12 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Add user</a>
                              </div>
                            </div>
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <tr><th>
                                    Name
                                  </th>
                                  <th>
                                    Email
                                  </th>
                                  <th>
                                    Creation date
                                  </th>
                                  {{-- <th class="text-right">
                                    Actions
                                  </th> --}}
                                </tr></thead>
                                <tbody>
                                    @foreach($users as $user)
                                  <tr>
                                    <td>
                                      {{ $user->name }}
                                    </td>
                                    <td>
                                      {{ $user->email }}
                                    </td>
                                    <td>
                                      {{ $user->created_at }}
                                    </td>
                                    {{-- <td class="td-actions text-right">
                                      <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                        <i class="material-icons">edit</i>
                                        <div class="ripple-container"></div>
                                      </a>
                                    </td> --}}
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