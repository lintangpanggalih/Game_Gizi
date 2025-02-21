<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlTokensTable extends Migration
{
    public function up()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->string('url')->nullable();
        });
    }

    public function down()
    {
        //
    }
}
