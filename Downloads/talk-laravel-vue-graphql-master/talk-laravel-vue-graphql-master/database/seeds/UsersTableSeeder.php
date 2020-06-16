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
            'email' => 'contact@alefesouza.com',
            'saldo' => "1"
        ]);

        User::create([
            'company_id' => 2,
            'name' => 'Reinaldo Silotto',
            'email' => 'reinaldo.silotto@imasters.com.br',
            'saldo' => "2"
        ]);

        User::create([
            'company_id' => 2,
            'name' => 'Rodrigo Cardoso',
            'email' => 'rodrigo.cardoso@imasters.com.br',
            'saldo' => "3"
        ]);
    }
}
