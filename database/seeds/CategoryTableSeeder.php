<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Category;
use App\Models\Cat;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Models\Category::class, 10)->create();
    	$faker = Factory::create();
    	Category::truncate();
    	$cateLists = ['Life and survive','Chilhood','Trip and Experience','History','Video','Music','HistoryCollected'];
    	foreach ($cateLists as $key => $value) {
    		$cat = Category::create([
    				'name'=> $value,
    			]);
    	}

    }
}
