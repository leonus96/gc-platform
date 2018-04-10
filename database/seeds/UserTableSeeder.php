<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =    array(
            ["name" => "Joseph", "email" => "ti@grupocar.pe", "password" => Hash::make('grupoc4r')]
        );

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
