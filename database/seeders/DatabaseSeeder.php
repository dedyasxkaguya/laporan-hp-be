<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $datas = [
            [
                'username' => 'admin',
                'password' => 1234,
            ],
            [
                'username' => 'dedyas',
                'password' => 'dedyganteng1234',
            ],
        ];
        foreach($datas as $data){
            DB::table('users')->insert([
                "username"=>$data['username'],
                "password"=>bcrypt($data['password']),
                "created_at"=>now(),
                "updated_at"=>now()
            ]);
        }
        $this->call(TeacherSeeder::class);
        $this->call(StudentClassSeeder::class);
    }
}
