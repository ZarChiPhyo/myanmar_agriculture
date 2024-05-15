<?php

namespace Database\Seeders;

use App\Models\Agriculture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgricultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $agricultures_json = file_get_contents(public_path('BurmeseAgriculture.json'));
        $agrilcultures = json_decode($agricultures_json, true);
        // dd($agrilcultures);
    foreach($agrilcultures as $agriculture) {
            Agriculture::create([
                'id' => $agriculture['Id'],
                'title'=>$agriculture['Title'],
                'date'=>$agriculture['Date'],
                'author'=>$agriculture['Author'],
                'content'=>$agriculture['Content']
            ]);
        }
    }
}
