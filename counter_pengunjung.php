<?php
class Pengunjung {
    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }

    // Tambahkan method reset ini [cite: 224]
    public static function reset() {
        self::$jumlah = 0; [cite: 227]
    }
}

// Ubah jadi 5 objek 
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

echo "Jumlah Pengunjung Sebelum Reset: " . Pengunjung::$jumlah . "<br>"; // Muncul 5

Pengunjung::reset(); // Panggil fungsi reset [cite: 237]

echo "Jumlah Pengunjung Setelah Reset: " . Pengunjung::$jumlah; // Muncul 0
?>