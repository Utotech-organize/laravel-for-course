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
        Schema::create(table: 'blogs', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'title');
            $table->text(column: 'content');
            $table->boolean(column: 'status')->default(value: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'blogs');
    }
};
