<?php

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
        $this->truncateTablas(['provinces']);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
    }
}
