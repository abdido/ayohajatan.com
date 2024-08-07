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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->string('guest_name');
            $table->string('message');
            $table->integer('participants');
            $table->boolean('attendance');
            $table->timestamps();
        });

        // Drop the table if it already exists
        // Schema::dropIfExists('homes');

        // // Drop a column if it already exists
        // if (Schema::hasColumn('homes', 'column_name')) {
        //     Schema::table('homes', function (Blueprint $table) {
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
