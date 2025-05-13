<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); 
            $table->string('restaurant'); 
            $table->string('product_name'); 
            $table->string('product_image')->nullable(); 
            $table->string('phone'); 
            $table->decimal('price', 10, 2); 
            $table->enum('status', ['Accepted', 'Pending']); 
            $table->enum('delivery_status', ['Shipped', 'Pending']); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
