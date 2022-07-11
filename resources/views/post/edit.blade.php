@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Hello') . ' '. auth()->user()->name,
'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
'class' => 'col-lg-7'
])

<div class="card bg-secondary shadow">
    <div class="card-header bg-white border-0">
        <div class="row align-items-center">
            <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('posts.update', $post) }}" autocomplete="off">
            @csrf
            @method('put')

            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

            <div class="pl-lg-4">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-name">Nama Kategori</label>
                    <input type="text" name="title" value="{{$post->title}}" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                </div>

                <select class="form-control" name="kategori" id="exampleFormControlSelect1">
                    @foreach($cat as $key )
                    <option value="{{$key->id}}">{{$key->name}}</option>
                    @endforeach
                </select>
                <div class="pt-4">
                    <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Write here ..."  >{{$post->desc}}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-4">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
