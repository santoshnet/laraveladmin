@extends('layouts.app')

@section('title', '| Edit Permission')

@section('content')

<div class="content-area">
          <div class="container-fluid">
            <div class="row">
               <div class="offset-md-2 col-lg-8">
                  <div class="card">
                      <div class="card-header">
                            <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
                      </div>
                      <div class="card-body">  
                        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

                        <div class="form-group">
                            {{ Form::label('name', 'Permission Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                        <br>
                        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}
                    </div>
                  </div>
              </div>
          </div>
       </div>
  </div>    


@endsection