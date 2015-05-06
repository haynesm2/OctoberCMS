<?php namespace Acme\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOpportunitiesTable extends Migration
{

    public function up()
    {
        Schema::create('acme_crm_opportunities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_crm_opportunities');
    }

}
