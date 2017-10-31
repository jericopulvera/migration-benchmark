<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\User;

class DatabaseSeeder extends Seeder
{
	protected $faker;

	public function __construct(Faker $faker)
	{
		$this->faker = $faker;
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::connection()->disableQueryLog();

    	User::create([
    		'name' => $this->faker->name,
    		'email' => $this->faker->unique()->safeEmail,
    		'password' => $password ?: $password = bcrypt('secret'),
    		'remember_token' => str_random(10),
    	]);

    	$secs = microtime(true) - $start;
    	echo "Finished in $secs \n"; 
    }
}
