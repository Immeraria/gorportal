<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ApplicationController extends Controller
{

    public function index()
    {
        return view('applications.index', ['applications' => Application::all()]);
    }

    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
      $data = $request->all();
      $filename = $data['image']->getClientOriginalName();

      $data['image']->move(Storage::path("/public/image/application/"),$filename);

      $data['image'] = $filename;
      Application::create($data);

      return redirect()->route('applications.index');

    }

    public function show($id)
    {
        return view('applications.show', ['application' => Application::find($id)]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
