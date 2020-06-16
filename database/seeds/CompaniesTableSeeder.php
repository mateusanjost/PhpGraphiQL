<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'id' => 1,
            'name' => 'Mateus 2',
        ]);

        Company::create([
            'id' => 2,
            'name' => 'Mateus 1',
        ]);
    }
}
