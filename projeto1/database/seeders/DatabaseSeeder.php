<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.com',
        ]);
        
        DB::table('categories')->insert([
            [
                'name' => 'Cashback'
            ],
            [
                'name' => 'Transporte'
            ],
            [
                'name' => 'Seguros'
            ],
            [
                'name' => 'Vendas'
            ],
            [
                'name' => 'Impostos, juros e multa'
            ]
        ]);
    }
}
