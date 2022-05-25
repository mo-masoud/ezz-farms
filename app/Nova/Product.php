<?php
namespace App\Nova;

use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

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
    public static $title = 'name_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name_en',
        'name_ar'
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
            ID::make(__('ID'), 'id')->sortable(),

            Text::make(__('English name'), 'name_en')
            ->sortable()
            ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make(__('Arabic name'), 'name_ar')
                ->hideFromIndex()
                ->rules('required', 'string', 'min:3', 'max:100'),

            BelongsTo::make(__('Category'), 'category', Category::class)
                ->sortable()
                ->rules('required', 'numeric', 'exists:categories,id'),

            BelongsTo::make(__('Animal Kind'), 'animalKind', AnimalKind::class)
                ->sortable()
                ->rules('required', 'numeric', 'exists:animal_kinds,id'),

            Number::make(__('Starting Price'), 'starting_price')
                ->sortable()
                ->min(0)
                ->rules('required', 'numeric', 'min:0'),

            Number::make(__('Maximum Price'), 'maximum_price')
                ->sortable()
                ->min(0)
                ->rules('required', 'numeric', 'min:0'),

            Textarea::make(__('English brief'), 'brief_en')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'min:3', 'max:200'),

            Textarea::make(__('Arabic brief'), 'brief_ar')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'min:3', 'max:200'),

            Textarea::make(__('English description'), 'description_en')
            ->hideFromIndex()
            ->rules('nullable', 'string', 'min:3', 'max:200'),

            Textarea::make(__('Arabic description'), 'description_ar')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'min:3', 'max:200'),

            Image::make(__('Image'), 'image')
                ->rules('required', 'image', 'max:5120'),

            BelongsToMany::make(__('Weights'), 'weights', Weight::class),

            BelongsToMany::make(__('Cuts'), 'cuts', Cut::class),

            BelongsToMany::make(__('Packaging'), 'packagings', Packaging::class),
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
