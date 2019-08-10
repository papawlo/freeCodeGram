@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">

                <a href="/profile/{{$post->user->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100 card-img-top">
                </a>

                <div class="card-body">

                    <span class="font-weight-bold text-dark">{{$post->user->username}}
                    </span>

                    <p class="card-text">{{$post->caption}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Like</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comment</button>
                        </div>
                        <small class="text-muted">{{$post->created_at}}</small>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex jusitfy-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
