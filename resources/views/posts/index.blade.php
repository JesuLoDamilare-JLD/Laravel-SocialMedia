@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-8">
            <img src="{{$post -> profileImage() }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="/storage/{{ $post -> user -> profile ->image }}" class="rounded-circle" style="height:50px;">
                    </div>
                    <div>
                        <div style="font-weight: bold;">
                            <a href="/profile/{{ $post -> user -> id }}" style="text-decoration: none;"> <span class="text-dark">{{ $post -> user -> username }}</span></a>
                            <a href="#" class="ps-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>


                <p>
                    <span style="font-weight: bold;">
                        <a href="/profile/{{ $post -> user -> id }}" style="text-decoration: none;"> <span class="text-dark">{{ $post -> user -> username }}</span></a>
                    </span> {{$post -> caption }}
                </p>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection