<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = request('search');
        $news = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->paginate(200);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {   
        $news = News::latest()->take(6)->get();
        $new_details = News::findOrFail($id);
        $new_details->increment('viewer');

        return view('news.show', compact('new_details', 'news'));
    }
}
