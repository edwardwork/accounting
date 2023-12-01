<?php

namespace App\Models;

use App\Enums\OurServicePageMediaCollectionEnum;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class OurService extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function __construct(array $attributes = [])
    {
        $this->setAttribute('content', $this->getDefaultJsonValues());

        parent::__construct($attributes);
    }

    protected $casts = [
        'content' => 'array',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('main');
        $this->addMediaConversion('background');
    }

    protected function getDefaultJsonValues(): array
    {
        return [
            'content' => '',
        ];
    }

    public function getMainUrl(): string
    {
        return $this->getFirstMedia(OurServicePageMediaCollectionEnum::MAIN->value)?->getUrl();
    }

    public function getBackgroundUrl(): string
    {
        return $this->getFirstMedia(OurServicePageMediaCollectionEnum::BACKGROUND->value)?->getUrl();
    }
}
