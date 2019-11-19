<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adm')->insert([
            'name' => 'teste',
            'email' => 'teste1@gmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
