<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'create:admin';

    public function handle()
    {
        if ($hasAdmin = User::where('name', 'admin')->first()) {

            $this->error('Адміністратор вже існує.');
            $this->info('Токен: '.$hasAdmin->plainTextToken);
        } else {

            $user = User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('!komisar.Admin!Max'),
            ]);

            $user->save();

            $created = $user->createToken('admin-access');

            $this->info('Адміністратор успішно створений.');
            $this->info('Токен: '.$created->plainTextToken);
        }
    }
}
