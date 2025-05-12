<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incrementing)
            $table->string('restaurant'); // Name of the restaurant
            $table->string('product_name'); // Name of the product ordered
            $table->string('product_image')->nullable(); // Image of the product
            $table->string('phone'); // Customer's phone number
            $table->decimal('price', 10, 2); // Price of the order (10 digits with 2 decimals)
            $table->enum('status', ['Accepted', 'Pending']); // Order status
            $table->enum('delivery_status', ['Shipped', 'Pending']); // Delivery status
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
