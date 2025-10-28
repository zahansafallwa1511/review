<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Review;

class ReviewController extends Controller
{
    public function show($id)
    {
        $review = Review::with(['entity', 'reviewer', 'entity.category', 'entity.tags'])
            ->where('entity_id' , $id)->first();

        return Inertia::render('Review', [
            'review' => $review
        ]);
    }
}
