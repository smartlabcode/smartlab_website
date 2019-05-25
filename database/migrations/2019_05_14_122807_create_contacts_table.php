<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['general', 'demo', 'bussiness', 'career'])->default('general');
            $table->string("name", 100);
            $table->string("lastname", 100)->nullable();
            $table->string("phone_number", 100)->nullable();
            $table->string('file_path', 255)->nullable();
            $table->string("email", 100);
            $table->string("subject", 100);
            $table->text("message")->nullable();
            $table->string("category")->nullable();
            $table->string("company", 100)->nullable();
            $table->string("date", 100)->nullable();
            $table->string("time", 100)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}


