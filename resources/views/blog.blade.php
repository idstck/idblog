@extends('layouts.blog.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                        <!-- post -->
                        <div class="post col-xl-6">
                            <div class="post-thumbnail"><a href="{{ url('/blog/' . $post->slug) }}"><img src="{{ asset($post->featured) }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">{{ $post->published_at->format('d/m/Y') }}</div>
                                    <div class="category"><a href="{{ url('/blog/category/' . $post->category->slug) }}">{{ $post->category->title }}</a></div>
                                </div><a href="{{ url('/blog/' . $post->slug) }}">
                                    <h3 class="h4">{{ $post->title }}</h3></a>
                                {!! substr($post->body, 0, 150) !!} ...
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="{{ asset($post->user->avatar) }}" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>{{ $post->user->name }}</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> {{ $post->date }}</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>{{ $post->comments()->count() }}</div>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    {!! $posts->appends(request()->query())->links('layouts.blog.partials._pagination') !!}
                </nav>
            </div>
        </main>
        <aside class="col-lg-4">
            <!-- Widget [Search Bar Widget]-->
            @include('layouts.blog.partials._widget-search')
            <!-- Widget [Latest Comments Widget]        -->
            @include('layouts.blog.partials._widget-latest')
            <!-- Widget [Categories Widget]-->
            @include('layouts.blog.partials._widget-categories')
        </aside>
    </div>
</div>
@endsection