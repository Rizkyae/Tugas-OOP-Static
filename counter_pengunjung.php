<?php
class Pengunjung {
    public static $jumlah = 0; // Static property milik class [cite: 205]

    public function __construct() {
        self::$jumlah++; // Menambah jumlah setiap objek dibuat [cite: 211]
    }

    public static function reset() {
        self::$jumlah = 0; // Mereset nilai static property [cite: 227]
    }
}

// Membuat 5 objek sesuai instruksi [cite: 216]
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

echo "Jumlah Pengunjung (Sebelum Reset): " . Pengunjung::$jumlah . "<br>"; // Output: 5

Pengunjung::reset(); // Memanggil static method [cite: 224]

echo "Jumlah Pengunjung (Setelah Reset): " . Pengunjung::$jumlah; // Output: 0
?>
