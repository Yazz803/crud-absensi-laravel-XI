<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $rayon = ['Ciawi'.mt_rand(1,5), 'Cicurug'.mt_rand(1,7), 'Wikrama'.mt_rand(1,3)];
        $rombel = ['PPLG XI-'.mt_rand(1,5), 'TKJT XI-'.mt_rand(1,4)];
        $ket = ['Hadir', 'Sakit', 'Ijin', 'Alpa'];

        return [
            'nis' => $this->faker->numerify('########'),
            'nama' => $this->faker->name(),
            'rombel' => $rombel[mt_rand(0,1)],
            'rayon' => $rayon[mt_rand(0,2)],
            'ket' => $ket[mt_rand(0,3)]
        ];
    }
}
