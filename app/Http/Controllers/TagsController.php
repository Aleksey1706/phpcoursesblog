<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show()
    {
        $tags = Tag::all()->sortBy('name');
        return view('tags.allTags', ['tags' => $tags]);
    }
}