<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        \App\Models\User::factory(100)->create();
        \App\Models\Post::factory(100)->create();

        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // DB::table('users')->truncate();
        // DB::table('posts')->truncate();
        // factory(User::class,10)->create()->each(function($user){
        //     $user->posts()->save(factory(Post::class)->make());
        // });
    }
}
