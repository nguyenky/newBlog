<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Category;
use App\Models\News;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Factory::create();
    	News::truncate();
    	$categories = Category::all();
    	foreach ($categories as $key => $value) {
    		// for($i =0 ; $i <10 ; $i++){
    			$news = News::create([
    					'name' => $faker->text($maxNbChars =200),
				        'preview' => $faker->text($maxNbChars =500),
				        'detail' => $faker->text($maxNbChars =5000),
				        'category_id' =>$value['id'],
    				]);
    		// }
    	}
        // factory(App\Models\News::class, 50)->create();
    }
}
