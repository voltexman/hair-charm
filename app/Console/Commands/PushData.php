<?php

namespace App\Console\Commands;

use App\Enums\ProductCategory;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

#[Signature('push:data')]
class PushData extends Command
{
    public function handle()
    {
        DB::table('settings')->updateOrInsert(
            ['email' => 'info@slavenahair.com'],
            [
                'phone' => '+380737857777',
                'instagram' => null,
                'facebook' => null,
                'whatsapp' => null,
            ]
        );

        $staticPages = [
            ['name' => 'Main Page', 'slug' => 'main'],
            ['name' => 'About', 'slug' => 'about'],
            ['name' => 'Products', 'slug' => 'products'],
            ['name' => 'Wholesale', 'slug' => 'wholesale'],
            ['name' => 'Delivery', 'slug' => 'delivery'],
            ['name' => 'Photos', 'slug' => 'photos'],
            ['name' => 'Contacts', 'slug' => 'contacts'],
        ];

        foreach ($staticPages as $page) {
            DB::table('pages')->updateOrInsert(
                ['slug' => $page['slug']],
                [
                    'name' => $page['name'],
                    'meta_title' => '',
                    'meta_description' => '',
                    'robots' => 'index, follow',
                ]
            );
        }

        foreach (ProductCategory::cases() as $category) {
            DB::table('pages')->updateOrInsert(
                ['slug' => $category->value],
                [
                    'name' => $category->getLabel(),
                    'meta_title' => $category->getLabel(),
                    'meta_description' => $category->description(),
                    'robots' => 'index, follow',
                ]
            );
        }

        Cache::forget('settings');
        $this->info('Дані успішно додані');
    }
}
