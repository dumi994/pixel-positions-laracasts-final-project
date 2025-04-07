<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //$tags = Tag::where('title', 'LIKE', '%' . request('q') . '%')->get();

        return view('results', ['jobs' => $tag->jobs]);
    }
}
