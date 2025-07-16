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
        Schema::table('postes', function (Blueprint $table) {
            $table->unsignedBigInteger('departements_id')->nullable();
            $table->foreign('departements_id')
                ->references('id')
                ->on('departements')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('postes', function (Blueprint $table) {
            $table->dropForeign(['departements_id']);
            $table->dropColumn('departements_id');
        });
    }
};
