@extends('layouts.blog.app')

@section('content')
    <div class="container">
        <div class="row">
          <!-- Latest Posts -->
            <main class="post blog-post col-lg-8"> 
                <div class="container">
                  <div class="post-single">
                    <div class="post-thumbnail"><img src="{{ asset($post->featured) }}" alt="..." class="img-fluid"></div>
                    <div class="post-details">
                      <div class="post-meta d-flex justify-content-between">
                        <div class="category"><a href="{{ url('/blog/category/' . $post->category->slug) }}">{{ $post->category->title }}</a></div>
                      </div>
                      <h1>{{ $post->title }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                      <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                          <div class="avatar"><img src="{{ asset($post->user->avatar) }}" alt="..." class="img-fluid"></div>
                          <div class="title"><span>{{ $post->user->name }}</span></div></a>
                        <div class="d-flex align-items-center flex-wrap">       
                          <div class="date"><i class="icon-clock"></i> {{ $post->date }}</div>
                          
                          <div class="comments meta-last"><i class="icon-comment"></i>{{ $post->comments()->count() }}</div>
                        </div>
                      </div>
                      <div class="post-body">
                        {!! $post->body !!}
                      </div>
                      <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                          @if ($prev)
                            <a href="{{ url('/blog/' . $prev->slug) }}" class="prev-post text-left d-flex align-items-center">
                              <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                              <div class="text"><strong class="text-primary">Previous Post </strong>
                                <h6>{{ $prev->title }}.</h6>
                              </div>
                            </a>
                          @endif

                          @if ($next)
                            <a href="{{ url('/blog/' . $next->slug) }}" class="next-post text-right d-flex align-items-center justify-content-end">
                              <div class="text"><strong class="text-primary">Next Post </strong>
                                <h6>{{ $next->title }}.</h6>
                              </div>
                              <div class="icon next"><i class="fa fa-angle-right">   </i></div>
                            </a>
                          @endif
                      </div>
                      <div class="post-comments">
                        <header>
                          <h3 class="h6">Post Comments<span class="no-of-comments">({{ $post->comments()->count() }})</span></h3>
                        </header>
                        @if($post->comments)
                          @foreach ($post->comments as $comment)
                           @if ($comment->status == 1)
                            <div class="comment">
                              <div class="comment-header d-flex justify-content-between">
                                <div class="user d-flex align-items-center">
                                  <div class="image"><img src="{{ asset('assets/blog/img/user.svg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                  <div class="title"><strong>{{ $comment->name }}</strong><span class="date">{{ $comment->created_at }}</span></div>
                                </div>
                              </div>
                              <div class="comment-body">
                                <p>{{ $comment->body }}.</p>
                              </div>
                            </div>
                           @endif
                          @endforeach
                        @endif
                      </div>
                      <div class="add-comment">
                        <header>
                          <h3 class="h6">Leave a reply</h3>
                        </header>
                        {!! Form::open(['route' => ['post.comment', $post->slug], 'method' => 'POST', 'class' => 'commenting-form']) !!}
                        {{ csrf_field() }}  
                        <div class="row">
                            <div class="form-group col-md-6">
                              {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Your Name', 'required']) !!}
                              @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="form-group col-md-6">
                              {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Email Address (will not be published)', 'required']) !!}
                              @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="form-group col-md-12">
                              {!! Form::textarea('body', null, ['id' => 'textarea', 'class' => $errors->has('body') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Type your comment', 'required']) !!}
                              @if ($errors->has('body'))
                                <span class="invalid-feedback">
                                  <strong>{{ $errors->first('body') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-secondary">Submit Comment</button>
                            </div>
                          </div>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                </div>
            </main>
            <aside class="col-lg-4">
                <!-- Widget [Search Bar Widget]-->
                @include('layouts.blog.partials._widget-search')
                <!-- Widget [Latest Posts Widget]        -->
                @include('layouts.blog.partials._widget-latest')
                <!-- Widget [Categories Widget]-->
                @include('layouts.blog.partials._widget-categories')
            </aside>
        </div>
    </div>
@endsection
