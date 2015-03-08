


<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('comments')->delete();

        $comments = array(
            ['id' => 1,'blog_id' => 1, 'name' => 'Bornaly', 'email' =>'bornaly.cste@yahoo.com','message' => 'Here is a comment of this blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('comments')->insert($comments);
    }

}