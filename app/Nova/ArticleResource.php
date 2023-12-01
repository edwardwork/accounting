<?php

namespace App\Nova;

use App\Models\Article;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class ArticleResource extends Resource
{
    public static $model = Article::class;

    public static $title = 'title';

    public static $search = [
        'id',
        'slug',
        'content'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Slug')
                ->sortable()
                ->rules('required'),

            Text::make('Title')
                ->sortable()
                ->rules('nullable'),

            Text::make('Sub Title')
                ->sortable()
                ->rules('nullable'),

            Text::make('Content')
                ->sortable()
                ->rules('required'),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
