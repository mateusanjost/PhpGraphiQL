<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'company_id' => 1,
            'name' => 'Alefe Souza',
            'saldo' => 'contact@alefesouza.com',
        ]);

        User::create([
            'company_id' => 2,
            'name' => 'Reinaldo Silotto',
            'saldo' => 'reinaldo.silotto@imasters.com.br',
        ]);

        User::create([
            'company_id' => 2,
            'name' => 'Rodrigo Cardoso',
            'saldo' => 'rodrigo.cardoso@imasters.com.br',
        ]);
    }
}
