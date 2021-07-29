@extends ('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tbody>
                @foreach($posts as $item)
                <tr>    
                    <td>{{$item->$id}}</td>
                    <td>{{$item->$id}}</td>
                    <td>{{$item->$slug}}</td>
                    <td>SHOW</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                @endforeach
            
            </tbody>
        
        </table>
    </div>
@endsection