@extends('layouts.app')

@section('title')
    Form 
@endsection


@section('content')

  <div class="content-area">
     <section class="dashboard-counts section-padding">
          <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 col-xs-6">
                  <div class="rad-info-box rad-txt-success card">
                   <div class="container">
                      <h2>Vertical (basic) form</h2>
                      <form action="#">
                        <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                         <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                    </div>

                  </div>
                </div>

               <div class="col-lg-6 col-xs-6">
                  <div class="rad-info-box rad-txt-success card">
                   <div class="container">
                      <h2>Vertical Form Group</h2>
                      <form>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <br>
                        <div class="input-group">
                          <span class="input-group-addon">Text</span>
                          <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
                        </div>
                      </form>
                      <br>

                      <p>It can also be used on the right side of the input:</p>
                      <form>
                        <div class="input-group">
                          <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
                        </div>
                        <div class="input-group">
                          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
             </div>
            
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                
                  
              </div>

               <div class="col-lg-6 col-xs-6">


              </div>
              
            </div>

        </div>  
      </section>
  </div>  
@endsection
