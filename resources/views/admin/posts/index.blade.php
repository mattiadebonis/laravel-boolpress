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
                    <td><a class="btn btn-primary" href="{{route('admin.posts.edit', $item->id)}}">EDIT</a></td>
                    <td>
                            <form action="{{ route('admin.posts.destroy', $item->id) }}" method="POST" onSubmit="return confirm('Sei sicuro di voler eliminare questo articolo?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                </tr>
                @endforeach
            
            </tbody>
        
        </table>
    </div>
@endsection