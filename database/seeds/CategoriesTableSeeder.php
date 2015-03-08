
<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categories')->delete();

        $categories = array(
            ['id' => 1, 'title' => 'Education', 'description' => 'no description','created_by' => 'Wakila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'Games', 'description' => 'no description','created_by' => 'Wakila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'Entertainment', 'description' => 'no description','created_by' => 'Wakila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'title' => 'International News', 'description' => 'no description','created_by' => 'Wakila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('categories')->insert($categories);
    }

}