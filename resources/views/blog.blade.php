@extends('layouts.blog.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
            <div class="container">
                <div class="row">
                    @foreach ($posts->orderBy('published_at', 'DESC')->get() as $post)
                        <!-- post -->
                        <div class="post col-xl-6">
                            <div class="post-thumbnail"><a href="post.html"><img src="{{ asset($post->featured) }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">{{ $post->published_at }}</div>
                                    <div class="category"><a href="#">{{ $post->category->title }}</a></div>
                                </div><a href="post.html">
                                    <h3 class="h4">{{ $post->title }}</h3></a>
                                {!! substr($post->body, 0, 150) !!} ...
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="{{ asset($post->user->avatar) }}" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>{{ $post->user->name }}</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> {{ $post->published_at }}</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-template d-flex justify-content-center">
                        <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a href="#" class="page-link active">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                    </ul>
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