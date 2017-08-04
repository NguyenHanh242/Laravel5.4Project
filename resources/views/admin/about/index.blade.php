@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">About Page</h2>
        <div class="table-responsive">
            @include('layouts.errors')
            {!! Form::open(['route' => ['about.update', $about->id], 'method' => 'PUT'], ['class' => 'form-signin']) !!}
                <div class="form-group"> 
                    <h1>test</h1>
                     {{ Form::label('preview', 'Preview') }}
                     {{ Form::textarea('preview', $about->preview, ['size' => '152x4'], ['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::label('detail', 'Detail') }}
                     {{ Form::textarea('detail', $about->detail, ['size' => '152x7'],['class' => 'form-control'])}}
                </div>
                <div class="form-group"> 
                     {{ Form::submit('Update', ['class' => 'btn btn-success pull-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection