<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tagline' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);

        Setting::updateOrCreate([
            'id' => 1
        ], $request->all());

        return redirect()->route('admin.settings.index');
    }
}
