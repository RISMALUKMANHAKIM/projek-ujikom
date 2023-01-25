<?php

namespace Database\Seeders;

use App\Models\Dataanak;
use Illuminate\Database\Seeder;

class DataanaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample data anak
        $dataanak1 = Dataanak::create(['nama' => 'Putri', 'umur' => '10', 'tempat' => 'Bandung', 'ttl' => '2011-03-09', 'pendidikan' => 'SD', 'wali' => 'Ida']);
        $dataanak2 = Dataanak::create(['nama' => 'Ajeng', 'umur' => '11', 'tempat' => 'Sukabumi', 'ttl' => '2011-08-08', 'pendidikan' => 'SD', 'wali' => 'Dadang']);
        $dataanak3 = Dataanak::create(['nama' => 'Jaja', 'umur' => '5', 'tempat' => 'Subang', 'ttl' => '2005-08-01', 'pendidikan' => 'Belum Sekolah', 'wali' => 'Asep']);

    }
}
