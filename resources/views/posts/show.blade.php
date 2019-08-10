@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-50">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">

                    <div class="pr-3">
                        <img src="/storage/{{$post->user->profile->image}}" alt="{{$post->user->profile->title}}"
                            class="rounded-circle w-25">
                    </div>
                    <div>
                        <a href="/profile/{{$post->user->id}}">
                            <span class="font-weight-bold text-dark">{{$post->user->username}}</span>
                        </a>
                        -
                        <a href="#" class="pl-3">Follow</a>
                    </div>

                </div>
                <hr>
                <p>

                    <a href="/profile/{{$post->user->id}}">
                        <span class="font-weight-bold text-dark">{{$post->user->username}}
                        </span>
                    </a>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
