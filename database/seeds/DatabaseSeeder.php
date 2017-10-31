<?php

use Illuminate\Database\Seeder;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$start = microtime(true);
    	factory(User::class, 10000)->create();
    	$secs = microtime(true) - $start;
    	echo "Finished in $secs \n"; 
    }
}
