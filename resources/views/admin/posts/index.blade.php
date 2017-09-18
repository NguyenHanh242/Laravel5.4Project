@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">Post page</h2>
        <div class="table-responsive">
            <a class="btn btn-small btn-info" href="{{ URL::to('posts/create') }}">Add</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Preview</th>
                        <th>Time</th>
                        <th>Fullname</th>
                        <th>Picture</th>
                        <th>Detail</th>
                        <th style="width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                   
                        <tr>
                            <td>{{$post->id }}</td>
                            <td>{{$post->name }}</td>
                            <td>{{$post->preview }}</td>
                            <td>{{$post->time }}</td>
                            <td>{{$post->user->fullname }}</td>
                            <td><img src="upload/{{$post->picture }}" alt="" style="width: 150px; height: 100px;"/></td>
                            <td>{{$post->detail }}</td>
                            <td style="display: inline-block">
                                <a class="btn btn-small btn-info" href="{{ URL::to('posts/'. $post->id . '/edit') }}">Edit</a>
                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE', 'style' => 'display:inline']) !!}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-small btn-info']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection