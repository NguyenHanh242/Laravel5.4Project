@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">Update User Page</h2>
        <div class="table-responsive">
            {!! Form::open(['route' => ['users.edit', $user->id], 'method' => 'PUT'], ['class' => 'form-signin']) !!}
                
                <div class="form-group"> 
                     {{ Form::submit('Update', ['class' => 'btn btn-success pull-right', 'style' => 'margin-top:20px']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection