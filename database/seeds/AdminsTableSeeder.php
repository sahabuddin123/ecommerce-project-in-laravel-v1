<?php
use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
 
        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'sahabuddinriyaj984@gmail.com.com',
            'password'  =>  bcrypt('sa@1032000'),
        ]);
    }
}
