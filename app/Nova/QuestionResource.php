<?php

namespace App\Nova;

use App\Models\Question;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class QuestionResource extends Resource
{
    public static $model = Question::class;

    public static $title = 'name';

    public static $search = [
        'id',
        'email',
        'name',
        'question'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254'),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Question')
                ->sortable()
                ->rules('required'),

            Boolean::make('Is read')
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

    public static function label(): string
    {
        return 'Questions';
    }
}
