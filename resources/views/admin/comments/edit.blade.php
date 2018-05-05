@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Comments</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Edit Comment
                    </div>
                    {!! Form::model($comment, ['route' => ['admin.comments.update', $comment->id], 'method' => 'PUT' ]) !!}
                    <div class="card-body">
                        <div class="form-group">
                            <lable>Full Name</lable>
                            <input type="text" value="{{ $comment->name }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" value="{{ $comment->email }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Comment</label>
                            <textarea cols="30" rows="10" class="form-control" readonly>{{ $comment->body }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            {!! Form::select('status', [0 => 'Hide', 1 => 'Publish'], null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection