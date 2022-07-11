@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => 'HAI',
'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
'class' => 'col-lg-7'
])
<div class="card-header border-0 row">
    <h3 class="mb-0">Artikel</h3>
    <div class="ml-4">
    </div>
</div>
<div class="row">
    @foreach($post as $key => $value)
    <div class="col-3">
        <div class="card mx-4 my-4" style="width: 18rem;">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <div class="text-center">
                <a href="{{route('posts.show', $value)}}">
                    <h3>{{$value->title}}</h3>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="text-truncate">
                        {{$value->desc}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
