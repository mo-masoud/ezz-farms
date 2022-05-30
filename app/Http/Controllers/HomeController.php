<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\WhyChooseUs;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $lang = app()->getLocale();

        $sliders = Slider::select('*', "title_$lang as title", "subtitle_$lang as subtitle")
            ->get();

        $whyChooseUs = WhyChooseUs::select('*', "title_$lang as title", "body_$lang as body")
            ->get();

        $aboutUs = AboutUs::select(
            '*', "title_$lang as title", "small_brief_$lang as brief"
        )->get();

        $categories = Category::select(
            '*', "title_$lang as title", "subtitle_$lang as subtitle"
        )->get();

        $products = Product::select(
            '*', "name_$lang as title"
        )->inRandomOrder()->limit(4)->get();

        return Inertia::render('Home', compact(
            'sliders',
            'whyChooseUs',
            'aboutUs',
            'categories',
            'products'
        ));
    }

    public function about(int $id): Response
    {
        $aboutUs = AboutUs::findOrFail($id);
        return Inertia::render('About', compact('aboutUs'));
    }
}
