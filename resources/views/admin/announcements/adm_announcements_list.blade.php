@extends('layouts.app-admin')
   
@section('content')
<!-- Header -->
  <!-- Header -->
  
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">ANNOUNCEMENTS</h6>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{action('Adm_AnnouncementsController@create')}}" class="btn btn-success"><i class="fas fa-plus fa-fw"></i> Announcements</a>
          </div>
        </div>

        @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
          <span class="alert-text"><strong>Success!</strong> {{ \Session::get('success')}}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      @endif

        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Active Announcements</h5>
                      <span class="h2 font-weight-bold mb-0">{{$Active}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="fas fa-user-plus"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Last Updated - {{date('F j, Y | h:i A', strtotime($Last_Update))}}</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Unpublish Announcements</h5>
                      <span class="h2 font-weight-bold mb-0">{{$Unpublish}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="fas fa-user-check"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Last Updated - {{date('F j, Y | h:i A', strtotime($Last_Update))}}</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Announcements</h5>
                      <span class="h2 font-weight-bold mb-0">{{$Total}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Last Updated - {{date('F j, Y | h:i A', strtotime($Last_Update))}}</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="row">
          <div class="col">
            <div class="card">
              
                <!-- Card header -->
                <div class="card-header">
                  <h3 class="mb-0">Announcements List</h3>
                </div>
                <div class="table-responsive py-4">
                  <table class="table table-flush" id="datatable-buttons">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Title</th>
                        <th>Tag</th>
                        <th>Created At</th>
                        <th>Last Updated</th>
                        <th>Contents</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($Announcements as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td><img src="{{asset("storage/" . $row->filename) }}" alt="{{$row->filename}}" class="img-thumbnail" width="50%;"></td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->tag}}</td>
                        
                        <td>{{date('F j, Y - h:i A', strtotime($row -> created_at))}}</td>
                        <td>{{date('F j, Y - h:i A', strtotime($row -> updated_at))}}</td>
                        <td>
                          <button class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#modal-contents{{$row->id}}">View Contents</button>
                          <a class="btn btn-info btn-sm btn-block" href="{{action('Adm_AnnouncementsController@edit', $row->id)}}">Edit</a>
                          @if ($row->tag == 'Unpublish')
                          <button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#modal-tag-pub{{$row->id}}">Publish</button>
                          @else
                          <button class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#modal-tag-unpub{{$row->id}}">Unpublish</button>
                          @endif
                         
                        </td>
                        
                      </tr>

                      {{-- Contents Modal --}}
                      <div class="modal fade" id="modal-contents{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-contents" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">{{$row->title}}</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <small><em class="text-muted">Date Created - {{date('F j, Y - h:i A', strtotime($row -> created_at))}}</em></small>
                                <div class="text-justify mt-3">{!! $row->contents !!}</div>
                                <small><em class="text-muted">Last Updated - {{date('F j, Y - h:i A', strtotime($row -> updated_at))}}</em class="text-muted"></small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                         </div>
                        </div>
                      </div>

                      {{-- Tag Modal --}}
                      <div class="modal fade" id="modal-tag-pub{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-tag" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                            <div class="modal-content bg-gradient-primary">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-notification">ATTENTION</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form method="post" action="{{action('Adm_AnnouncementsController@destroy',$row->id)}}" >
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="DELETE">
                                <div class="modal-body">
                                    <div class="py-3">
                                      <div class=" text-center">
                                        <i class="ni ni-bell-55 ni-3x"></i>
                                        <h4 class="heading mt-4">The following announcement will be tag as "Publish" and will be available to view by anyone.</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <dl class="row mt-3">
                                          <dt class="col-sm-4">Title</dt>
                                          <dd class="col-sm-8">{{$row->title}}</dd>
                                          <dt class="col-sm-4 mt-3">Date Created</dt>
                                          <dd class="col-sm-8 mt-3">{{date('F j, Y - h:i A', strtotime($row -> created_at))}}</dd>
                                          <dt class="col-sm-4 mt-3">Last Updated</dt>
                                          <dd class="col-sm-8 mt-3">{{date('F j, Y - h:i A', strtotime($row -> updated_at))}}</dd>
                                        </dl>
                                      </div>
                                      <div class="text-center">
                                        <h4 class="heading mt-4">Are you sure you want to proceed?</h4>
                                      </div>
                                    </div> 
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-white">Yes, I'm sure</button>
                                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                        </div>
                      </div>

                      {{-- Tag Modal --}}
                      <div class="modal fade" id="modal-tag-unpub{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-tag" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                            <div class="modal-content bg-gradient-danger">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-notification">ATTENTION</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form method="post" action="{{action('Adm_AnnouncementsController@unpublish',$row->id)}}" >
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="GET">
                                <div class="modal-body">
                                    <div class="py-3">
                                      <div class=" text-center">
                                        <i class="ni ni-bell-55 ni-3x"></i>
                                        <h4 class="heading mt-4">The following announcement will be tag as "Unpublish" and will not be available to view by anyone.</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <dl class="row mt-3">
                                          <dt class="col-sm-4">Title</dt>
                                          <dd class="col-sm-8">{{$row->title}}</dd>
                                          <dt class="col-sm-4 mt-3">Date Created</dt>
                                          <dd class="col-sm-8 mt-3">{{date('F j, Y - h:i A', strtotime($row -> created_at))}}</dd>
                                          <dt class="col-sm-4 mt-3">Last Updated</dt>
                                          <dd class="col-sm-8 mt-3">{{date('F j, Y - h:i A', strtotime($row -> updated_at))}}</dd>
                                        </dl>
                                      </div>
                                      <div class="text-center">
                                        <h4 class="heading mt-4">Are you sure you want to proceed?</h4>
                                      </div>
                                    </div> 
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-white">Yes, I'm sure</button>
                                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                        </div>
                      </div>

                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>

      </div>
    </div>
@endsection