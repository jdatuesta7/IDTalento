<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users = [ //id => data
            1 => ["Persona", "persona@mail.com", "secret", "/storage/imagenes/avatarDefault.jpg"],
            2 => ["Empresa", "empresa@mail.com", "secret", "/storage/imagenes/avatarDefault.jpg"]
        ];

        foreach ($Users as $id => $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => Hash::make($user[2]),
                'avatar' => $user[3]
            ]);
        }

    }
}
