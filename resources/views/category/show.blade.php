@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container">
        <div class="card mb-3">
            
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-center mb-5 ">{{$post->title}}</h5>
                <p class="card-text">{{$post->desc}}</p>
                
            </div>
        </div>
    </div>
</div>
@endsection
