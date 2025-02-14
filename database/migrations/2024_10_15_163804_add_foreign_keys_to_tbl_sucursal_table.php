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
        Schema::table('tbl_sucursal', function (Blueprint $table) {
            $table->foreign(['id_pais'], 'tbl_sucursal_ibfk_1')->references(['id_pais'])->on('tbl_pais')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_departamento'], 'tbl_sucursal_ibfk_2')->references(['id_departamento'])->on('tbl_departamento')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_municipio'], 'tbl_sucursal_ibfk_3')->references(['id_municipio'])->on('tbl_municipio')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_estado'], 'tbl_sucursal_ibfk_4')->references(['id_estado'])->on('tbl_estado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_empresa'], 'tbl_sucursal_ibfk_5')->references(['id_empresa'])->on('tbl_empresa')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_sucursal', function (Blueprint $table) {
            $table->dropForeign('tbl_sucursal_ibfk_1');
            $table->dropForeign('tbl_sucursal_ibfk_2');
            $table->dropForeign('tbl_sucursal_ibfk_3');
            $table->dropForeign('tbl_sucursal_ibfk_4');
            $table->dropForeign('tbl_sucursal_ibfk_5');
        });
    }
};
