<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookmarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('bookmarks');

        /**
         * CREATE TABLE "bookmarks" ("id" integer not null primary key autoincrement, "created_at" datetime not null, "updated_at" datetime not null, "url" varchar not null, "user_id" integer not null, foreign key("user_id") references "users"("id"))
         */

        Schema::create('bookmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('url');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookmarks');
    }
}
