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
        // Modify the debtors table.
        Schema::table('debtors', function (Blueprint $table) {
            $table->renameColumn('currentDate','initialDate');
            $table->dropColumn('currentMonthNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Change the column name back to its original name.
        Schema::table('debtors', function (Blueprint $table) {
            $table->renameColumn('initialDate','currentDate');
            $table->integer('currentMonthNumber');
        });
    }
};
