@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fvno2-1.fna.fbcdn.net/vp/c68a410ae676cee6d4a0e47729e663f3/5E36455A/t51.2885-19/s150x150/64462020_2489715901249540_8053774716130820096_n.jpg?_nc_ht=instagram.fvno2-1.fna.fbcdn.net" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong> 223 </strong>  posts
                </div>
                <div class="pr-5">
                    <strong> 2.1k </strong> followers
                </div>
                <div class="pr-5">
                    <strong> 200 </strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title}}
            </div>
            <div>
            {{ $user->profile->description }}
            </div>
            <div>
                <a href=" {{ $user->profile->url }}"> {{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
