<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['pengumpulan', 'pengambilan', 'peminjaman']);

        return [
            'student_class_id' => $this->faker->numberBetween(1, 33),
            'date' => now(),
            'phone' => $this->faker->numberBetween(6, 36),
            'type' => $type,
            'officer' => $this->faker->name(),     // opsional, tidak disebutkan di soal
            'teacher' => Teacher::inRandomOrder()->value('name') ?? $this->faker->name(),
            'image' => '',                        // kosong sesuai permintaan
            'notes' => $type === 'peminjaman' ? $this->faker->realText() : null,
        ];
    }
}
