<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use NumaxLab\NovaCKEditor5Classic\CKEditor5Classic;

class AboutUs extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\AboutUs::class;

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
    public static $title = 'title_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'year',
        'title_en',
        'title_ar'
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

            Select::make(__('Year'), 'year')
                ->sortable()
                ->options(array_combine(range(date("Y"), 1900), range(date("Y"), 1900)))
                ->rules('required', 'digits:4', 'integer', 'min:1900', 'max:' . (((int)date('Y')) + 1)),

            Text::make(__('English title'), 'title_en')
                ->sortable()
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make(__('Arabic title'), 'title_ar')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'string', 'min:3', 'max:100'),

            Textarea::make(__('English small brief'), 'small_brief_en')
                ->sortable()
                ->rules('required', 'string', 'min:3', 'max:220'),

            Textarea::make(__('Arabic small brief'), 'small_brief_ar')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'string', 'min:3', 'max:220'),

            CKEditor5Classic::make(__('English body'), 'body_en')
                ->hideFromIndex()
                ->rules('required', 'string')
                ->withFiles('public'),

            CKEditor5Classic::make(__('Arabic body'), 'body_ar')
                ->hideFromIndex()
                ->rules('required', 'string')
                ->withFiles('public'),
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
