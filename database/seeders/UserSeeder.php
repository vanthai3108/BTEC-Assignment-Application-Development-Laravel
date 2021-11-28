<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', 'Admin')->first();
        $roleStaff = Role::where('name', 'Training staff')->first();
        $roleTrainer = Role::where('name', 'Trainer')->first();
        $roleTrainee = Role::where('name', 'Trainee')->first();
        // create 2 account admin 
        $user = User::create([
            'username' => 'admin',
            'password' => Hash::make('adminadmin'),
            'fullname' => 'Admin 1',
            'email' => 'admin@gmail.com',
            'avatar' => 'storage/avatars/avatar1.png'
        ]);
        $user->keyword = $user->username . ", " . $user->fullname . ", " . $user->email . ", ";
        $user->save();
        $user->roles()->attach($roleAdmin->id); 


        $user = User::create([
            'username' => 'admin2',
            'password' => Hash::make('adminadmin'),
            'fullname' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'avatar' => 'storage/avatars/avatar2.png'
        ]);
        $user->keyword = $user->username . ", " . $user->fullname . ", " . $user->email . ", ";
        $user->save();
        $user->roles()->attach($roleAdmin->id);

        //create 3 trainning staff
        for($i=1; $i<4; $i++){
            $user = User::create([
                'username' => 'training'.$i,
                'password' => Hash::make('adminadmin'),
                'fullname' => 'Training staff '.$i,
                'email' => 'training'.$i.'@gmail.com',
                'avatar' => 'storage/avatars/avatar'.($i+2).'.png',
                //'avatar' => 'storage/avatars/avatar-default.png'
            ]);
            $user->keyword = $user->username . ", " . $user->fullname . ", " . $user->email . ", ";
            $user->save();
            $user->roles()->attach($roleStaff->id);
        }

        //create 3 trainer
        for($i=1; $i<4; $i++){
            $user = User::create([
                'username' => 'trainer'.$i,
                'password' => Hash::make('adminadmin'),
                'fullname' => 'Trainer '.$i,
                'email' => 'trainer'.$i.'@gmail.com',
                'avatar' => 'storage/avatars/avatar'.$i.'.jpg'
                // 'avatar' => 'storage/avatars/avatar-default.png'
            ]);
            $user->keyword = $user->username . ", " . $user->fullname . ", " . $user->email . ", ";
            $user->save();
            $user->roles()->attach($roleTrainer->id);
        }

        //create 5 trainee
        for($i=1; $i<6; $i++){
            $user = User::create([
                'username' => 'trainee'.$i,
                'password' => Hash::make('adminadmin'),
                'fullname' => 'Trainee '.$i,
                'email' => 'trainee'.$i.'@gmail.com',
                'avatar' => 'storage/avatars/avatar'.($i+3).'.jpg'
                // 'avatar' => 'storage/avatars/avatar-default.png'
            ]);
            $user->keyword = $user->username . ", " . $user->fullname . ", " . $user->email . ", ";
            $user->save();
            $user->roles()->attach($roleTrainee->id);
        }
    }
}
