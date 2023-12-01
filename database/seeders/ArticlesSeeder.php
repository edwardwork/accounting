<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\OurService;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    public function run(): void
    {
        if (Article::query()->count() === 3) {
            return;
        }

        $model = new Article();
        $model->title = 'Tax-saving tips';
        $model->sub_title = 'Incorporate your business.';
        $model->content = '
        Incorporation is one of the most effective tax-savings tips for small businesses, if you can retain the profits in your corporation. It could produce a sizable tax deferral by qualifying for the lower small business tax rate for active business income. The deferral benefit is available for as long as the profits stay in the company.

The longer the profits are left in the company the larger the tax deferral. Investment and rental income are taxed at the genera tax rate.

Shares of Canadian controlled private corporations may be eligible for the lifetime capital gains exemption when sold.

However, if your corporation generates a loss, incorporation may not be the best option, as losses would be trapped in the corporation and not available as tax offsets for personal use.

Other potential advantages of incorporation include having family members own shares (so as to have access to multiple capital gains exemptions) and paying out dividends to actively participating family members who are taxed at a lower rate.';

        $model->save();
    }
}
