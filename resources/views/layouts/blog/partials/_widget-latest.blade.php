<div class="widget latest-posts">
    <header>
        <h3 class="h6">Latest Comments</h3>
    </header>
    <div class="blog-posts">
        @foreach(\App\Comment::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get() as $comment)
            <a href="{{ url('/blog/' . $comment->post->slug) }}">
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <img src="{{ asset('assets/blog/img/user.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="title">
                        <strong>{{ $comment->name }} On {{ $comment->post->title }}</strong>
                    </div>
                </div>
                <div class="f-flex align-items-center">
                    <p class="text-muted">
                        {{ substr($comment->body, 0, 100) }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>    