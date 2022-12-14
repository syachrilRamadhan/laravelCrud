<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => ''],
            ['name' => 'admin']
        ];

          foreach($data as $value)
          Role::insert([
            'name' => $value['name'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
