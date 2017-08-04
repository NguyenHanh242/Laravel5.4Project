@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">Update User Page</h2>
        <div class="table-responsive">
            @include('layouts.errors')
            {!! Form::open(['route' => ['users.edit', $user->id], 'method' => 'PUT', 'class' => 'form-signin']) !!}
                <div class="form-group"> 
                     {{ Form::label('username', 'Username') }}
                     {{ Form::text('username', $user->username, ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('email', 'Email') }}
                     {{ Form::email('email', $user->email, ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('fullname', 'Fullname') }}
                     {{ Form::text('fullname', $user->fullname, ['class' => 'form-control'])}}
                </div>
<!--                <div class="form-group"> 
                     {{ Form::label('pass', 'Password') }}
                     {{ Form::input('password', 'pass','', ['class' => 'form-control'])}}
                </div>
                <div>
                    {{ Form::label('re_pass', 'Confirm Password') }}
                    {{ Form::input('password', 're_pass', '', ['class' => 'form-control']) }}
                </div>-->
                <div class="form-group"> 
                     {{ Form::submit('Update', ['class' => 'btn btn-success pull-right', 'style' => 'margin-top:20px']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection