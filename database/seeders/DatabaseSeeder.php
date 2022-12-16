<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Like;
use App\Models\Comment;
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
        User::factory(3)->create();
        User::factory(1)->has(Image::factory(1),'images')->create();



        \App\Models\User::factory()->create([
            'name' => 'Jairo',
            'surname'=>'Romero',
            'nick'=>'jairoro2002',
            'email' => 'jairoro2002@gmail.com',
            'password'=>'jairo2002',
            'image'=> null,

        ]);

        $user = User::factory()->create();
        $image = Image::factory()->for($user->first())->create();
        Comment::factory(1)
            ->for($user->first())
            ->for($image->first())
            ->create();
     }
}
