<?php

// 従リレーション先
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            $table->string('tel', 5);
            $table->string('exchange_tel', 5);
            $table->string('subscriber_tel', 5);
            $table->string('address');
            $table->string('building')->nullable();
            $table->foreignID('category_id')->constrained()->cascadeOnDelete();
            $table->text('detail', 120);
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
