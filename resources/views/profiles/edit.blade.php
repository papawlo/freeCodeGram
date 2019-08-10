@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="row">
                            <h1>Edit Profile</h1>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label">Title</label>

                            <input id="title" type="text" class="form-control
                            @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title"
                                autofocus required>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label">Description</label>

                            <input id="description" type="text" class="form-control
                            @error('description') is-invalid @enderror" name="description"
                                value="{{ old('description') ?? $user->profile->description}}"
                                autocomplete="description" required>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label">Url</label>

                            <input id="url" type="text" class="form-control
                            @error('url') is-invalid @enderror" name="url" value="{{ old('url') ??
                            $user->profile->url}}" autocomplete="url">

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label">Profile Image</label>


                            <input type="file" name="image" id="image" class="form-control-file
                       @error('image') is-invalid @enderror">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Profile') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
