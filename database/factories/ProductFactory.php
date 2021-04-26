<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = \App\Models\Category::all();
        return [
            'name'=>$this->faker->name,
            'slug'=> $this->faker->slug,
            'image_thumb_url'=>"https://picsum.photos/200/300.webp",
            'price'=>100 * rand(3.5,10),
            'stock' => rand(10,100),
            'category_id' => $categories->random(),
            'description' => $this->faker->text,
            'recommendations' => $this->faker->text,
            'min_purchases' => 3,
            'is_active_to_shop' => 1 
        ];
    }
}
