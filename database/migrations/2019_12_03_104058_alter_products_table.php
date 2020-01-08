<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products',function(Blueprint $table){
            $table->unsignedBigInteger('cat_id')->nullable()->after('name');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL')->onUpdate('CASCADE');

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
         Schema::table('products',function(Blueprint $table){
            $table->dropColumn('cat_id');

        });
    }
}
