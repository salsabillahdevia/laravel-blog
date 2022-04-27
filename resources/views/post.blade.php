@extends('layouts/main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <img class="card-img-top mt-4" src="https://source.unsplash.com/720x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
            <h2 class="mt-5">{{ $post->title }}</h2>
            <h5>By : <a href="/blog?author={{ $post->author->name }}" class="text-decoration-none text-danger">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->name }}" class="text-decoration-none text-danger">{{ $post->category->name }}</a></h5>
            {{-- tag {!!  !!} itu supaya kalo kita nyimpen tag html bakal dijalanin. soalnya secara default laravel ga jalanin tag htmlnya--}}
            {!! $post->body !!}
            <br>
            <a class="btn btn-danger" href="/blog">Back</a>
        </div>
    </div>
</div>
   
@endsection