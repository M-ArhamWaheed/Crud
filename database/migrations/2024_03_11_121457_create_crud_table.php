<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crud', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 40);
            $table->string('lname', 40);
            $table->string('email', 75)->unique();
            $table->string('phone_no', 100);
            $table->string('password');
            $table->string('cpassword');
            $table->dateTime('date_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud');
    }
};
