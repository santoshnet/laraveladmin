@extends('layouts.app')

@section('title')
    Form 
@endsection


@section('content')

  <div class="content-area">
     <section class="dashboard-counts section-padding">
          <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Verical Form</strong>
                      </div>
                      <div class="card-body">                          
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
                <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Verical Form Group</strong>
                      </div>
                      <div class="card-body">   
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Credit Card</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Pay Invoice</h3>
                                        </div>
                                        <hr>
                                        <form action="#" method="get" novalidate="novalidate">
                                            <div class="form-group text-center">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                                </ul>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                                <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                                        <div class="input-group-addon">
                                                            <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay $100.00</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Company</strong><small> Form</small></div>
                            <div class="card-body card-block">
                              <form>
                                <div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">VAT</label><input type="text" id="vat" placeholder="DE1234567890" class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>

                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary btn-sm">
                                      <i class="fa fa-user"></i> Submit
                                  </button>
                                  <button type="reset" class="btn btn-danger btn-sm">
                                      <i class="fa fa-ban"></i> Reset
                                  </button>
                              </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">                  

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">Username</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Disabled Input</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Large</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Small</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                                <option value="4">Option #4</option>
                                                <option value="5">Option #5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="disabledSelect" class=" form-control-label">Disabled Select</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="multiple-select" class=" form-control-label">Multiple select</label></div>
                                        <div class="col col-md-9">
                                            <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                                <option value="4">Option #4</option>
                                                <option value="5">Option #5</option>
                                                <option value="6">Option #6</option>
                                                <option value="7">Option #7</option>
                                                <option value="8">Option #8</option>
                                                <option value="9">Option #9</option>
                                                <option value="10">Option #10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio3" class="form-check-label ">
                                                        <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                                </label>
                                                <label for="inline-radio3" class="form-check-label ">
                                                    <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Inline Checkboxes</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                                </label>
                                                <label for="inline-checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                      </div>
                        <div class="col-lg-6">
                          <div class="card">
                              <div class="card-header">
                                  Input <strong>Grid</strong>
                              </div>
                              <div class="card-body card-block">
                                  <form action="#" method="post" class="form-horizontal">
                                      <div class="row form-group">
                                          <div class="col col-sm-3"><input type="text" placeholder=".col-sm-3" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-4"><input type="text" placeholder=".col-sm-4" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><input type="text" placeholder=".col-sm-5" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-6"><input type="text" placeholder=".col-sm-6" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-7"><input type="text" placeholder=".col-sm-7" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-8"><input type="text" placeholder=".col-sm-8" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-9"><input type="text" placeholder=".col-sm-9" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-10"><input type="text" placeholder=".col-sm-10" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-11"><input type="text" placeholder=".col-sm-11" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-12"><input type="text" placeholder=".col-sm-12" class="form-control"></div>
                                      </div>
                                  </form>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary btn-sm">
                                      <i class="fa fa-user"></i> Login
                                  </button>
                                  <button type="reset" class="btn btn-danger btn-sm">
                                      <i class="fa fa-ban"></i> Reset
                                  </button>
                              </div>
                          </div>
                        </div>
                     
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-6">
                          <div class="card">
                              <div class="card-header">
                                  <strong>Horizontal</strong> Form
                              </div>
                              <div class="card-body card-block">
                                  <form action="#" method="post" class="form-horizontal">
                                      <div class="row form-group">
                                          <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                                          <div class="col-12 col-md-9"><input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control"><span class="help-block">Please enter your email</span></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                                          <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control"><span class="help-block">Please enter your password</span></div>
                                      </div>
                                  </form>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary btn-sm">
                                      <i class="fa fa-dot-circle-o"></i> Submit
                                  </button>
                                  <button type="reset" class="btn btn-danger btn-sm">
                                      <i class="fa fa-ban"></i> Reset
                                  </button>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-header">
                                <strong>Inline</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-inline">
                                    <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control"></div>
                                    <div class="form-group"><label for="exampleInputEmail2" class="px-1  form-control-label">Email</label><input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control"></div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                         </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                              <div class="card-header">
                                  Input <strong>Sizes</strong>
                              </div>
                              <div class="card-body card-block">
                                  <form action="#" method="post" class="form-horizontal">
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Small Input</label></div>
                                          <div class="col col-sm-6"><input type="text" id="input-small" name="input-small" placeholder=".form-control-sm" class="input-sm form-control-sm form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Normal Input</label></div>
                                          <div class="col col-sm-6"><input type="text" id="input-normal" name="input-normal" placeholder="Normal" class="form-control"></div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Large Input</label></div>
                                          <div class="col col-sm-6"><input type="text" id="input-large" name="input-large" placeholder=".form-control-lg" class="input-lg form-control-lg form-control"></div>
                                      </div>
                                  </form>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary btn-sm">
                                      <i class="fa fa-dot-circle-o"></i> Submit
                                  </button>
                                  <button type="reset" class="btn btn-danger btn-sm">
                                      <i class="fa fa-ban"></i> Reset
                                  </button>
                              </div>
                          </div>
                     </div>
                  </div>
               

        </div>  
      </section>
  </div>  
@endsection
