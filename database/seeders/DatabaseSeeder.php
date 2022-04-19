<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $users = Db::select('select * from produtos');

        $html =  '<h1>Lista de usuários</h1>';
        $html .= '<table>';

        foreach($users as $user){
                
        }

        $html .= 

        User::create([
            'user'        => 'administrator', 
            'registry'    => 'Registro',
            'email'       => 'amdin@email.com',
            'password'    => 'bcrypt',
            'status'      => 'ON',
        ]);
    }
}
