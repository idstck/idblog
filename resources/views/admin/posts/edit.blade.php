@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Posts</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
        {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'PUT']) !!}
            @include('admin.posts._form')
        {!! Form::close() !!}
    </div>
@endsection