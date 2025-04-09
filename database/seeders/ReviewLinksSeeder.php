<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('review_links')->insert([
            'link' => 'https://www.google.com/search?client=firefox-b-d&sca_esv=ad3da75f3216c388&sxsrf=AHTn8zp-3EcQ8n3mU50_bxD9MZiy60KnkA:1744189148745&si=APYL9bs7Hg2KMLB-4tSoTdxuOx8BdRvHbByC_AuVpNyh0x2KzZeJh-XQn_yiGTg5MG2GHPabwU5ho8qZCoxgDRpxMwhAvBHg2CDb0Dt6v5iJD9yGODpTSzmffLpV8SMwlme7lL71EjmE9XID2E5QkkdwHiPXFoU5ZQ==&q=%C4%B0nnab+Business+School+%D0%9E%D1%82%D0%B7%D1%8B%D0%B2%D1%8B&sa=X&ved=2ahUKEwiw_Yb1ysqMAxV3SfEDHdi8C4kQ0bkNegQIRRAE&biw=1536&bih=662&dpr=1.25',
            'status' => 1,
            'order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
