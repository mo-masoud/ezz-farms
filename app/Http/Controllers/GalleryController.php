<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Inertia\Inertia;
use Inertia\Response;

class GalleryController extends Controller
{
    public function index(): Response
    {
        $galleries = Gallery::orderBy('id', 'desc')
            ->get()
            ->transform(fn($g) => url('storage/' . $g->image));
        return Inertia::render('Galleries', compact('galleries'));
    }
}
