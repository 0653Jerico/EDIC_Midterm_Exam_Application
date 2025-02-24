<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            ['name' => 'The Shawshank Redemption', 'description' => 'Two imprisoned men bond over a number of years.', 'price' => 9.99],
            ['name' => 'The Godfather', 'description' => 'The aging patriarch of an organized crime dynasty transfers control to his reluctant son.', 'price' => 9.99],
            ['name' => 'The Dark Knight', 'description' => 'When the menace known as the Joker emerges, Batman must accept one of the greatest psychological and physical tests.', 'price' => 9.99],
            ['name' => 'Pulp Fiction', 'description' => 'The lives of two mob hitmen, a boxer, and a pair of diner bandits intertwine.', 'price' => 9.99],
            ['name' => 'Schindler\'s List', 'description' => 'In German-occupied Poland during World War II, Oskar Schindler becomes concerned for his Jewish workforce.', 'price' => 9.99],
            ['name' => '12 Angry Men', 'description' => 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.', 'price' => 9.99],
            ['name' => 'The Lord of the Rings: The Return of the King', 'description' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army.', 'price' => 9.99],
            ['name' => 'Fight Club', 'description' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club.', 'price' => 9.99],
            ['name' => 'Forrest Gump', 'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, and more through the eyes of an Alabama man.', 'price' => 9.99],
            ['name' => 'Inception', 'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology.', 'price' => 9.99],
        ];

        foreach ($movies as $movie) {
            Product::create($movie);
        }
    }
}
