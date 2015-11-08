<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \App\User::truncate();
        \App\Bookmark::truncate();

        $this->call(BookmarkTableSeeder::class);
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
