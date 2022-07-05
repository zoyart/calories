<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateBasicData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::create([
            'name' => 'Artur',
            'email' => 'stistv9@mail.ru',
            'password' => Hash::make(123123123),
        ]);
    }
}
