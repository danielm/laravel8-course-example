@extends('base')

@section('title', 'Posts Backend')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">
            Create Post
        </h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control" required>
                        @error('title')
                        <small class="text-danger">{{ $message }}</small>   
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="file" class="form-control-file">
                        @error('file')
                        <small class="text-danger">{{ $message }}</small>   
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Body *</label>
                        <textarea name="body" rows="6" class="form-control" required>{{ old('body') }}</textarea>
                        @error('body')
                        <small class="text-danger">{{ $message }}</small>   
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Embed Content</label>
                        <textarea name="iframe" rows="3" class="form-control">{{ old('iframe') }}</textarea>
                        @error('iframe')
                        <small class="text-danger">{{ $message }}</small>   
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
    </div>
@endsection