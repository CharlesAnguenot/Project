<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    private function randDate()
	{
		return Carbon::createFromDate(rand(2015, 2018), rand(1, 12), rand(1, 28));
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        for($i = 1; $i < 11; ++$i)
		{
            $date = $this->randDate();
            DB::table('images')->insert(array(
                'name' => 'jero.jpg',
                'created_at' => $date,
                'updated_at' => $date
            ));
        }
    }
}
