<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
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
        // $profile = Profile::create(['key' => 'Type', 'value' => 'Internal', 'user_id' => 6]);
        // $user = User::find(6);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Education', 'value' => 'BTEC college', 'user_id' => 6]);
        // $user = User::find(6);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Type', 'value' => 'External', 'user_id' => 7]);
        // $user = User::find(7);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Education', 'value' => 'FPT University', 'user_id' => 7]);
        // $user = User::find(7);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Type', 'value' => 'Internal', 'user_id' => 8]);
        // $user = User::find(8);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 9]);
        // $user = User::find(9);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Toeic', 'value' => '130', 'user_id' => 9]);
        // $user = User::find(9);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Ielts', 'value' => '8.0', 'user_id' => 10]);
        // $user = User::find(10);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Toeic', 'value' => '140', 'user_id' => 10]);
        // $user = User::find(10);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 11]);
        // $user = User::find(11);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Toeic', 'value' => '150', 'user_id' => 11]);
        // $user = User::find(11);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Position', 'value' => 'Developer', 'user_id' => 11]);
        // $user = User::find(11);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Ielts', 'value' => '8.0', 'user_id' => 12]);
        // $user = User::find(12);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Position', 'value' => 'Tester', 'user_id' => 12]);
        // $user = User::find(12);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();

        // $profile = Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 13]);
        // $user = User::find(13);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        // $profile = Profile::create(['key' => 'Position', 'value' => 'Tester', 'user_id' => 13]);
        // $user = User::find(13);
        // $user->keyword = $user->keyword . $profile->value . ", ";
        // $user->save();
        


        // heroku
        $profile = Profile::create(['key' => 'Type', 'value' => 'Internal', 'user_id' => 55]);
        $user = User::find(55);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Education', 'value' => 'BTEC college', 'user_id' => 55]);
        $user = User::find(55);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Type', 'value' => 'External', 'user_id' => 65]);
        $user = User::find(65);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Education', 'value' => 'FPT University', 'user_id' => 65]);
        $user = User::find(65);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Type', 'value' => 'Internal', 'user_id' => 75]);
        $user = User::find(75);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 85]);
        $user = User::find(85);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Toeic', 'value' => '130', 'user_id' => 85]);
        $user = User::find(85);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Ielts', 'value' => '8.0', 'user_id' => 95]);
        $user = User::find(95);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Toeic', 'value' => '140', 'user_id' => 95]);
        $user = User::find(95);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 105]);
        $user = User::find(105);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Toeic', 'value' => '150', 'user_id' => 105]);
        $user = User::find(105);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Position', 'value' => 'Developer', 'user_id' => 105]);
        $user = User::find(105);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Ielts', 'value' => '8.0', 'user_id' => 115]);
        $user = User::find(115);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Position', 'value' => 'Tester', 'user_id' => 115]);
        $user = User::find(115);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();

        $profile = Profile::create(['key' => 'Ielts', 'value' => '9.0', 'user_id' => 125]);
        $user = User::find(125);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
        $profile = Profile::create(['key' => 'Position', 'value' => 'Tester', 'user_id' => 125]);
        $user = User::find(125);
        $user->keyword = $user->keyword . $profile->value . ", ";
        $user->save();
    }
}
