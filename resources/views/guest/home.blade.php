@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <p>Guest</p>

                <div id="root"></div>
                <script src="{{asset('js/front.js')}}"></script>
            </div>
        </div>
    </div>
</div>
@endsection
