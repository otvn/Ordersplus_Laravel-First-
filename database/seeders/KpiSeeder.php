<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kpi;

class KpiSeeder extends Seeder
{
    public function run()
    {
        // Update or create the KPI data
        Kpi::updateOrCreate(
            ['name' => 'Today\'s Revenue'], 
            ['value' => 172.56] 
        );

        Kpi::updateOrCreate(
            ['name' => 'Today\'s Orders'],
            ['value' => 45]
        );

        Kpi::updateOrCreate(
            ['name' => 'Avg. Expense'],
            ['value' => 556]
        );

        Kpi::updateOrCreate(
            ['name' => 'Avg. Revenue'],
            ['value' => 227]
        );
    }
}
