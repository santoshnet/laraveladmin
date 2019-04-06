@extends('layouts.app')

@section('title')
    Chart 
@endsection


@section('content')
<div class="content-area">
	     <section class="dashboard-chart section-padding">
	          <div class="container-fluid">
	            <div class="row">
				     <div class="content">
				            <!-- Animated -->
				            <div class="animated fadeIn">
				                <!-- Widgets  -->
				                <div class="row">
				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-five">
				                                    <div class="stat-icon dib flat-color-1">
				                                        <i class="fa fa-money"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-text">$<span class="count">23569</span></div>
				                                            <div class="stat-heading">Revenue</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-five">
				                                    <div class="stat-icon dib flat-color-2">
				                                        <i class="fa fa-shopping-bag"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-text"><span class="count">3435</span></div>
				                                            <div class="stat-heading">Sales</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-five">
				                                    <div class="stat-icon dib flat-color-3">
				                                        <i class="fa fa-bandcamp"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-text"><span class="count">349</span></div>
				                                            <div class="stat-heading">Templates</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-five">
				                                    <div class="stat-icon dib flat-color-4">
				                                        <i class="fa fa-users"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-text"><span class="count">2986</span></div>
				                                            <div class="stat-heading">Clients</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <!-- /Widgets -->
				                <div class="row">
				                    <div class="col-sm-6 col-lg-3">
				                        <div class="card text-white bg-flat-color-1">
				                            <div class="card-body">
				                                <div class="card-left pt-1 float-left">
				                                    <h3 class="mb-0 fw-r">
				                                        <span class="currency float-left mr-1">$</span>
				                                        <span class="count">23569</span>
				                                    </h3>
				                                    <p class="text-light mt-1 m-0">Revenue</p>
				                                </div><!-- /.card-left -->

				                                <div class="card-right float-right text-right">
				                                    <i class="fa fa-shopping-cart fa-4x"></i>
				                                </div><!-- /.card-right -->

				                            </div>

				                        </div>
				                    </div>
				                    <!--/.col-->

				                    <div class="col-sm-6 col-lg-3">
				                        <div class="card text-white bg-flat-color-6">
				                            <div class="card-body">
				                                <div class="card-left pt-1 float-left">
				                                    <h3 class="mb-0 fw-r">
				                                        <span class="count float-left">85</span>
				                                        <span>%</span>
				                                    </h3>
				                                    <p class="text-light mt-1 m-0">Dummy text</p>
				                                </div><!-- /.card-left -->

				                                <div class="card-right float-right text-right">
				                                     <i class="fa fa-bar-chart fa-4x"></i>
				                                </div><!-- /.card-right -->

				                            </div>

				                        </div>
				                    </div>
				                    <!--/.col-->

				                    <div class="col-sm-6 col-lg-3">
				                        <div class="card text-white bg-flat-color-3">
				                            <div class="card-body">
				                                <div class="card-left pt-1 float-left">
				                                    <h3 class="mb-0 fw-r">
				                                        <span class="count">6569</span>
				                                    </h3>
				                                    <p class="text-light mt-1 m-0">Total clients</p>
				                                </div><!-- /.card-left -->

				                                <div class="card-right float-right text-right">
				                                    <i class="fa fa-users fa-4x"></i>
				                                </div><!-- /.card-right -->

				                            </div>

				                        </div>
				                    </div>
				                    <!--/.col-->

				                    <div class="col-sm-6 col-lg-3">
				                        <div class="card text-white bg-flat-color-2">
				                            <div class="card-body">
				                                <div class="card-left pt-1 float-left">
				                                    <h3 class="mb-0 fw-r">
				                                        <span class="count">1490</span>
				                                    </h3>
				                                    <p class="text-light mt-1 m-0">New users</p>
				                                </div><!-- /.card-left -->

				                                <div class="card-right float-right text-right">
				                                     <i class="fa fa-line-chart fa-4x"></i>
				                                </div><!-- /.card-right -->

				                            </div>

				                        </div>
				                    </div>
				                    <!--/.col-->



				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-four">
				                                    <div class="stat-icon dib">
				                                        <i class="fa fa-database fa-3x"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-heading">Database</div>
				                                            <div class="stat-text">Total: 765</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>

				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-four">
				                                    <div class="stat-icon dib">
				                                        <i class="fa fa-users fa-3x"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-heading">Users</div>
				                                            <div class="stat-text">Total: 24720</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>

				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-four">
				                                    <div class="stat-icon dib">
				                                        <i class="fa fa-shopping-bag fa-3x"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-heading">Daily Sales</div>
				                                            <div class="stat-text">Total: $76,58,714</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>

				                    <div class="col-lg-3 col-md-6">
				                        <div class="card">
				                            <div class="card-body">
				                                <div class="stat-widget-four">
				                                    <div class="stat-icon dib">
				                                        <i class="fa fa-hdd-o fa-4x"></i>
				                                    </div>
				                                    <div class="stat-content">
				                                        <div class="text-left dib">
				                                            <div class="stat-heading">Bandwidth</div>
				                                            <div class="stat-text">Total: 4TB</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-sm-12 mb-4">
				                        <div class="card-group">
				                            <div class="card col-md-6 no-padding ">
				                                <div class="card-body">
				                                    <div class="h1 text-muted text-right mb-4">
				                                        <i class="fa fa-users"></i>
				                                    </div>

				                                    <div class="h4 mb-0">
				                                        <span class="count">87500</span>
				                                    </div>

				                                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
				                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
				                                </div>
				                            </div>
				                            <div class="card col-md-6 no-padding ">
				                                <div class="card-body">
				                                    <div class="h1 text-muted text-right mb-4">
				                                        <i class="fa fa-user-plus"></i>
				                                    </div>
				                                    <div class="h4 mb-0">
				                                        <span class="count">385</span>
				                                    </div>
				                                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
				                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
				                                </div>
				                            </div>
				                            <div class="card col-md-6 no-padding ">
				                                <div class="card-body">
				                                    <div class="h1 text-muted text-right mb-4">
				                                        <i class="fa fa-cart-plus"></i>
				                                    </div>
				                                    <div class="h4 mb-0">
				                                        <span class="count">1238</span>
				                                    </div>
				                                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
				                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
				                                </div>
				                            </div>
				                            <div class="card col-md-6 no-padding ">
				                                <div class="card-body">
				                                    <div class="h1 text-muted text-right mb-4">
				                                        <i class="fa fa-pie-chart"></i>
				                                    </div>
				                                    <div class="h4 mb-0">
				                                        <span class="count">28</span>%
				                                    </div>
				                                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
				                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
				                                </div>
				                            </div>
				                            <div class="card col-md-6 no-padding ">
				                                <div class="card-body">
				                                    <div class="h1 text-muted text-right mb-4">
				                                        <i class="fa fa-clock-o"></i>
				                                    </div>
				                                    <div class="h4 mb-0">5:34:11</div>
				                                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
				                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
				                                </div>
				                            </div>
				                            <div class="card col-md-6 no-padding ">
				                                <div class="card-body">
				                                    <div class="h1 text-muted text-right mb-4">
				                                        <i class="fa fa-comments-o"></i>
				                                    </div>
				                                    <div class="h4 mb-0">
				                                        <span class="count">972</span>
				                                    </div>
				                                    <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
				                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div><!-- .row -->
				            </div>
				            <!-- .animated -->
				        </div>
				        <!-- /.content -->
				    </div>
				</div>
			</section>
		</div>



@endsection