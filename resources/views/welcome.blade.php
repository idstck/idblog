@extends('layouts.blog.app')

@section('content')
<!-- Hero Section-->
<section style="background: url({{ asset('assets/blog/img/hero.jpg') }}); background-size: cover; background-position: center center" class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h1>IDBlog - A simple blog by laravel framework</h1><a href="#" class="hero-link">Discover More</a>
        </div>
      </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
    </div>
</section>
<!-- Intro Section-->
<section class="intro">
    <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <h2 class="h3">Some great intro here</h2>
            <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
        </div>
        </div>
    </div>
</section>
<section class="featured-posts no-padding-top">
    <div class="container">
        <!-- Post-->
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                <div class="content">
                    <header class="post-header">
                    <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                        <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="{{ asset('assets/blog/img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                    </footer>
                </div>
                </div>
            </div>
            <div class="image col-lg-5"><img src="{{ asset('assets/blog/img/featured-pic-1.jpeg') }}" alt="..."></div>
        </div>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch">
            <div class="image col-lg-5"><img src="{{ asset('assets/blog/img/featured-pic-2.jpeg') }}" alt="..."></div>
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                <div class="content">
                    <header class="post-header">
                    <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                        <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="{{ asset('assets/blog/img/avatar-2.jpg') }}" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                    </footer>
                </div>
                </div>
            </div>
        </div>
        <!-- Post                            -->
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                <div class="content">
                    <header class="post-header">
                    <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                        <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="{{ asset('assets/blog/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                    </footer>
                </div>
                </div>
            </div>
            <div class="image col-lg-5"><img src="{{ asset('assets/blog/img/featured-pic-3.jpeg') }}" alt="..."></div>
        </div>
    </div>
</section>
@endsection