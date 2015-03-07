



<?php

use Illuminate\Database\Seeder;

class CastsTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('casts')->delete();

        $casts = array(
            ['id' => 1, 'voter_id' => '12345ab', 'symbol' => 'Laptop', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
        DB::table('casts')->insert($casts);
    }

}