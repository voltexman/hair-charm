<?php

namespace Database\Seeders;

use App\Enums\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $staticPages = [
            ['name' => 'Home', 'meta_title' => 'Main Page'],
            ['name' => 'About Us', 'meta_title' => 'About Us'],
            ['name' => 'Gallery', 'meta_title' => 'Gallery'],
        ];

        foreach ($staticPages as $page) {
            DB::table('pages')->updateOrInsert(
                ['name' => $page['name']],
                ['meta_title' => $page['meta_title']]
            );
        }

        foreach (ProductCategory::cases() as $category) {
            DB::table('pages')->updateOrInsert(
                ['name' => $category->getLabel()],
                [
                    'meta_title' => $category->getLabel(),
                    'meta_description' => $category->description(),
                    'robots' => 'index, follow',
                ]
            );
        }
    }
}
