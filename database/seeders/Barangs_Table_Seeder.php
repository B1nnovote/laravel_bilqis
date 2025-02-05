<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Barangs_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Laptop','jenis_barang'=>'elektronik','harga'=>'Rp.5.000.000','stok'=>'12'],
            ['nama_barang'=>'Handphone','jenis_barang'=>'elektronik','harga'=>'Rp.5.000.000','stok'=>'82'],
            ['nama_barang'=>'Tab','jenis_barang'=>'elektronik','harga'=>'Rp.7.000.000','stok'=>'25'],
            ['nama_barang'=>'Case Handphone','jenis_barang'=>'aksesoris','harga'=>'Rp.90.000','stok'=>'52'],
            ['nama_barang'=>'Tas Laptop','jenis_barang'=>'aksesoris','harga'=>'Rp.150.000','stok'=>'102'],
            ['nama_barang'=>'Anti gores Handphone','jenis_barang'=>'aksesoris','harga'=>'Rp.50.000','stok'=>'120'],
            ['nama_barang'=>'Case Tab','jenis_barang'=>'aksesoris','harga'=>'Rp.200.000.','stok'=>'25'],
            ['nama_barang'=>'Airpods','jenis_barang'=>'elektronik','harga'=>'Rp.100.000','stok'=>'52'],
            ['nama_barang'=>'Case Airpods','jenis_barang'=>'aksesoris','harga'=>'Rp.150.000','stok'=>'102'],
            ['nama_barang'=>'charger handphone','jenis_barang'=>'elektronik','harga'=>'Rp.50.000','stok'=>'120']


        ];
        //masukan data ke database
        DB::table('barangs')->insert($barangs);
    }
}

