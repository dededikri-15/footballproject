<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'News created successfully.');
    }
}
