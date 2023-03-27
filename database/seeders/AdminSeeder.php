<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = array(
            [
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
            ]
        );
        foreach ($data as $d) {
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'password' => $d['password'],
            ]);
        }
    }
}
