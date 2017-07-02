<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClassToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('class');
            $table->integer('NISN');
            $table->string('fullname');
            $table->integer('tahunmasuk');



        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('class');
            $table->dropColumn('NISN');
            $table->dropColumn('fullname');
            $table->dropColumn('tahunmasuk');

        });
    }
}
