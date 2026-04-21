<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
        $author = Author::create($request->all());

        return redirect('/authors')->with('success', 'Author created');
    }
}
