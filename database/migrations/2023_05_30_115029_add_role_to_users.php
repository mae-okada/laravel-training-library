<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
        }, 'thisBatch');
    }
    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('users', function (Blueprint $table) {
    //         //
    //     });
    // }
    
};
