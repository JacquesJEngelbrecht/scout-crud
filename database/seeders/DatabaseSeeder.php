<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'username'=>'Lars',
        'email'=>'lars@gmail.com',
        'password'=>'password',
        'mobile'=>'0820820820',
        'name'=>'Lars',
        'surname'=>'Ulrich',
        'job_title'=>'Drummer',
        'bio'=>'Longtime Drummer'
        ]);
        User::create([
        'username'=>'James',
        'email'=>'james@gmail.com',
        'password'=>'password',
        'mobile'=>'0820820820',
        'name'=>'James',
        'surname'=>'Hetfield',
        'job_title'=>'Riff Master',
        'bio'=>'Riffing it up'
        ]);
        User::create([
        'username'=>'Kirk',
        'email'=>'kirk@gmail.com',
        'password'=>'password',
        'mobile'=>'0820820820',
        'name'=>'Kirk',
        'surname'=>'Hammet',
        'job_title'=>'Lead Player',
        'bio'=>'Leading with Leads'
        ]);
        User::create([
        'username'=>'Robert',
        'email'=>'robert@gmail.com',
        'password'=>'password',
        'mobile'=>'0820820820',
        'name'=>'Robert',
        'surname'=>'Trujillo',
        'job_title'=>'Bass Player',
        'bio'=>'Love my bass'
        ]);
    }
}
