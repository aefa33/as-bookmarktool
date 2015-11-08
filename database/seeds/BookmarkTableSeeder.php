<?php

use Illuminate\Database\Seeder;

class BookmarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bookmark::class, 200)->create();
    }
}
