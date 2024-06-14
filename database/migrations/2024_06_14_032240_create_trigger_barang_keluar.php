<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateTriggerBarangKeluar extends Migration
{
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER kurangi_stok_setelah_keluar
            BEFORE INSERT ON barangkeluar
            FOR EACH ROW
            BEGIN
                DECLARE barang_stok INT;
                DECLARE tanggal_masuk DATE;

                -- Ambil stok dan tanggal masuk dari tabel barang
                SELECT stok, tanggal_masuk INTO barang_stok, tanggal_masuk FROM barang WHERE id = NEW.barang_id;

                -- Periksa apakah tanggal keluar lebih awal dari tanggal masuk
                IF NEW.tgl_keluar < tanggal_masuk THEN
                    SIGNAL SQLSTATE "45000"
                    SET MESSAGE_TEXT = "Tanggal keluar tidak boleh lebih awal dari tanggal masuk";
                END IF;

                -- Update stok di tabel barang
                UPDATE barang
                SET stok = barang_stok - NEW.qty_keluar
                WHERE id = NEW.barang_id;
            END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS kurangi_stok_setelah_keluar');
    }
}
