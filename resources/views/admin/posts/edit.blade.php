@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Modifica "{{ $post->title }}"</h2>
                    <a href="{{ Route('admin.posts.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="col-12 mb-5">
                <form action=" {{ Route('admin.posts.update', $post) }} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-2">
                                <label class="control-label my-2">Title</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo"
                                    class="form-control" value="{{ old('title') ?? $post->title }}" required>
                            </div>
                            <div class="col-12 my-2">
                                <label class="control-label my-2">Content</label>
                                <textarea name="description" id="description" placeholder="Inserisci la descrizione" cols="30" rows="10"
                                    class="form-control" required>{{ old('description') ?? $post->content }}</textarea>
                            </div>
                            <div class="col-12 my-2">
                                <label class="control-label my-2">Slug</label>
                                <input type="text" name="thumb" id="thumb" placeholder="Inserisci la thumb"
                                    class="form-control" value="{{ old('thumb') ?? $post->slug }}" required>
                            </div>
                            {{-- <div class="col-12 my-2">
                                            <label class="control-label my-2">Cover Image</label>
                                            <input type="text" name="cover_image" id="cover_image"
                                                placeholder="Inserisci la cover image" class="form-control"
                                                value="{{ old('cover_image') ?? $comic->cover_image }}" required>
                                        </div> --}}
                            <div class="col-12 text-center my-5">
                                <button type="submit" class="btn btn-success">Modify</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection