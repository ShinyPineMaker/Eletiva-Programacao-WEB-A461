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

        DB::table('income_sources')->insert([
            'description' => 'salário',
            'monthly_income' => 1000,
            'annual_income' => 12000
        ]);
    }
}
