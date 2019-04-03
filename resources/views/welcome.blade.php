@extends('layouts.app')


@section('content')
  <div class="content-area">
     <section class="dashboard-counts section-padding">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box rad-txt-success card">
                    <i class="fa fa-windows"></i>
                    <span class="heading">Microsoft</span>
                    <span class="value"><span>4949</span></span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box rad-txt-primary card">
                    <i class="fa fa-facebook"></i>
                    <span class="heading">Facebook</span>
                    <span class="value"><span>23K</span></span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box rad-txt-danger card">
                    <i class="fa fa-google-plus"></i>
                    <span class="heading">Google</span>
                    <span class="value"><span>49M</span></span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box card">
                    <i class="fa fa-apple"></i>
                    <span class="heading">Apple</span>
                    <span class="value"><span>10.9K</span></span>
                  </div>
                </div>
            </div>
             
          </div>
        </section>
        <!-- Header Section-->
        <section class="dashboard-header section-padding">
          <div class="container">
            <div class="row d-flex align-items-md-stretch">
              
              <!-- Pie Chart-->
              <div class="col-lg-6 col-md-6 ">
                <div class="card project-progress">
                  <h2 class="display h4">Project Beta progress</h2>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <div class="pie-chart">
                    <canvas id="pieChart" width="300" height="300"> </canvas>
                  </div>
                </div>
              </div>
              <!-- Line Chart -->
              <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
                <div class="card sales-report">
                  <h2 class="display h4">Sales marketing report</h2>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
                  <div class="line-chart">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Statistics Section-->
        <section class="statistics">
          <div class="container-fluid">
            <div class="row d-flex">
              <div class="col-lg-4">
                <!-- Income-->
                <div class="card income text-center">
                  <div class="icon"><i class="icon-line-chart"></i></div>
                  <div class="number">126,418</div><strong class="text-primary">All Income</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <!-- Monthly Usage-->
                <div class="card data-usage">
                  <h2 class="display h4">Monthly Usage</h2>
                  <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                      <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                    </div>
                    <div class="col-sm-6"><strong class="text-primary">80.56 Gb</strong><small>Current Plan</small><span>100 Gb Monthly</span></div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <!-- User Actibity-->
                <div class="card user-activity">
                  <h2 class="display h4">User Activity</h2>
                  <div class="number">210</div>
                  <h3 class="h4 display">Social Users</h3>
                  <div class="progress">
                    <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
                  </div>
                  <div class="page-statistics d-flex justify-content-between">
                    <div class="page-statistics-left"><span>Pages Visits</span><strong>230</strong></div>
                    <div class="page-statistics-right"><span>New Visits</span><strong>3.4%</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       
      </div>
@endsection
