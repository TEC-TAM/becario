<?php

use App\Period;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		User::create([
			'name' => 'Adminsitrador - Becas',
			'last_name' => 'N/A',
			'middle_name' => 'N/A',
			'itesm_id' => 'N/A',
			'email' => 'administrator@itesm.mx',
			'password' => bcrypt('ijkl20ur10'),
			'work_area' => 'TI',
			'type' => true
		]);
		Period::create([
			'semester' => 'XXX 2018',
			'deadline_to_finish_service' => 'X del 2018',
			'deadline_to_rate_students' => 'Y del 2018',
			'deadline_to_hand_in_file' => 'Z del 2018'
		]);
		Model::reguard();
		// $this->call('UserTableSeeder');
	}

}
