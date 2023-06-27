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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id_user')->primary();
            $table->string('role', 11);
            $table->string('nama', 50);
            $table->string('email', 50)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password',50);
            $table->string('no_hp', 12);
             $table->string('jenis_kelamin',10);
            // $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
