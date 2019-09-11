<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */

        Model::unguard();
        DB::statement("SET foreign_key_checks = 0");

        $this->call('FamiliesTableSeeder');

        DB::statement("SET foreign_key_checks = 1");
        Model::reguard();
    }

        private function callIfExists($className): void
    {
        if (file_exists(__DIR__ . '/' . $className . '.php')) {
            $this->call($className);
        }
    }
}
