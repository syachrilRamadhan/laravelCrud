<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Mahasiswa::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Nikita Mirzani', 'nim' => '1435678860', 'gender' => 'P', 'alamat' => 'Bandung','fakultas_id' => 1],
        //     ['name' => 'Lesti Widianti', 'nim' => '8764532345', 'gender' => 'P', 'alamat' => 'Jakarta', 'fakultas_id' => 1],
        //     ['name' => 'Anonymous', 'nim' => '8876453244', 'gender' => 'L', 'alamat' => 'Jakarta','fakultas_id' => 4],
        //     ['name' => 'Jerome', 'nim' => '7765432100', 'gender' => 'L', 'alamat' => 'Subang','fakultas_id' => 3],
        //     ['name' => 'Deni Cagur', 'nim' => '0000998766', 'gender' => 'L','alamat' => 'Manado', 'fakultas_id' => 2],
        //     ['name' => 'Sumanto', 'nim' => '8888765433', 'gender' => 'L','alamat' => 'Semarang', 'fakultas_id' => 5],
        // ];

        // foreach($data as $value)
        // Mahasiswa::insert([
        //     'name' => $value['name'],
        //     'nim' => $value['nim'],
        //     'gender' => $value['gender'],
        //     'alamat' => $value['alamat'],
        //     'fakultas_id' => $value['fakultas_id'],
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        Mahasiswa::factory()->count(100)->create();
    }
}
