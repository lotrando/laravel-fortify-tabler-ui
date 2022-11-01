<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $personalNumber = $this->faker->unique()->numberBetween(61000, 65000);

        return [
            'personal_number' => $personalNumber,
            'image'           => '/foto/' . $personalNumber . '.jpg',
            'title_preffix'   => $this->faker->title(),
            'last_name'       => $this->faker->lastName(),
            'first_name'      => $this->faker->firstName(),
            'title_suffix'    => $this->faker->title(),
            'department_id'   => Department::all()->random()->id,
            'job_id'          => $this->faker->jobTitle(),
            'email'           => $this->faker->unique()->safeEmail(),
            'phone'           => $this->faker->numberBetween(341, 556),
            'mobile'          => $this->faker->e164PhoneNumber(),
            'id_card'         => $this->faker->randomElement(['Nový nástup', 'Vytvořit kartu', 'Předat nálepku', 'Aktualizovat nálepku', 'Ok', 'Vrácena']),
            'id_color'        => $this->faker->hexColor(),
            'coffee'          => $this->faker->randomElement(['N', 'A']),
            'employment'      => $this->faker->randomElement(['HPP', 'DPP', 'DPČ', 'EVP', 'ČSO']),
            'status'          => $this->faker->randomElement(['active', 'inactive', 'maternal']),
        ];
    }
}
