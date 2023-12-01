<?php

namespace Database\Seeders;

use App\Enums\HomePageMediaCollectionEnum;
use App\Models\HomePage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class HomePageSeeder extends Seeder
{
    public function run(): void
    {
        if (HomePage::query()->count()) {
            return;
        }

        $model = new HomePage();

        $model->company_title = 'ACCULEDGERS PROFESSIONAL CORP';
        $model->company_subtitle = 'YOUR LEDGERS, OUR EXPERTISE SINCE 2010';
        $model->service_block_title = 'Service packages';
        $model->service_first_block = [
            'title' => 'Business organization',
            'content' => 'Legal structure selection.
Business registration. Incorporation/ master business license.
CRA business number registration.
Tax planning.',
        ];
        $model->service_second_block = [
            'title' => 'Bookkeeping',
            'content' => 'In-house set up, software selection, chart of accounts creation.
Fully outsourced bookkeeping solutions.
Transaction processing.
Training.',
        ];
        $model->service_third_block = [
            'title' => 'Tax filing services',
            'content' => 'Corporate (T2) / Personal (T1) Tax return e-filing.
HST.
Payroll Taxes (T4)
Investment Income Returns (T5).
CRA representation.',
        ];
        $model->cloud_based_block_title = 'We provide cloud - based bookkeeping';

        $model->cloud_based_blocks = [
            'first_block' => 'Cloud-based bookkeeping allows you to access your financial data from anywhere with an internet connection.',
            'second_block' => 'With cloud-based bookkeeping, you can have up-to-date financial information at your fingertips.',
            'third_block' => 'Cloud-based bookkeeping services can automatically import and categorize transactions, saving time and reducing the risk of errors.',
            'fourth_block' => 'You can often reduce hardware and software costs because cloud-based bookkeeping services are hosted on the provider\'s servers.',
            'fifth_block' => 'You can add or remove users, features, and services as your business grows or changes.',
            'sixth_block' => 'Reputable cloud-based bookkeeping services often provide robust security measures, including data encryption, regular backups, and redundancy.',
            'seventh_block' => 'Cloud-based bookkeeping services offer integration with other business applications, such as invoicing, payroll, and tax software, streamlining your financial processes.',
            'eighth_block' => 'Cloud-based solutions often come with powerful reporting and analytics tools, allowing you to gain deeper insights into your business\'s financial health.',
            'ninth_block' => 'Cloud-based solutions are generally more energy-efficient and environmentally friendly than maintaining on-premises servers and hardware.',
            'tenth_block' => 'Cloud-based bookkeeping services can simplify your financial management, improve collaboration, enhance data security, and save you time and money, making them a compelling choice for many business.',
        ];

        $model->save();

        try {
            $model
                ->addMedia(new UploadedFile(public_path('images/logo.png'), 'logo.png'))
                ->preservingOriginal()
                ->toMediaCollection(HomePageMediaCollectionEnum::LOGO->value);
        } catch (FileDoesNotExist|FileIsTooBig $e) {
            Log::error('UploadingMedia: ' . $e->getMessage());
        }

        try {
            $model
                ->addMedia(new UploadedFile(public_path('images/building-resize.jpeg'), 'building-resize.jpeg'))
                ->preservingOriginal()
                ->toMediaCollection(HomePageMediaCollectionEnum::SERVICE_BLOCK_IMAGE->value);
        } catch (FileDoesNotExist|FileIsTooBig $e) {
            Log::error('UploadingMedia: ' . $e->getMessage());
        }

        try {
            $model
                ->addMedia(new UploadedFile(public_path('images/network-concept-1.jpg'), 'network-concept-1.jpg'))
                ->preservingOriginal()
                ->toMediaCollection(HomePageMediaCollectionEnum::CLOUD_BASED_BLOCK_IMAGE->value);
        } catch (FileDoesNotExist|FileIsTooBig $e) {
            Log::error('UploadingMedia: ' . $e->getMessage());
        }
    }
}
