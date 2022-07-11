@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Hello') . ' '. auth()->user()->name,
'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
'class' => 'col-lg-7'
])

<div class="card ">
    <div class="text-center card-header">
        {{$post->title}}
    </div>
    <div class="card-body">
        <p class="card-text">
            {{$post->desc}}
        </p>
    </div>

</div>

@endsection
