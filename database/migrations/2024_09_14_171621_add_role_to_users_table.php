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
        Schema::table(table: 'users', callback: function (Blueprint $table): void {
            $table->string(column: 'role')->default(value: 'user'); // Adding a role column with a default value
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(table: 'users', callback: function (Blueprint $table): void {
            $table->dropColumn(columns: 'role'); // Dropping the role column in case of rollback
        });
    }
};
