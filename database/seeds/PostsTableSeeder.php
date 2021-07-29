<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<0; $i++){

            $newPost = new Post(); 

            $newPost->title ="Titolo articolo" . $i;
            $newPost->content ="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam placeat sed, rem pariatur voluptas alias quidem obcaecati nisi nulla, quo necessitatibus expedita adipisci vero perferendis delectus. Ducimus molestiae aperiam fuga ex dignissimos voluptate cupiditate libero illo iure. Consequuntur, architecto! In, aliquam! Modi nobis ratione quaerat eveniet minima cupiditate reiciendis maxime!";
            $newPost->slug = Str::slug($newPost->title, '-');

            $newPost -> save();
        }
    }
}
