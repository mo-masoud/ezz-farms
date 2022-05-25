<?php

namespace App\Nova;

use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;

class Config extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Config::class;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Content';

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
    public static $title = 'label';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'key',
        'label',
        'value_en',
        'value_ar',
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

            Text::make(__('Label'), 'label')
                ->hideWhenUpdating()
                ->sortable(),

            Text::make(__('type'), 'type')
                ->hideFromIndex()
                ->readonly(),

            NovaDependencyContainer::make([
                Text::make(__('English value'), 'value_en')
                    ->rules('required', 'string', 'min:3', 'max:250'),

                Text::make(__('Arabic value'), 'value_ar')
                    ->rules('required', 'string', 'min:3', 'max:250'),
            ])->dependsOn('type', 'text'),

            NovaDependencyContainer::make([
                Image::make(__('English image'), 'value_en')
                    ->rules('required', 'image', 'max:5120'),

                Image::make(__('Arabic image'), 'value_ar')
                    ->rules('required', 'image', 'max:5120'),
            ])->dependsOn('type', 'image'),
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

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        $query->when(empty($request->get('orderBy')), function($q) {
            $q->getQuery()->orders = [];

            return $q->orderBy('id', 'asc');
        });
    }
}
