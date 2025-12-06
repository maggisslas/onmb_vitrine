<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "name" => "Actualité",
                "type" => "blog",
                "description" => "Actualités et conseils sur l'ordre."
            ],
            [
                "name" => "Bulletin de l'ordre",
                "type" => "blog",
                "description" => "Bulletin de l'ordre."
            ],
            [
                "name" => "Rapports",
                "type" => "blog",
                "description" => "Les rapports de l'ordre."
            ],
            [
                "name" => "Communiqués",
                "type" => "blog",
                "description" => "Les communiqués sur l'ordre"
            ],
            [
                "name" => "Recommandation",
                "type" => "blog",
                "description" => "Quelques recommandations de l'ordre."
            ],



            [
                "name" => "2018",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2018."
            ],
            [
                "name" => "2019",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2019."
            ],
            [
                "name" => "2020",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2020."
            ],
            [
                "name" => "2021",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2021."
            ],
            [
                "name" => "2022",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2022."
            ],
            [
                "name" => "2023",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2023."
            ],
            [
                "name" => "2024",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2024."
            ],
            [
                "name" => "2025",
                "type" => "actes_autorisation",
                "description" => "Actes et autorisation de 2025."
            ]
        ];


        foreach ($categories as $category) {
            if (!Category::where('name' , $category['name'])->where('type' , $category['type'])->first()) {
                if ($category["user_id"] = User::first()->id) {
                    $category["slug"] = Str::slug($category["name"] , '-');
                    Category::create($category);
                }
            }
        }
    }
}
