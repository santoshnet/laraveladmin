@extends('layouts.app')

@section('title')
    Table 
@endsection


@section('content')

   <div class="content-area">
	    <section class="dashboard-chart section-padding">
	        <div class="container-fluid">
	            <div class="row">
	               <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Custom Table</strong>
	                      </div>
	                      <div class="card-body">                          
	                         <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{URL::asset('img/user.jpg')}}" width="30px" height="30px" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5469 </td>
                                            <td>  <span class="name">Louis Stanley</span> </td>
                                            <td> <span class="product">iMax</span> </td>
                                            <td><span class="count">231</span></td>
                                            <td>
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{URL::asset('img/user.jpg')}}" width="30px" height="30px" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5468 </td>
                                            <td>  <span class="name">Gregory Dixon</span> </td>
                                            <td> <span class="product">iPad</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">3.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{URL::asset('img/user.jpg')}}" width="30px" height="30px" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5467 </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td>
                                            <td> <span class="product">SSD</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">4.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                     <a href="#"><img class="rounded-circle" src="{{URL::asset('img/user.jpg')}}" width="30px" height="30px" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5466 </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td> <span class="product">Magic Mouse</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <span class="badge badge-pending">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
	                    </div>

	                  </div>
	                </div>
	                <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Basic Table</strong>
	                      </div>
	                      <div class="card-body">   
	                          <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">First</th>
                                          <th scope="col">Last</th>
                                          <th scope="col">Handle</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
	                      </div>

	                  </div>
	                </div>
	              </div> 
	              <div class="row">
		            <div class="col-lg-6">
		                <div class="card">
		                    <div class="card-header">
		                        <strong class="card-title">Bordered Table</strong>
		                    </div>
		                    <div class="card-body">
		                        <table class="table table-bordered">
		                            <thead>
		                                <tr>
		                                    <th scope="col">#</th>
		                                    <th scope="col">First</th>
		                                    <th scope="col">Last</th>
		                                    <th scope="col">Handle</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <th scope="row">1</th>
		                                    <td>Mark</td>
		                                    <td>Otto</td>
		                                    <td>@mdo</td>
		                                </tr>
		                                <tr>
		                                    <th scope="row">2</th>
		                                    <td>Jacob</td>
		                                    <td>Thornton</td>
		                                    <td>@fat</td>
		                                </tr>
		                                <tr>
		                                    <th scope="row">3</th>
		                                    <td colspan="2">Larry the Bird</td>
		                                    <td>@twitter</td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		            </div>

		            <div class="col-lg-6">
		                <div class="card">
		                    <div class="card-header">
		                        <strong class="card-title">Bordered Dark Table</strong>
		                    </div>
		                    <div class="card-body">
		                        <table class="table table-bordered table-dark">
		                            <thead>
		                                <tr>
		                                    <th scope="col">#</th>
		                                    <th scope="col">First</th>
		                                    <th scope="col">Last</th>
		                                    <th scope="col">Handle</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <th scope="row">1</th>
		                                    <td>Mark</td>
		                                    <td>Otto</td>
		                                    <td>@mdo</td>
		                                </tr>
		                                <tr>
		                                    <th scope="row">2</th>
		                                    <td>Jacob</td>
		                                    <td>Thornton</td>
		                                    <td>@fat</td>
		                                </tr>
		                                <tr>
		                                    <th scope="row">3</th>
		                                    <td colspan="2">Larry the Bird</td>
		                                    <td>@twitter</td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		             </div>
	              </div> 
	              <div class="row">
	              	    <div class="col-lg-6">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Table Dark</strong>
		                        </div>
		                        <div class="card-body">
		                            <table class="table table-dark">
		                                <thead>
		                                    <tr>
		                                        <th scope="col">#</th>
		                                        <th scope="col">First</th>
		                                        <th scope="col">Last</th>
		                                        <th scope="col">Handle</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                    <tr>
		                                        <th scope="row">1</th>
		                                        <td>Mark</td>
		                                        <td>Otto</td>
		                                        <td>@mdo</td>
		                                    </tr>
		                                    <tr>
		                                        <th scope="row">2</th>
		                                        <td>Jacob</td>
		                                        <td>Thornton</td>
		                                        <td>@fat</td>
		                                    </tr>
		                                    <tr>
		                                        <th scope="row">3</th>
		                                        <td>Larry</td>
		                                        <td>the Bird</td>
		                                        <td>@twitter</td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </div>
		                    </div>
		                </div>

		                <div class="col-lg-6">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Table Head</strong>
		                        </div>
		                        <div class="card-body">
		                            <table class="table">
		                                <thead class="thead-dark">
		                                    <tr>
		                                      <th scope="col">#</th>
		                                      <th scope="col">First</th>
		                                      <th scope="col">Last</th>
		                                      <th scope="col">Handle</th>
		                                  </tr>
		                              </thead>
		                              <tbody>
		                                <tr>
		                                    <th scope="row">1</th>
		                                    <td>Mark</td>
		                                    <td>Otto</td>
		                                    <td>@mdo</td>
		                                </tr>
		                                <tr>
		                                    <th scope="row">2</th>
		                                    <td>Jacob</td>
		                                    <td>Thornton</td>
		                                    <td>@fat</td>
		                                </tr>
		                                <tr>
		                                    <th scope="row">3</th>
		                                    <td>Larry</td>
		                                    <td>the Bird</td>
		                                    <td>@twitter</td>
		                                </tr>
		                            </tbody>
		                        </table>

		                    </div>
		                </div>
		            </div>


	              </div>
	        </div>
	    </section>
    </div>
  
@endsection
