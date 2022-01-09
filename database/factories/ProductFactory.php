<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $product_name = $this->faker->company();
        $slug = Str::slug($product_name);

        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_desc' => $this->faker->text(200),
            'desc' => $this->faker->text(500),
            'normal_price' => $this->faker->numberBetween(20000, 100000),
            'sku' => 'SEWA' .$this->faker->numberBetween(50,200),
            'stock_status' => 'instock',
            'qty' => $this->faker->numberBetween(1,100),
            'img' => 'tas_' .$this->faker->unique()->numberBetween(1,10).'.jpg',
            'kategori_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
