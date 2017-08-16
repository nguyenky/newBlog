<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Category;
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
    	$cateLists = ['Life and survive','Chilhood','Trip','History','Video','Music','HistoryCollected'];
    	foreach ($cateLists as $key => $value) {
    		$cat = Category::create([
    				'name'=> $value,
    			]);
    	}

    }
}
