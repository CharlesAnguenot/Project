<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnimalRdvTableSeeder extends Seeder
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
        DB::table('animal_rdv')->delete();

		for($i = 1; $i < 25; ++$i)
		{
            $date = $this->randDate();
			DB::table('animal_rdv')->insert(array(
				'animal_id' => rand(1, 10),
				'rdv_id' => rand(1, 10),
				'created_at' => $date,
				'updated_at' => $date
			));
		}
    }
}
