<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateTriggerBarangMasuk extends Migration
{
    public function up()
    {
        // Trigger untuk AFTER INSERT
        DB::unprepared('
        CREATE TRIGGER barang_up_stokplus 
        AFTER INSERT ON barangmasuk
        FOR EACH ROW
        BEGIN
            UPDATE barang 
            SET barang.stok = barang.stok + NEW.qty_masuk 
            WHERE barang.id = NEW.barang_id;
        END
        ');

        // Trigger untuk AFTER UPDATE
        DB::unprepared('
        CREATE TRIGGER barang_up_stokupdate 
        AFTER UPDATE ON barangmasuk
        FOR EACH ROW
        BEGIN
            DECLARE stok_lama INT;
            DECLARE stok_baru INT;

            -- Menghitung stok baru dengan menambahkan jumlah baru dan mengurangi jumlah lama
            SET stok_lama = (SELECT stok FROM barang WHERE id = OLD.barang_id);
            SET stok_baru = stok_lama - OLD.qty_masuk + NEW.qty_masuk;

            UPDATE barang 
            SET barang.stok = stok_baru 
            WHERE barang.id = NEW.barang_id;
        END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS barang_up_stokplus');
        DB::unprepared('DROP TRIGGER IF EXISTS barang_up_stokupdate');
    }
}
