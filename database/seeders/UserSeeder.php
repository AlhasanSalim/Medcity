<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Alhasan Saleem";
        $user->email = "alhasan1997@hotmail.com";
        $user->password = Hash::make("password");
        $user->phone = "01116554246";
        $user->save();

        User::create([
            'name' => 'Helper',
            'email' => 'alhasanshakra@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '01116554247'
        ]);

        DB::table('users')->insert([
            'name' => 'System Admin',
            'email' => 'alhasanshakra@yahoo.com',
            'password' => Hash::make('password'),
            'phone' => '01116554248'
        ]);
    }
}
