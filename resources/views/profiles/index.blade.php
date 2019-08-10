@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-dub4-1.cdninstagram.com/vp/a465a1df34db8189482fa4a3ed04914f/5DCA5F15/t51.2885-19/s150x150/23596117_153100705305800_9159416275850493952_n.jpg?_nc_ht=scontent-dub4-1.cdninstagram.com"
                alt="Avatar" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Adda New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>16</strong> followers</div>
                <div class="pr-5"><strong>5</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#" target="_blank">{{$user->profile->url }}</a></div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>

            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
