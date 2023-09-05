<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->category;
        if ($category_id == NULL) {
            $first_category = Category::first();
        } else {
            $first_category = Category::findOrFail($category_id);
        }

        return view('activities.index', compact('first_category'));
    }
}
