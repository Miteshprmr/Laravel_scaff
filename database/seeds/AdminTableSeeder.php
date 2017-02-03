<?php

use Illuminate\Database\Seeder;

use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'mitesh',
            'email' => 'miteshprmr3493@gmail.com',
            'password' => '$2y$10$zl9jqN8aDRlfTINu8Y6kBuU4b3UOj1yd2EjCpjzUlWXFcktPJtTx.',
        ]);
    }
}
