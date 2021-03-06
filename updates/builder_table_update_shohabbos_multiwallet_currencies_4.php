<?php namespace Shohabbos\Multiwallet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosMultiwalletCurrencies4 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_multiwallet_currencies', function($table)
        {
            $table->string('key');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_multiwallet_currencies', function($table)
        {
            $table->dropColumn('key');
        });
    }
}
