@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Create your project</h2>
                    <a href="{{ Route('admin.posts.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="col-12 mb-5">
                <form action=" {{ Route('admin.posts.store') }} " method="POST">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-2">
                                <!-- Titolo -->
                                <label class="control-label my-2">Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter title"
                                    class="form-control" required>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Content -->
                                <label class="control-label my-2">Content</label>
                                <textarea name="content" id="content" placeholder="Enter description" cols="30" rows="10"
                                    class="form-control" required></textarea>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Slug -->
                                <label class="control-label my-2">Slug</label>
                                <input type="text" name="slug" id="slug" placeholder="Enter slug"
                                    class="form-control" required>
                            </div>
                            {{-- <div class="col-12 my-2">
                                            <!-- Cover Image -->
                                            <label class="control-label my-2">Cover Image</label>
                                            <input type="text" name="cover_image" id="cover_image" placeholder="Enter cover image" class="form-control" value="{{ old('cover_image') ?? $comic->cover_image }}" required>
                                        </div> --}}
                            <div class="col-12 text-center my-5">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Crea</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection