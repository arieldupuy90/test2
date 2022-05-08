<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZipcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'sqlite';

    public function up()
    {
        Schema::create('zipcode', function (Blueprint $table) {
            $table->id();
            $table->string("d_codigo");
            $table->string("d_asenta");
            $table->string("d_tipo_asenta");
            $table->string("D_mnpio");
            $table->string("d_estado");
            $table->string("d_ciudad");
            $table->string("d_CP");
            $table->string("c_estado");
            $table->string("c_oficina");
            $table->string("c_CP");
            $table->string("c_tipo_asenta");
            $table->string("c_mnpio");
            $table->string("id_asenta_cpcons");
            $table->string("d_zona");
            $table->string("c_cve_ciudad");
            $table->timestamp("updated_at");
            $table->timestamp("created_at");
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
         Schema::drop('zipcode');
    }
}
