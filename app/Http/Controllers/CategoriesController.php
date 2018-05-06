<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|unique:categories'
        ]);
        $request['slug'] = str_slug($request->get('title'), '-');

        Category::create($request->all());

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
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
        $this->validate($request, [
            'title' => 'required|string|min:3|unique:categories,title,' . $id
        ]);
        $request['slug'] = str_slug($request->get('title'), '-');

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin.categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Category::destroy($id)) return redirect()->back();
        return redirect()->route('admin.categories.index');
    }

    public function dataTable()
    {
        $categories = Category::query();

        return DataTables::of($categories)
            ->addColumn('action', function ($categories) {
                return view('layouts.admin.partials._action', [
                    'model' => $categories,
                    'show_url' => route('admin.categories.show', $categories->id),
                    'edit_url' => route('admin.categories.edit', $categories->id),
                    'delete_url' => route('admin.categories.destroy', $categories->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
