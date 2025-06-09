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
        // Add fields to the user table
        Schema::table('users', function (Blueprint $table) {

            // Add locale field for localization
            $table->string('locale')->default('en')->after('email');

            // Add role field for user roles (0 for user, 1 for admin, 2 for staff)
            $table->enum('role', ['user', 'admin', 'staff'])->default('user')->after('locale');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the fields from the user table
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['locale', 'role']);
        });
    }
};
