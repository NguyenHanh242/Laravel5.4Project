@extends('layouts.app')

@section('content')

    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">Add Post Page</h2>
        <div class="table-responsive">
            @include('layouts.errors')
             
            {!! Form::open(['route' => 'posts.store', 'class' => 'form-signin', 'files' => true]) !!}
                <div class="form-group"> 
                     {{ Form::label('name', 'Name') }}
                     {{ Form::text('name','',  ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('user_id', 'Username') }}
                     {{ Form::select('user_id', $users, null, ['class' => 'form-control', 'style' => 'width: 40%'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('picture', 'Picture') }}
                     {{ Form::file('picture','',  ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('preview', 'Preview') }}
                     {{ Form::textarea('preview','', ['size' => '152x4'], ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('detail', 'Detail') }}
                     {{ Form::textarea('detail','', ['size' => '152x7'], ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::submit('Add', ['class' => 'btn btn-success pull-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection