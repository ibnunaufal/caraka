<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            'code'=> 'CRK-0665',
            'name'=> 'BOXS QUEEN BED SET',
            'description'=> 'BOXS QUEEN BED SET',
            'optionSize'=> 'TWIN,KING, QUEEN',
            'size'=> 'INCH',
            'material'=> 'TEAK',
            'finishing'=> 'AS THE REQUEST',
            'packaging'=> 'CARTON BOX',
            'idrPrice'=> ' $1.294,65 ',
            'usdPrice'=> ' $1.294,65 ',
            'fobPort'=> 'SEMARANG',
            'moq'=> '5 SET',
            'leadTime'=> '5 WEEKS',
            'image'=> 'asddd',
        ]);
    }
}
