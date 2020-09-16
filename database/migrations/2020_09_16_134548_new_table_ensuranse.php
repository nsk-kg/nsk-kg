<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewTableEnsuranse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensuranse', function (Blueprint $table) {
            $table->id();
            $table->text('firstName');
            $table->text('MidleName');
            $table->text('product');
            $table->text('polis');
            $table->text('telephone');
            $table->text('status');
            $table->text('image');
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
        //
    }
}
