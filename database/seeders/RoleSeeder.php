<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ["name" => "admin" , "label" => "Administrateur"],
            ['name' => 'semi-admin'  , 'label' => 'Semi-administrateur' ]
        ];

        foreach ($roles as $role) {
            if (!Role::where('name' , $role)->first()) {
                Role::create([
                    "name" => $role['name'],
                    "label" => $role['label'],
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ]);
            }
        }
    }
}
