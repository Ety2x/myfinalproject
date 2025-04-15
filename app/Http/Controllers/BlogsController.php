<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    //
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
           $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ]);
    
            Blogs::create($validated);
    
            return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
        }
}
