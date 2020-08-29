<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConseilEnvironmentTableSeeder extends Seeder
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
        DB::table('conseil_environment')->delete();

		for($i = 1; $i < 25; ++$i)
		{
            $date = $this->randDate();
			DB::table('conseil_environment')->insert(array(
				'environment_id' => rand(1, 10),
				'conseil_id' => rand(1, 10),
				'created_at' => $date,
				'updated_at' => $date
			));
		}
    }
}