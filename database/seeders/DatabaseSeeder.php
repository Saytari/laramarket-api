<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory()
                    ->count(10)
                    ->create();

        $categories= Category::factory()
                        ->count(5)
                        ->create();

        Product::factory(50)
            ->make()
            ->each(function ($product) use ($users, $categories) {
                $product->user_id = $users->random()->id;

                $product->category_id = $categories->random()->id;

                $product->save();
            });
    }
}
