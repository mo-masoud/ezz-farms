<?php
namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;

class Category extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Category::class;

    /**
    * The logical group associated with the resource.
    *
    * @var string
    */
    public static $group = 'Products';

    /**
     * The pagination per-page options configured for this resource.
     *
     * @return array
     */
    public static $perPageOptions = [10, 50, 100, 150];

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title_en',
        'title_ar',
        'subtitle_en',
        'subtitle_ar',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            Text::make(__('English title'), 'title_en')
                ->sortable()
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make(__('Arabic title'), 'title_ar')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make(__('English subtitle'), 'subtitle_en')
                ->sortable()
                ->rules('nullable', 'string', 'min:3', 'max:100'),

            Text::make(__('Arabic subtitle'), 'subtitle_ar')
                ->sortable()
                ->hideFromIndex()
                ->rules('nullable', 'string', 'min:3', 'max:100'),

            Image::make(__('Image'), 'image')
                ->rules('required', 'image', 'max:5120')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
