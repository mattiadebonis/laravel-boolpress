@extends ('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Nuovo post</a>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tbody>
                @foreach($posts as $item)
                <tr>    
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->slug}}</td>
                    <td><a class="btn btn-success" href="{{route('admin.posts.show', $item->id)}}">SHOW</a></td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                @endforeach
            
            </tbody>
        
        </table>
    </div>
@endsection