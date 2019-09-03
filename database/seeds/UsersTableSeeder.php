<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 30)->create();

        // usuario Victor con el rol super-admin
        $admin_victor = User::create([
        	'name' => 'Victor Villca Villca',
        	'email'=> 'victor.villca.v@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin_victor->assignRole('super-admin');

        // usuario con el rol editor
        $editor = User::create([
        	'name' => 'editor',
        	'email'=> 'editor@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $editor->assignRole('editor');

		// usuario con el rol moderador
        $moderador =  User::create([
        	'name' => 'moderador',
        	'email'=> 'moderador@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $moderador->assignRole('moderador');

        // usuario con el rol super-admin
        $admin = User::create([
        	'name' => 'admin',
        	'email'=> 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('super-admin');
    }
}
