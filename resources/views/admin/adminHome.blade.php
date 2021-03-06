@extends('layouts.app-admin')
   
@section('content')
<!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">DASHBOARD</h6>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New Registrants</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="fas fa-user-plus"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Last Updated - 11/15/2021</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pending</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="fas fa-user-check"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Last Updated - 11/15/2021</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Articles</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Last Updated - 11/15/2021</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Announcements</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Last Updated - 11/15/2021</span>
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
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">ACTIVITY FEED</h3>
                    </div>
                    <div class="col text-right">
                      <a href="#!" class="btn btn-sm btn-primary">CLEAR FEED</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <!-- Projects table -->
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Activity</th>
                        <th scope="col">Visitors</th>
                        <th scope="col">Unique users</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          /argon/
                        </th>
                        <td>
                          4,569
                        </td>
                        <td>
                          340
                        </td>
                        <td>
                          <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/index.html
                        </th>
                        <td>
                          3,985
                        </td>
                        <td>
                          319
                        </td>
                        <td>
                          <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/charts.html
                        </th>
                        <td>
                          3,513
                        </td>
                        <td>
                          294
                        </td>
                        <td>
                          <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/tables.html
                        </th>
                        <td>
                          2,050
                        </td>
                        <td>
                          147
                        </td>
                        <td>
                          <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/profile.html
                        </th>
                        <td>
                          1,795
                        </td>
                        <td>
                          190
                        </td>
                        <td>
                          <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-xl-8">
      
      </div>
      <div class="col-xl-4">
        
      </div>
    </div>
@endsection