<?php

namespace App\Nova;

use App\Models\OurService;
use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Text;

class OurServiceResource extends Resource
{
    public static $model = OurService::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'first_section_subtitle'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('First Section Subtitle')
                ->sortable()
                ->rules('required'),

            Medialibrary::make('Main Image', 'main')
                ->single(),

            Medialibrary::make('Background Image', 'background')
                ->single(),

            KeyValue::make('Content')
                ->disableEditingKeys()
                ->disableAddingRows()
                ->disableDeletingRows()
                ->rules('json'),
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
