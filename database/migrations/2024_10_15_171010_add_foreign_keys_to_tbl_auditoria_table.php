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
        Schema::table('tbl_auditoria', function (Blueprint $table) {
            $table->foreign(['id_usuario'], 'tbl_auditoria_ibfk_1')->references(['id_usuario'])->on('tbl_usuario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_auditoria', function (Blueprint $table) {
            $table->dropForeign('tbl_auditoria_ibfk_1');
        });
    }
};
