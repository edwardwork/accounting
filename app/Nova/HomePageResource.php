<?php

namespace App\Nova;

use App\Models\HomePage;
use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Text;
use Spatie\MediaLibrary\HasMedia;

class HomePageResource extends Resource
{
    public static $model = HomePage::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'company_title',
        'company_subtitle',
        'service_block_title',
        'cloud_based_block_title',
        'cloud_based_blocks'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Medialibrary::make('Logo', 'logo')
                ->single(),

            Text::make('Company Title')
                ->sortable()
                ->rules('required'),

            Text::make('Company Subtitle')
                ->sortable()
                ->rules('required'),

            Text::make('Service Block Title')
                ->sortable()
                ->rules('required'),

            Medialibrary::make('Service Block Image', 'service_block_image')
                ->single(),

            KeyValue::make('Service First Block')
                ->disableEditingKeys()
                ->disableAddingRows()
                ->disableDeletingRows()
                ->rules('json'),

            KeyValue::make('Service Second Block')
                ->disableEditingKeys()
                ->disableAddingRows()
                ->disableDeletingRows()
                ->rules('json'),

            KeyValue::make('Service Third Block')
                ->disableEditingKeys()
                ->disableAddingRows()
                ->disableDeletingRows()
                ->rules('json'),

            Text::make('Cloud Based Block Title')
                ->sortable()
                ->rules('required'),

            Medialibrary::make('Cloud Based Block Image', 'cloud_based_block_image')
                ->single(),

            KeyValue::make('Cloud Based Blocks')
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
