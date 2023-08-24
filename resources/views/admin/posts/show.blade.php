@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $posts->title }}</h5>
                        <p class="card-text"> {{ $posts->content }}</p>
                        <p class="card-text"> {{ $posts->slug }}</p>
                        <a href="{{ Route('admin.posts.index') }}" class="btn btn-primary">Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection