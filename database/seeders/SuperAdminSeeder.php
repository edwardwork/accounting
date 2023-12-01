<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::query()
            ->firstOrCreate(
                [
                    'email' => 'superadmin@gmail.com'
                ],
                [
                    'name' => 'Super Admin',
                    'password' => bcrypt('12345678')
                ]
            );
    }
}
