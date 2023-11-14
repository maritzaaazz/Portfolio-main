@extends('auth.layouts2')
@section('content')

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <img src="{{ asset('storage/posts_image/'.$gallery->picture) }}" width="300" class="mb-5" alt="{{ $gallery->name }}">
    <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="title" class="form-input" id="title" name="title" value="{{ $gallery->title }}">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="description" class="form-input" id="description" name="description">{{ $gallery->description }}</textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="mb-5">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" class="form-input" id="picture" name="picture">
            @if ($errors->has('picture'))
                <span class="text-danger">{{ $errors->first('picture') }}</span>
            @endif
        </div>
        <div class="flex flex-col w-full justify-between mt-4 items-center">
            <button type="submit" class="btn_chat btn-primary" value="update">Update</button>
            <a href="{{ route('gallery.index') }}" class="btn btn-danger text-center my-3">
                Cancel
            </a>
        </div>
    </form>
@endsection
