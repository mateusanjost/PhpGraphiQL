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
            'name' => 'Amateus1',
            'email' => 'contact@gmaeateus.com',
            'saldo' => "1"
        ]);

        User::create([
            'company_id' => 2,
            'name' => 'aMateus2',
            'email' => 'amateus2@gmail.com',
            'saldo' => "2"
        ]);

        User::create([
            'company_id' => 2,
            'name' => 'aMateus3',
            'email' => 'aMateus3@gmail.com',
            'saldo' => "3"
        ]);
    }
}
