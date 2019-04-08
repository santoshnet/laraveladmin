@extends('layouts.app')

@section('title')
    Chart 
@endsection


@section('content')

     <div class="content-area">
	     <section class="dashboard-chart section-padding">
	          <div class="container-fluid">
	            <div class="row">
	               <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Pie Chart</strong>
	                      </div>
	                      <div class="card-body">                          
	                        <div class="pie-chart">
                              <canvas id="pieChartExample"> </canvas>
                            </div>
	                    </div>

	                  </div>
	                </div>
	                <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Line Chart</strong>
	                      </div>
	                      <div class="card-body">   
	                        <div class="line-chart">
                              <canvas id="lineChartExample"></canvas>
                            </div>
	                      </div>

	                  </div>
	                </div>
	              </div>
	             <div class="row">
	               <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Bar Chart</strong>
	                      </div>
	                      <div class="card-body">                          
	                        <div class="bar-chart">
                              <canvas id="barChartExample"> </canvas>
                            </div>
	                    </div>

	                  </div>
	                </div>
	                <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Radar Chart</strong>
	                      </div>
	                      <div class="card-body">   
	                        <div class="rader-chart">
                              <canvas id="radarChartExample"></canvas>
                            </div>
	                      </div>

	                  </div>
	                </div>
	              </div>
	              <div class="row">
	               
	                <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Polar Chart</strong>
	                      </div>
	                      <div class="card-body">   
	                        <div class="polar-chart">
                              <canvas id="polarChartExample"></canvas>
                            </div>
	                      </div>

	                  </div>
	                </div>
	              </div>
	              
	          </div>
	      </section>
    </div>
@endsection
