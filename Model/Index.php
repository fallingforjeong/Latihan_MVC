<?php

class ProdukController {
    public function index() {
        // Contoh data dummy produk
        $produk = [
            ["nama" => "Laptop", "harga" => 15000000],
            ["nama" => "Mouse", "harga" => 150000],
            ["nama" => "Keyboard", "harga" => 300000]
        ];

        // Tampilkan daftar produk
        echo "<h1>Daftar Produk</h1>";
        echo "<ul>";
        foreach ($produk as $item) {
            echo "<li>" . $item["nama"] . " - Rp " . number_format($item["harga"], 0, ',', '.') . "</li>";
        }
        echo "</ul>";
    }
}
