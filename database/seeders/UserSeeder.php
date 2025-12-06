<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        if (!User::where('email' , "admin@ordremedecinsbenin.bj")->first()) {

            $role = Role::where('name' , 'admin')->first();

            DB::table('users')->insert([
                'lastname'      => "ONMB",
                'firstname'     => "Admin",
                'telephone'     => "94968181",
                'email'         => "admin@ordremedecinsbenin.bj",
                'is_enabled'    => true,
                'role_id'       => $role->id,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]);

        }

    }
}
