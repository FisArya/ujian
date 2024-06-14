<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Trigger untuk AFTER UPDATE
        DB::unprepared('
            CREATE TRIGGER update_stok_setelah_barang_keluar_update
            AFTER UPDATE ON barangkeluar
            FOR EACH ROW
            BEGIN
                DECLARE stok_lama INT;
                DECLARE stok_baru INT;

                -- Ambil stok lama dari tabel barang
                SELECT stok INTO stok_lama FROM barang WHERE id = OLD.barang_id;

                -- Hitung stok baru
                SET stok_baru = stok_lama + OLD.qty_keluar - NEW.qty_keluar;

                -- Update stok di tabel barang
                UPDATE barang
                SET stok = stok_baru
                WHERE id = NEW.barang_id;
            END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_stok_setelah_barang_keluar_update');
    }
};
