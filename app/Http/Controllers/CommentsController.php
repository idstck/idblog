<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.comments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dataTable()
    {
        $comments = Comment::query();
        return DataTables::of($comments)
                ->addColumn('comment', function ($comments) {
                    return substr($comments->body, 0,30);
                })
                ->addColumn('post', function ($comments) {
                    return substr($comments->post->title, 0,30);
                })
                ->addColumn('status', function ($comments) {
                    return $comments->status == 1 ? 'Publish' : 'Hide';
                })
                ->addColumn('action', function ($comments) {
                    return view('layouts.admin.partials._action', [
                        'model' => $comments,
                        'show_url' => route('admin.comments.show', $comments->id),
                        'edit_url' => route('admin.comments.edit', $comments->id),
                        'delete_url' => route('admin.comments.destroy', $comments->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}
