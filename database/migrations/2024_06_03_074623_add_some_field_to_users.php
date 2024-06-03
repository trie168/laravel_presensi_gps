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
        Schema::table('users', function (Blueprint $table) {
            //nik, jabatan, departemen, jenis_kelamin, alamat, no_hp
            $table->string('nik', 10)->unique();
            $table->string('jabatan', 255);
            $table->string('departemen', 255);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat', 500);
            $table->string('no_hp', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('nik');
            $table->dropColumn('jabatan');
            $table->dropColumn('departemen');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('alamat');
            $table->dropColumn('no_hp');
        });
    }
};
