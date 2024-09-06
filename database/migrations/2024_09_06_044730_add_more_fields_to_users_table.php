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
            $table->string('jenis_kelamin')->after('email_verified_at')->nullable();
            $table->string('nomor_hp')->after('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->after('nomor_hp')->nullable();
            $table->date('tanggal_lahir')->after('tempat_lahir')->nullable();
            $table->string('prodi')->after('tanggal_lahir')->nullable();
            $table->string('tahun_masuk')->after('prodi')->nullable();
            $table->string('tahun_lulus')->after('tahun_masuk')->nullable();
            $table->text('alamat')->after('tahun_lulus')->nullable();
            $table->string('jabatan')->after('alamat')->nullable();
            $table->string('perusahaan_bekerja')->after('jabatan')->nullable();
            $table->string('foto')->after('perusahaan_bekerja')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('nomor_hp');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('prodi');
            $table->dropColumn('tahun_masuk');
            $table->dropColumn('tahun_lulus');
            $table->dropColumn('alamat');
            $table->dropColumn('jabatan');
            $table->dropColumn('perusahaan_bekerja');
            $table->dropColumn('foto');
        });
    }
};
