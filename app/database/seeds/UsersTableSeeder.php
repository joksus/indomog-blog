<?php 

class UsersTableSeeder extends Seeder {

	/**
	 * Run the user seeds.
	 *
	 * @return void
	 */
public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => Hash::make('admin')
            ),
            array(
            'username' => 'admin2',
            'email' => 'admin2@blog.com',
            'password' => Hash::make('admin')
            )
        );

        DB::table('users')->insert($users);
    }

}