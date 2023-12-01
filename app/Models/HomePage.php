<?php

namespace App\Models;

use App\Enums\HomePageMediaCollectionEnum;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HomePage extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function __construct(array $attributes = [])
    {
        $this->setAttribute('service_first_block', $this->getDefaultJsonValues());
        $this->setAttribute('service_second_block', $this->getDefaultJsonValues());
        $this->setAttribute('service_third_block', $this->getDefaultJsonValues());
        $this->setAttribute('cloud_based_blocks', $this->getDefaultCloudBasedBlocksValues());

        parent::__construct($attributes);
    }

    protected $casts = [
        'service_first_block' => 'array',
        'service_second_block' => 'array',
        'service_third_block' => 'array',
        'cloud_based_blocks' => 'array',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion(HomePageMediaCollectionEnum::LOGO->value);
        $this->addMediaConversion(HomePageMediaCollectionEnum::SERVICE_BLOCK_IMAGE->value);
        $this->addMediaConversion(HomePageMediaCollectionEnum::CLOUD_BASED_BLOCK_IMAGE->value);
    }

    protected function getDefaultJsonValues(): array
    {
        return [
            'title' => '',
            'content' => '',
        ];
    }

    protected function getDefaultCloudBasedBlocksValues(): array
    {
        return [
            'first_block' => '',
            'second_block' => '',
            'third_block' => '',
            'fourth_block' => '',
            'fifth_block' => '',
            'sixth_block' => '',
            'seventh_block' => '',
            'eighth_block' => '',
            'ninth_block' => '',
            'tenth_block' => '',
        ];
    }

    public function getLogoUrl(): string
    {
        return $this->getFirstMedia(HomePageMediaCollectionEnum::LOGO->value)?->getUrl();
    }

    public function getServiceBlockImageUrl(): string
    {
        return $this->getFirstMedia(HomePageMediaCollectionEnum::SERVICE_BLOCK_IMAGE->value)?->getUrl();
    }

    public function getCloudBasedBlockImageUrl(): string
    {
        return $this->getFirstMedia(HomePageMediaCollectionEnum::CLOUD_BASED_BLOCK_IMAGE->value)?->getUrl();
    }
}
