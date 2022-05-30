<?php

namespace App\Http\Middleware;

use App\Models\Config;
use App\Models\Text;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param Request $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param Request $request
     * @return array
     */
    public function share(Request $request): array
    {
        $lang = app()->getLocale();
        $texts = [];
        foreach (Text::select('*', "text_$lang as text")
                     ->get() as $text) {
            $texts[$text->key] = $text->text;
        }

        $configs = [];

        foreach (Config::select('*', "value_$lang as value")->get() as $item) {
            $configs[$item->key] = $item->type === 'image' ? url('/storage/' . $item->value) : $item->value;
        }

        return array_merge(parent::share($request), [
            'locale' => $lang,
            'image_url' => url('/storage') . '/',
            'texts' => $texts,
            'configs' => $configs,
        ]);
    }
}
