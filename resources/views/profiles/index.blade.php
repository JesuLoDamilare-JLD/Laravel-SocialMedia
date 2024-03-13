@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/dev.jpg" class="rounded-circle" style="height:150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user -> username }}</h1>
                <a href="/p/create">Add New Post</a>

            </div>
            <a href="/profile/{{ $user -> id }}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>1234</strong> following</div>
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
            </div>
            <div class="pt-2"><strong>{{ $user -> profile -> title }}</strong></div>
            <div>
                {{ $user -> profile -> description }}
            </div>
            <div><a href="#">{{ $user -> profile -> url }}</a></div>
        </div>
        <div class="row pt-5">
            @foreach($user -> posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post-> id}}">
                    <img src="/storage/{{ $post->image }}" style="height: 300px;">
                </a>
            </div>
            @endforeach



        </div>


    </div>

</div>
@endsection