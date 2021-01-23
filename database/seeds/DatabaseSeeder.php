<?php

use App\sysuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // mengirim data ke dalam databases 
        sysuser::insert([
            'uname' => 'admin',
            'namalengkap' => 'Administrator',
            'email' => 'admin@gmail.com',
            'upass' => sha1('admin')
        ]);
        // $this->call(UserSeeder::class);
    }
}
