<?php
class Matematika {
    public static function kali($a, $b) { return $a * $b; }
    public static function bagi($a, $b) { return $a / $b; }
    public static function tambah($a, $b) { return $a + $b; }
    public static function kurang($a, $b) { return $a - $b; }
    
    public static function luasPersegi($sisi) {
        return $sisi * $sisi; // Rumus luas persegi [cite: 248]
    }
}

$hasil = null;
if (isset($_POST['hitung'])) {
    $sisi = $_POST['sisi'];
    $hasil = Matematika::luasPersegi($sisi);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Aesthetic</title>
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="bg-slate-900 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-2xl w-96">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Hitung Luas Persegi</h2>
        <form method="POST">
            <input type="number" name="sisi" placeholder="Masukkan panjang sisi" required
                class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-indigo-500 outline-none">
            <button type="submit" name="hitung" 
                class="w-full bg-indigo-600 text-white p-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Hitung Sekarang
            </button>
        </form>
        <?php if ($hasil !== null): ?>
            <div class="mt-6 p-4 bg-indigo-50 border-l-4 border-indigo-600 rounded">
                <p class="text-indigo-800">Hasil Luas: <strong><?php echo $hasil; ?></strong></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
