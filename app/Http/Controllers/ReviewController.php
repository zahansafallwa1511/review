<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ReviewController extends Controller
{
    public function show($id){
        return Inertia::render('Review');
    }
}
