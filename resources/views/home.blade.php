@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/dev.jpg" class="rounded-circle" style="height:150px;">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user -> username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
                <div class="pe-5"><strong>153</strong> posts</div>
            </div>
            <div class="pt-2"><strong>{{ $user -> profile -> title }}</strong></div>
            <div>
                {{ $user -> profile -> description }}
            </div>
            <div><a href="#">{{ $user -> profile -> url }}</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="/images/bnm.jpg" style="height: 300px;">
            </div>
            <div class="col-4">
                <img src="/images/soft.jpg" style="height: 300px;">
            </div>
            <div class="col-4">
                <img src="/images/tech.jpg" style="height: 300px;">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="/images/bnm.jpg" style="height: 300px;">
            </div>
            <div class="col-4">
                <img src="/images/soft.jpg" style="height: 300px;">
            </div>
            <div class="col-4">
                <img src="/images/tech.jpg" style="height: 300px;">
            </div>
        </div>

    </div>

</div>
@endsection