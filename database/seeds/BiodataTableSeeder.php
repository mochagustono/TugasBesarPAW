<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodata')->insert([
            'nama' => 'Administrator',
            'nis' => '-',
            'tempat_lahir' => '-',
            'tanggal_lahir' => '1982-12-12',
            'nem' => '-',
            'no_ijazah' => '-',
            'nama_ortu' => '-',
            'pekerjaan_ortu' => '-',
            'telp' => '-',
            'alamat' => '-',
            'user_id' => 1,
        ]);
 
    }
}