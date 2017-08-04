@extends('layouts.app')
@section('content')

        <div class="col-sm-9 col-md-10 main">
            <h2 class="page-header">User's Information</h2>
            <div class="table-responsive">
<!--                <i class="fa fa-plus-square" style="color: green;font-size: xx-large;    
                   padding-left: 10px;"></i>-->
                <a class="btn btn-small btn-info" href="{{ URL::to('users/create') }}">Add</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Fullname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id }}</td>
                                <td>{{$user->username }}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->fullname }}</td>
                                <td style="display: inline-block">
                                    <a class="btn btn-small btn-info" href="{{ URL::to('users/show/'. $user->id) }}">Edit</a>
                                    {!! Form::open(['route' => ['users.delete', $user->id], 'method' => 'DELETE', 'style' => 'display:inline']) !!}
                                             {{ Form::submit('Delete', ['class' => 'btn btn-small btn-info']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
@endsection