<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
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
        Schema::dropIfExists('categories');
    }
}

// Category::create([
//     'name' => 'Programming',
//     'slug' => 'programming'
// ]);
// Category::create([
//     'name' => 'UI/UX',
//     'slug' => 'ui-ux'
// ]);
// Category::create([
//     'name' => 'Machine Learning',
//     'slug' => 'machine-learning'
// ]);
