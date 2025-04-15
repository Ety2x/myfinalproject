<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show()
    {
        $data = [
            'title' => 'My First Blog',
            'body' => 'This is a sample blog post content.'
        ];

        return view('blog', $data);
    }
}
