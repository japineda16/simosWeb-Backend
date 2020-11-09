<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Jose Pineda',
                'password' => bcrypt('4978430xd'),
                'email' => 'ja.pinedab1610@gmail.com',
            ],
            [
                'name' => 'Simus-val',
                'password' => bcrypt('29gui810T'),
                'email' => 'principaltzm@gmail.com',
            ],
            [
                'name' => 'Julio Calvache',
                'password' => bcrypt('E81703043'),
                'email' => 'julio.calvache@tuzonamarket.com',
            ],
            [
                'name' => 'Sergio Guillen',
                'password' => bcrypt('1234'),
                'email' => 'Sergioguillen9@gmail.com',
            ],
        ];
        DB::table('users')->insert($users);
    }
}
