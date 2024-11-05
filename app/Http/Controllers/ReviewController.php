<?php

namespace App\Http\Controllers;

use App\Http\Services\ReviewServices;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = (new ReviewServices)->query()->paginate(12);
        return view('pages.reviews.index', compact('reviews'));
    }

    public function show($id = null)
    {
        $review = (new ReviewServices)->find($id);
        return view('pages.reviews.one', compact('review'));
    }
}
