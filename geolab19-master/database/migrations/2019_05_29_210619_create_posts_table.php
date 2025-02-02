<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('posts')) {
            
            Schema::create('posts', function (Blueprint $table) {

                $table->increments('id');
                $table->string("name_test", 100)->nullable();
                $table->integer("is_published")->unsigned();
                $table->datetime("publish_date");
                $table->longText("description")->nullable();
                $table->timestamps();
            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        

    }
}
