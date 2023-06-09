@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Post Categories</h1>
            </div>
        </div>
        <div class="row">

            @foreach ($categories as $category)
                <div class="col-md-4 mb-sm-4">
                    <a href="/post?category={{ $category->slug }}">
                        <div class="card text-bg-dark border-0 shadow">
                            <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 bg-category fs-3">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
    
