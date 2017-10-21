<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTokensPolyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->string('tokenable_type');
            $table->integer('tokenable_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->dropTable('tokenable_type');
            $table->dropTable('tokenable_id');
        });
    }
}
