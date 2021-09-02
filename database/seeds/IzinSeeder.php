<?php
use App\Izin;
use Illuminate\Database\Seeder;

class IzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Izin::insert([
            [
                'tanggal_izin'=>'2021-09-01',
                'status_izin'=>'Disetujui',
                'user_id'=>7,
            ],
            [
                'tanggal_izin'=>'2021-09-30',
                'status_izin'=>'Disetujui',
                'user_id'=>3,
            ],
        ]);
    }
}
