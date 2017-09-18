@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'contact.send', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6"> 
                                {{ Form::text('name', '', ['class' => 'form-control']) }}
                            </div>    
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6"> 
                                {{ Form::email('email', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('subject', 'Subject', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6"> 
                                {{ Form::text('subject', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('message', 'Message', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6"> 
                                {{ Form::textarea('message', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Add', ['class' => 'btn btn-success']) }}
                            </div>
                        </div>
                            
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
