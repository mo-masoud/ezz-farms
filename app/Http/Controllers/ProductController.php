<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = Product::with('category', 'animalKind', 'cuts', 'weights', 'packagings')
            ->findOrFail($id);

        $lang = app()->getLocale();

        $cuts = [];
        foreach ($data->cuts as $cut) {
            $cuts[] = [
                'id' => $cut->id,
                'title' => $cut['name_' . $lang],
            ];
        }

        $weights = [];
        foreach ($data->weights as $item) {
            $weights[] = [
                'id' => $item->id,
                'title' => $item['name_' . $lang],
            ];
        }

        $packagings = [];
        foreach ($data->packagings as $item) {
            $packagings[] = [
                'id' => $item->id,
                'title' => $item['name_' . $lang],
            ];
        }

        $product = [
            'id' => $data->id,
            'name' => $data['name_' . $lang],
            'brief' => $data['brief_' . $lang],
            'description' => $data['description_' . $lang],
            'starting_price' => $data['starting_price'],
            'maximum_price' => $data['maximum_price'],
            'image' => url('storage/' . $data['image']),
            'category' => [
                'id' => $data->category_id,
                'title' => $data->category['title_' . $lang],
                'image' => url('storage/' . $data->category['image']),
            ],
            'kind' => [
                'id' => $data->animal_kind_id,
                'title' => $data->animalKind['title_' . $lang],
            ],
            'cuts' => $cuts,
            'weights' => $weights,
            'packagings' => $packagings,
        ];

        return Inertia::render('ShowProduct', compact('product'));
    }

    public function index(Request $request)
    {
        $lang = app()->getLocale();

        $sortBy = $request['sort_by'];

        $products = Product::query();

        $products->select('*', "name_$lang as title")
            ->when($request['category_id'], fn($q) => $q->where('category_id', $request['category_id']))
            ->when($request['price_range'], function ($q) use ($request) {
                $price = explode('-', $request['price_range']);
                $q->where('starting_price', '>=', $price[0])
                    ->where('maximum_price', '<=', $price[1]);
            });


        switch ($sortBy) {
            case 'low_high':
                $products->orderBy('starting_price');
                break;
            case 'high_low':
                $products->orderBy('starting_price', 'desc');
                break;
            default:
                $products->orderBy('id', 'desc');
                break;
        }

        $products = $products->get();

        $categories = Category::select(
            '*', "title_$lang as title", "subtitle_$lang as subtitle"
        )->get();

        $minPrice = Product::min('starting_price');
        $maxPrice = Product::max('maximum_price');


        return Inertia::render('Products', compact(
            'products',
            'categories',
            'minPrice',
            'maxPrice'
        ));
    }
}
