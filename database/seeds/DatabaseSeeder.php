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

        $this->call(UserTableSeeder::class);
        
        $this->command->info('User table seeded!');
        
        $this->call(LocationTableSeeder::class);
        
        $this->command->info('Location table seeded!');
        
        $this->call(DistanceTableSeeder::class);
        
        $this->command->info('Distance table seeded!');

        Model::reguard();
    }
}