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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('city');
            $table->string('email')->unique();
            $table->bigInteger('phone');
            $table->longText('address')->nullable();
            $table->tinyInteger('status')->default(3)->comment('1 = Admin, 2 = Sub Admin, 3 = User');
            $table->boolean('isActive')->default(1)->comment('1 = Active, 0 = Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
