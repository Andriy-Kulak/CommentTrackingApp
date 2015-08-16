<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Comment;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CommentTableSeeder');
		$this->command->info('Comment table seeded.');
	}

}

class CommentTableSeeder extends Seeder {
	public function run(){
		DB::table('comments')->delete();

		/**
		 * Test Comments
		 */

		Comment::create(array(
			'author' => 'Andriy Kulak',
			'text' => 'Test Comment.'
		));

		Comment::create(array(
			'author' => 'Michael Smith',
			'text' => 'This is going to be awesome'
		));

		Comment::create(array(
			'author' => 'Eric Carter',
			'text' => 'This Comment App is starting to fill up fast.'
		));
	}


}