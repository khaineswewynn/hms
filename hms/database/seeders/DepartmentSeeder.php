<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Department::create([
            "name"=>"Surgeon",
            "description"=>"Surgeon",
            "phone"=>"0978906554",
            "location"=>"building A, room 001"
        ]);
        Department::create([
            "name"=>"Child",
            "description"=>"Child",
            "phone"=>"0978906554",
            "location"=>"building A, room 002"
        ]);
    }
}
