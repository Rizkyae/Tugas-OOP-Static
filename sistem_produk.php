<?php
class Produk {
    public static $jumlahProduk = 0; 
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++; // Setiap produk dibuat, counter bertambah
    }

    public static function getJumlah() {
        return self::$jumlahProduk;
    }
}

class Transaksi {
    // Final method: tidak bisa di-override oleh class lain 
    final public function prosesTransaksi($produk) {
        echo "Memproses pembelian: " . $produk->nama . " seharga Rp" . number_format($produk->harga, 0, ',', '.') . "<br>";
        echo "Status: <span style='color:green;'>Berhasil</span><br><hr>";
    }
}

// 1. Buat minimal 3 produk 
$item1 = new Produk("iPhone XS Max", 5000000);
$item2 = new Produk("Toyota Fortuner Diecast", 150000);
$item3 = new Produk("Bi-LED Pro7", 2500000);

// 2. Tampilkan total produk 
echo "<h3>Total Produk Tersedia: " . Produk::getJumlah() . "</h3>";

// 3. Simulasikan transaksi 
$order = new Transaksi();
$order->prosesTransaksi($item1);
$order->prosesTransaksi($item3);
?>
