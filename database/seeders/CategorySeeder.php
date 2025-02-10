<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'department_id' => 1,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'department_id' => 2,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
    
            //Subcategories of electronics
            [
                'name' => 'Computers',
                'department_id' => 1,
                'parent_id' => 1, // Parent is electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SmartPhones',
                'department_id' => 1,
                'parent_id' => 1,  // Parent is electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
    
            //Subcategories of Computers
            [
                'name' => 'Laptops',
                'department_id' => 1,
                'parent_id' => 3,  // Parent is Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desktops',
                'department_id' => 1,
                'parent_id' => 3,  // Parent is Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
    
            //Subcategories of Smartphones
            [
                'name' => 'Android',
                'department_id' => 1,
                'parent_id' => 4,  // Parent is Smartphones
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhones',
                'department_id' => 1,
                'parent_id' => 4,  // Parent is Smartphones
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        DB::table('categories')->insert($categories);
    }
}
