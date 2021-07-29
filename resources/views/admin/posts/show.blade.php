@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <small>{{$post->slug}}</small>
        <div class="mt-4">{{$post->content}}</div>
        
    </div>

@endsection