<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
        ];
        $lgas = [
            'Addis Ketema', 'Akaky Kaliti', 'Arada', 'Bole', 'Gullele', 'Kirkos', 'Kolfe Keranio', 'Lideta', 'Nifas Silk-Lafto', 'Yeka', 'Bole Lemi',
            'Oromia', 'SNNPR', 'Amhara', 'Gambella', 'Tigray', 'Somali', 'Harar', 'Diredawa', 'Benshagul', 'Afar', 'Sidamo',
        ];
        for ($i = 0; $i < count($lgas); $i++) {
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }   
    }

}
