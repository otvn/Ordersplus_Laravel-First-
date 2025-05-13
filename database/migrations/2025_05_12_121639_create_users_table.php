<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // User's name
            $table->string('email')->unique(); // User's email address, should be unique
            $table->string('password'); // User's password (hashed)
            $table->string('phone')->nullable(); // Optional phone number
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Drop the users table if we rollback the migration
    }
}
