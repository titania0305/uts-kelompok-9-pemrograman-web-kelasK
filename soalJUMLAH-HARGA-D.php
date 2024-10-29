<?php
// Array data produk dengan jumlah, harga, dan total yang dihitung
$produk = [
    ["nama" => "Buavita", "jumlah" => 30, "harga" => 7890],
    ["nama" => "Mango", "jumlah" => 21, "harga" => 21890],
    ["nama" => "Sariwangi", "jumlah" => 10, "harga" => 9990],
    ["nama" => "Shampo baby", "jumlah" => 20, "harga" => 20000],
    ["nama" => "Bedak", "jumlah" => 15, "harga" => 15000],
    ["nama" => "Baju bayi", "jumlah" => 20, "harga" => 35500],
    ["nama" => "Jumper", "jumlah" => 25, "harga" => 50000],
];

// Variabel untuk menghitung total keseluruhan
$totalKeseluruhan = 0;

// Menampilkan struk
echo "<h2>Struk Pembelian</h2>";
echo "<table border='0' cellpadding='8' cellspacing='5'>";
echo "<tr><th>Produk</th><th>Jumlah</th><th>Harga</th><th>Total</th></tr>";

// Menghitung total harga per produk dan menampilkan data
foreach ($produk as $item) {
    $totalHarga = $item["jumlah"] * $item["harga"];
    $totalKeseluruhan += $totalHarga;

    
    echo "<tr>";
    echo "<td>{$item['nama']}</td>";
    echo "<td>{$item['jumlah']}</td>";
    echo "<td>Rp" . number_format($item['harga'], 0, ',', '.') . "</td>";
    echo "<td>Rp" . number_format($totalHarga, 0, ',', '.') . "</td>";
    echo "</tr>";

}


echo "<tr><td colspan='3'><strong>Total Keseluruhan</strong></td>";
echo "<td><strong>Rp" . number_format($totalKeseluruhan, 0, ',', '.') . "</strong></td></tr>";
echo "</table>";
?>