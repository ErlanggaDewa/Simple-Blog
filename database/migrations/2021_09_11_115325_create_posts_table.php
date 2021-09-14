<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
// ! data sampel
// Post::create([
//     'category_id' => 1,
//     'title' => 'judul pertama',
//     'slug' => 'judul-pertama',
//     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius laboriosam animi? Sapiente,',
//     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius laboriosam animi? Sapiente, sed aliquid laboriosam voluptatibus nisi reprehenderit odit eveniet, corporis similique repudiandae nemo ipsa nobis reiciendis optio necessitatibus.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias excepturi asperiores ad ducimus cumque eos quisquam a, laudantium doloribus commodi omnis sint et unde dolore! Suscipit ea illum eos maiores?</p>'
// ]);

// Post::create([
//     'category_id' => 2,
//     'title' => 'judul kedua',
//     'slug' => 'judul-ke-dua',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloribus sequi assumenda,',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloribus sequi assumenda, facere voluptates officiis earum perferendis ad voluptatibus quod libero optio fugiat laudantium ratione fuga illo magni! Ea, quaerat!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, laborum quasi dolorum officiis ab dicta similique quo sequi minima commodi sit praesentium aperiam debitis soluta alias illum sint vero ipsa?</p>'
// ]);

// Post::create([
//     'category_id' => 1,
//     'title' => 'judul ketiga',
//     'slug' => 'judul-ke-tiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloribus sequi assumenda,',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloribus sequi assumenda, facere voluptates officiis earum perferendis ad voluptatibus quod libero optio fugiat laudantium ratione fuga illo magni! Ea, quaerat!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, laborum quasi dolorum officiis ab dicta similique quo sequi minima commodi sit praesentium aperiam debitis soluta alias illum sint vero ipsa?</p>'
// ]);
