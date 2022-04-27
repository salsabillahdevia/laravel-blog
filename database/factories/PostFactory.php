<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ini bikin angka random antara 1 sampe 6
            'category_id' => $this->faker->numberBetween(1, 6),
            'user_id' => $this->faker->numberBetween(1, 6),
            'title' => $this->faker->sentence(mt_rand(2, 8)), //bikin kalimat jumlah kata random
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // ini cara konfensional buat bikin array jadi paragraf
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>'
            // ini cara barunya. fn itu sama kayak function beda sintak aja, dan setelah => tu returnnya
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($paragraf) => "<p>$paragraf</p>")->implode(''),
        ];
    }
}
