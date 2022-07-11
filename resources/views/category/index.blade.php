@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Hello') . ' '. auth()->user()->name,
'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
'class' => 'col-lg-7'
])
<div class="card-header border-0 row">
    <h3 class="mb-0">Light table</h3>
    <div class="ml-4">
        <a href="{{route('category.create')}}">
            <button class="btn btn-primary" type="button"> Create </button>
        </a>
    </div>
</div>
<!-- Light table -->
<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">NO</th>
                <th scope="col" class="sort" data-sort="budget">NAMA</th>
                <th scope="col" class="sort" data-sort="status">TANGGAL DIBUAT</th>
                <th scope="col" class="sort" data-sort="status"></th>
                <th scope="col" class="sort" data-sort="status">AKSI</th>
                <th scope="col" class="sort" data-sort="status"></th>

            </tr>
        </thead>
        <tbody class="list">
            @foreach($data as $key => $value)

            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">{{1 + $key++}}</span>
                        </div>
                    </div>
                </th>
                <th scope="row">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">{{$value->name}}</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">{{$value->created_at}}</span>
                        </div>
                    </div>
                </td>
                <td>

                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="mr-4">
                            <a href="{{route('category.edit', $value)}}">
                                <button class="btn btn-primary" type="button"> edit </button>
                            </a>
                        </div>

                        <form action="{{route('category.destroy', $value)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary" type="submit"> hapus </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
