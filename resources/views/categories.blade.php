{{-- @dd($posts) --}}
@extends('layouts/main')

@section('content')
<h1 class="mt-5">Categories :</h1>

      <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-3 col-6 mb-3">
          <a href="/blog?category={{ $category->name }}">
            <div class="card bg-dark text-white">
              <img class="card-img" src="https://source.unsplash.com/400x300?{{ $category->name }}" alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.5)">
                <h3 class="card-title mx-auto">{{ $category->name }}</h3>
              </div>
            </div>
          </a>
        </div>

        
        {{-- <li>
          <a href="/categories/{{ $category->slug }}"><h4 class="mt-5">{{ $category->name }}</h4></a>
        </li> --}}
        @endforeach  
    </div>


@endsection
