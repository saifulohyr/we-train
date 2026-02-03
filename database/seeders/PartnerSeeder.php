<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create(['name' => 'Stanford', 'logo' => 'images/partners/stanford.png']);
        Partner::create(['name' => 'Lionbridge', 'logo' => 'images/partners/lionbridge.png']);
        Partner::create(['name' => 'Upwork', 'logo' => 'images/partners/upwork.png']);
        Partner::create(['name' => 'Appen', 'logo' => 'images/partners/appen.png']);
    }
}
