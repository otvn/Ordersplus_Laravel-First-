<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('kpis', function (Blueprint $table) {
        $table->id();
        $table->string('name');  // Name of the KPI (e.g., "Today's Revenue")
        $table->decimal('value', 10, 2);  
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
    Schema::dropIfExists('kpis');  
}


};
