<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'Addis Ababa',''
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
