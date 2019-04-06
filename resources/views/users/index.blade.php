{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Users')

@section('content')

 <div class="content-area">
          <div class="container-fluid">
            <div class="row">
               <div class="offset-md-2 col-lg-8">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">User Administration</strong>
                      </div>
                      <div class="card-body">  
   
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        
                                        <th>User Roles</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                      
                                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                        <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                     </div>
                  </div>
              </div>
          </div>
       </div>
  </div>

@endsection
