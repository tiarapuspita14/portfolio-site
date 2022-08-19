<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Skill::create([
            'name'=>'Computer Programming',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolorum. Deserunt consectetur neque nulla velit ipsum accusamus, nihil, quas labore nisi, tenetur dolorum tempora delectus eaque. Labore vero ipsa tenetur.'

        ]);
        Skill::create([
            'name'=>'UI/UX Design',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolorum. Deserunt consectetur neque nulla velit ipsum accusamus, nihil, quas labore nisi, tenetur dolorum tempora delectus eaque. Labore vero ipsa tenetur.'
        ]);
        Skill::create([
            'name'=>'DBMS',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolorum. Deserunt consectetur neque nulla velit ipsum accusamus, nihil, quas labore nisi, tenetur dolorum tempora delectus eaque. Labore vero ipsa tenetur.'
        ]);

        Projects::create([
            'name'=>'Ecommerce',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolorum. Deserunt consectetur neque nulla velit ipsum accusamus, nihil, quas labore nisi, tenetur dolorum tempora delectus eaque. Labore vero ipsa tenetur.'

        ]);
        Projects::create([
            'name'=>'UI Revamp',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolorum. Deserunt consectetur neque nulla velit ipsum accusamus, nihil, quas labore nisi, tenetur dolorum tempora delectus eaque. Labore vero ipsa tenetur.'
        ]);
        Projects::create([
            'name'=>'Portfolio Site',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, dolorum. Deserunt consectetur neque nulla velit ipsum accusamus, nihil, quas labore nisi, tenetur dolorum tempora delectus eaque. Labore vero ipsa tenetur.'
        ]);
    }
}
