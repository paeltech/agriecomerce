<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Types.
 *
 * @author  The scaffold-interface created at 2017-07-07 07:33:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Types extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('types',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('cat_name');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('types');
    }
}
