<?php

namespace Database\Seeders;

use App\Enums\HomePageMediaCollectionEnum;
use App\Enums\OurServicePageMediaCollectionEnum;
use App\Models\OurService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class OurServicePageSeeder extends Seeder
{
    public function run(): void
    {
        if (OurService::query()->count()) {
            return;
        }

        $model = new OurService();
        $model->first_section_subtitle = 'Since 2010';
        $model->content = [
            'content' => '• We provide a full spectrum of accounting services to small and medium sized companies in and around the GTA.
• We get involved in business organization and set up (incorporation, business name registration and tax planning and filing) with all sorts of entities - corporations, personal, charity ( not for profit ).
• We have a team of dedicated bookkeepers and professionals accountants to take care of all your accounting needs.
• Our clients operate in the following sectors: IT, real estate investment and property management, repairs and maintenance, construction, logistics, early childhood education and more.
• Our services provide a snapshot of a company’s financial health.
• Our team prepares tax returns, ensuring that they comply with tax laws and regulations.
• We can also offer advice to minimize tax liabilities
• We can help you outsource your payroll functions to a 3rd party payroll processor. This includes calculating employee salaries, deducting taxes and benefits ensuring compliance with payroll regulations. As well as paying employees electronically.
• We are committed to providing utmost client service and make sure all your inquiries are addressed in a timely manner.'
        ];

        $model->save();

        try {
            $model
                ->addMedia(new UploadedFile(public_path('images/accounting-service-1.jpg'), 'accounting-service-1.jpg'))
                ->preservingOriginal()
                ->toMediaCollection(OurServicePageMediaCollectionEnum::MAIN->value);
        } catch (FileDoesNotExist|FileIsTooBig $e) {
            Log::error('UploadingMedia: ' . $e->getMessage());
        }

        try {
            $model
                ->addMedia(new UploadedFile(public_path('images/blackboard-1.jpg'), 'blackboard-1.jpg'))
                ->preservingOriginal()
                ->toMediaCollection(OurServicePageMediaCollectionEnum::BACKGROUND->value);
        } catch (FileDoesNotExist|FileIsTooBig $e) {
            Log::error('UploadingMedia: ' . $e->getMessage());
        }
    }
}
