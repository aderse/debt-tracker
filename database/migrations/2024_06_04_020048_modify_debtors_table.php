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
        // Add in new column for the final date.
        Schema::table('debtors', function (Blueprint $table) {
            $table->date('finalDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove column
        Schema::table('debtors', function (Blueprint $table) {
            $table->dropColumn('finalDate');
        });
    }
};
