<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);

        $reviews = Review::whereHas('entity', fn ($q) => $q->where('category_id', $id))
            ->latest()
            ->paginate(5);

        return Inertia::render('Category', [
            'category' => $category,
            'reviews' => $reviews
        ]);
    }
}
