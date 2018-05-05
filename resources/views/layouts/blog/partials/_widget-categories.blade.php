<div class="widget categories">
    <header>
        <h3 class="h6">Categories</h3>
    </header>
    @foreach (\App\Category::all() as $category)
        <div class="item d-flex justify-content-between"><a href="{{ url('/blog/category/' . $category->slug) }}">{{ $category->title }}</a><span>{{ $category->posts()->count() }}</span></div>
    @endforeach
</div>
    