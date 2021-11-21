<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 9]);
        Profile::create(['key' => 'Toeic', 'value' => '130', 'user_id' => 9]);

        Profile::create(['key' => 'Ielts', 'value' => '8.0', 'user_id' => 10]);
        Profile::create(['key' => 'Toeic', 'value' => '140', 'user_id' => 10]);

        Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 11]);
        Profile::create(['key' => 'Toeic', 'value' => '150', 'user_id' => 11]);
        Profile::create(['key' => 'Position', 'value' => 'Developer', 'user_id' => 11]);

        Profile::create(['key' => 'Ielts', 'value' => '8.0', 'user_id' => 12]);
        Profile::create(['key' => 'Position', 'value' => 'Tester', 'user_id' => 12]);

        Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 13]);
        Profile::create(['key' => 'Position', 'value' => 'Tester', 'user_id' => 13]);
    }
}
