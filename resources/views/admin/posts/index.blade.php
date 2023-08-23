@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col-12">
                    <h1>Projects</h1>
                </div>
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titolo</th>
                                <th>Slug</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Modify</a>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="#" class="d-inline-block" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button href="#" class="btn btn-sm btn-danger">Modify</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection