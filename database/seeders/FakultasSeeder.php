<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class FakultasSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Fakultas::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Kedokteran'],
            ['name' => 'Hukum'],
            ['name' => 'Teknik'],
            ['name' => 'Sosiologi'],
            ['name' => 'Psikologi'],
            ['name' => 'Ekonomi'],
            ['name' => 'Sastra'],
        ];

        foreach($data as $value)
        Fakultas::insert([
            'name' => $value['name'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
