<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Image;
use App\Models\Like;
use App\Models\Comment;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $user = User::factory(1)->create();
        $image = Image::factory(1)->for($user)->create();
        Comment::factory()
        ->for($user)
        ->for($image)
        ->create();
    }
}