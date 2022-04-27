{{-- @dd($posts) --}}
@extends('layouts/main')

@section('content')
<?php 
$req ='';
if(request('category') && request('author')){
	$req =' In '. request('category'). ' By '. request('author');
}
elseif(request('category')){
$req = ' In '. request('category');
}elseif(request('author')){
	$req = ' By '. request('author');
}
?>
<h1 class="mt-5 text-center">All {{ $title. $req }}</h1>
<div class="row justify-content-end">
	<div class="col-md-6">
		<form action="/blog">
		<div class="input-group pt-3 pb-5 ">
			@if (request('category'))
					<input type="hidden" name="category" value="{{ request('category'); }}">
			@elseif(request('author'))
					<input type="hidden" name="author" value="{{ request('author'); }}">
			@endif
			<div class="col-4">
				{{-- ini masih kurang tepat. pas ganti kategori nanti request category nya jadi ada 2 di urlnya --}}
				<select class="form-control form-select" name="category">
					<option value="">All Category</option>
					@foreach ($categories as $category)
					<option {{ request('category') == $category->name ? 'selected' : ''}} value="{{ $category->name }}">{{ $category->name }}</option>
					@endforeach
				</select>
			</div>
			<input type="text" class="form-control" name="search" value="{{ request('search'); }}">
			<button class="btn btn-outline-danger" type="submit" id="button-addon2">Search</button>
		</div>
		</form>
	</div>
</div>
@if ($posts->count())
<div class="card mb-3 mx-auto col-md-6">
	<div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(207, 20, 20, 0.7)">
		<a href="/blog?category={{ $posts[0]->category->name }}" class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a>
	</div>
    <img class="card-img-top" src="https://source.unsplash.com/1200x600?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" height="50%">
    <div class="card-body text-center">
        <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-danger"><h2 class="card-title">{{ $posts[0]->title }}</h2></a>
      <p>
          <small>By : <a class="text-decoration-none text-danger" href="/blog?author={{ $posts[0]->author->name }}">{{ $posts[0]->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}.</p>
      <a class="btn btn-danger" href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-danger">Read more</a>
    </div>
</div>

<article>
	<div class="container">
		<div class="row">
			<div class="d-flex justify-content-center p-3">
				{{ $posts->links() }}
			</div>
			@foreach ($posts->skip(1) as $post)
			<div class="col-md-4">
				<div class="card mb-3">
					<div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(207, 20, 20, 0.7)">
						<a href="/blog?category={{ $posts[0]->category->name }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
					</div>
					<img class="card-img-top" src="https://source.unsplash.com/720x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
					<div class="card-body" style="margin-top: -60px">
							<a href="/post/{{ $post->slug }}" class="text-decoration-none text-danger"><h4 class="mt-5">{{ $post->title }}</h4></a>
							<p>
								<small>By : <a class="text-decoration-none text-danger" href="/blog?author={{ $post->author->name }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
							</p>
							<p>{{ $post->excerpt }}</p>
							<a class="btn btn-danger" href="/post/{{ $post->slug }}" class="text-decoration-none text-danger">Read more</a>
					</div>
				</div>
			</div>
			@endforeach  
		</div>
	</div>
</article>
<div class="d-flex justify-content-center p-3">
	{{ $posts->links() }}
</div>
@else
<p class="text-center fs-4">No Posts Found</p>
@endif

@endsection
