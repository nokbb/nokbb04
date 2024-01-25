<?php

namespace Database\Seeders;

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
        // runメソッド内に追加して順番を入れ替える
        $this->call(UsersTableSeeder::class);
        $this->call(FoldersTableSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
