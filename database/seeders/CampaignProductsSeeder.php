<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campaign_products')
            ->insert([
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()->addDays(2),
                    'product_id' => 2,
                    'campaign_id' => 1,
                ],

                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()->addDays(2),
                    'product_id' => 3,
                    'campaign_id' => 1,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()->addDays(2),
                    'product_id' => 4,
                    'campaign_id' => 2,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()->addDays(2),
                    'product_id' => 5,
                    'campaign_id' => 1,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()->addDays(2),
                    'product_id' => 6,
                    'campaign_id' => 1,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()->addDays(2),
                    'product_id' => 8,
                    'campaign_id' => 3,
                ],

                
            ]);
    }
}
