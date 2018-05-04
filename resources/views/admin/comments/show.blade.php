@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Comments</a>
            </li>
            <li class="breadcrumb-item active">Comment Detail</li>
        </ol>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Comment Detal : {{ $comment->post->title }}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $comment->id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $comment->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $comment->email }}</td>
                            </tr>
                            <tr>
                                <td>Comment</td>
                                <td>{{ $comment->body }}</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>{{ $comment->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $comment->status == 1 ? 'Publish' : 'Hide' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection