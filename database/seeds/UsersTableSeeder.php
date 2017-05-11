<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = factory(App\Models\User::class)->create();
		DB::table('users')->insert([$user]);
    }
}
