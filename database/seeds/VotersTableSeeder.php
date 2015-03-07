


<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categories')->delete();

        $voters = array(
            ['id' => 1, 'voter_name' => 'bornaly', 'voter_id' => '12345ab', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}