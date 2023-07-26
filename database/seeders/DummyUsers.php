<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Email;

class DummyUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'fandi',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'perdana',
                'email'=>'perdana@gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('111')
            ],
            [
                'name'=>'asep',
                'email'=>'asep@gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('222')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
