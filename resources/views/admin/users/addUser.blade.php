@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">Add User Page</h2>
        <div class="table-responsive">
            @include('layouts.errors')
            {!! Form::open(['route' => 'users.store', 'class' => 'form-signin']) !!}
                <div class="form-group"> 
                     {{ Form::label('username', 'Username') }}
                     {{ Form::text('username','',  ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('email', 'Email') }}
                     {{ Form::email('email', '',['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('fullname', 'Fullname') }}
                     {{ Form::text('fullname','', ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::submit('Add', ['class' => 'btn btn-success pull-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection