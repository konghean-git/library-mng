<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDepartment;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function send_sms()
    {

        // Nexmo::message()->send([
        //     'to'   => '+85599706089',
        //     'from' => '+85578883914',
        //     'text' => 'Using the instance to send a message.'
        // ]);

        // UserDepartment::create([
        //     'id' => 1,
        //     'name' => 'សិស្ស',
        //     'description' => 'សិស្សទាំងឡាយណាដែលកំពុងសិក្សានៅក្នុងសាលារៀននេះផ្ទាល់ ។'
        // ]);

        // UserDepartment::create([
        //     'id' => 2,
        //     'name' => 'សិស្សកៅ',
        //     'description' => 'សិស្សទាំងឡាយណាដែលមកពីសាលាផ្សេងៗ ។'
        // ]);

        // UserDepartment::create([
        //     'id' => 3,
        //     'name' => 'បុគ្កលិក',
        //     'description' => 'សំដៅដល់អ្នកធ្វើការងារតាមស្ថាប័ននានា ទាំងរដ្ឋ និងឯកជន ។'
        // ]);


        // UserDepartment::create([
        //     'id' => 4,
        //     'name' => 'គ្រូបង្រៀន',
        //     'description' => 'សំដៅដល់លោកគ្រូ អ្នកគ្រូដែលកំពុងតែបង្រៀននៅក្នុងសាលានេះ ។'
        // ]);

        User::create([
            'code' => 'RRLM00001',
            'khmer_name' => "ម៉ុក គង់",
            'latin_name' => "Mok Kong",
            'gender' => "ប្រុស",
            'date_of_birth' => "1995-12-06",
            'department_id' => 4,
            'address' => 'កំពង់ធំ',
            'phone' => '078883914',
            'email' => 'konghean@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'code' => 'RRLM00002',
            'khmer_name' => "ហេង ឆេងគាង",
            'latin_name' => "Heng Chengkeang",
            'gender' => "ស្រី",
            'date_of_birth' => "1997-12-06",
            'department_id' => 4,
            'address' => 'ត្បូងឃ្មុំ',
            'phone' => '078883914',
            'email' => 'chengkeang@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'code' => 'RRLM00003',
            'khmer_name' => "សិស្ស ក",
            'latin_name' => "Student 01",
            'gender' => "ប្រុស",
            'date_of_birth' => "2001-12-06",
            'department_id' => 1,
            'address' => 'ត្បូងឃ្មុំ',
            'phone' => '078883914',
            'email' => 'student01@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'code' => 'RRLM00004',
            'khmer_name' => "សិស្ស ខ",
            'latin_name' => "Student 02",
            'gender' => "ប្រុស",
            'date_of_birth' => "2001-12-06",
            'department_id' => 2,
            'address' => 'ត្បូងឃ្មុំ',
            'phone' => '078883914',
            'email' => 'student01@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        return 'User Added';
    }
}
