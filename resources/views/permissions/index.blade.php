{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

   <div class="content-area">
          <div class="container-fluid">
            <div class="row">
               <div class="offset-md-2 col-lg-8">
                  <div class="card">
                      <div class="card-header">
                           <h1><i class="fa fa-key"></i>Available Permissions
                                <a href="{{ URL::to('permissions/create') }}" class="btn btn-default pull-right">Add Permission</a>
                            </h1>
                      </div>
                      <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>Permissions</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td> 
                                        <td>
                                        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
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