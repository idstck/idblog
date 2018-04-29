@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Posts</a>
        </li>
        <li class="breadcrumb-item active">Post Detail</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Post Detail : {{ $post->title }}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <tr>
                          <th>ID</th>
                          <td>{{ $post->id }}</td>
                      </tr>
                      <tr>
                          <th>Author</th>
                          <td>{{ $post->user->name }}</td>
                      </tr>
                      <tr>
                          <th>Published At</th>
                          <td>{{ $post->published_at }}</td>
                      </tr>
                      <tr>
                          <th>Title</th>
                          <td>{{ $post->title }}</td>
                      </tr>
                      <tr>
                          <th>Body</th>
                          <td>{!! $post->body !!}</td>
                      </tr>
                      <tr>
                          <th>Category</th>
                          <td>{{ $post->category->title }}</td>
                      </tr>
                      <tr>
                          <th>Featured Image</th>
                          <td><img src="{{ asset($post->featured) }}" alt="Featured Image" height="150" width="150"></td>
                      </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection