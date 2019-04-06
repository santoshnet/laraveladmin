@extends('layouts.app')

@section('title', '| Add Role')

@section('content')

   <div class="content-area">
          <div class="container-fluid">
            <div class="row">
               <div class="offset-md-3 col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Add Role</strong>
                      </div>
                      <div class="card-body">  
                           {{ Form::open(array('url' => 'roles')) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control','required')) }}
                            </div>

                            <h5><b>Assign Permissions</b></h5>

                            <div class='form-group'>
                                @foreach ($permissions as $permission)
                                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                @endforeach
                            </div>

                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}
                      </div>
                  </div>
              </div>
          </div>
       </div>
  </div>
@endsection




