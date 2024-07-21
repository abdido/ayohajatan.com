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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->string('guest_name');
            $table->integer('participants');
            $table->boolean('attendance');
            $table->timestamps();
        });

        // Drop the table if it already exists
        // Schema::dropIfExists('weddings');

        // // Drop a column if it already exists
        // if (Schema::hasColumn('weddings', 'column_name')) {
        //     Schema::table('weddings', function (Blueprint $table) {
        //         $table->dropColumn('column_name');
        //     });
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
