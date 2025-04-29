<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
      Blogs::create($request->only(['title', 'description']));

        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->update($request->only(['title', 'description']));
        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
