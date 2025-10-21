<?php
// ====================================
// 1️⃣ MODEL
// ====================================
// Data yang disimpan di Model (representasi data buku)
function getDataBuku() {
    return [
        ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun_terbit" => 2005],
        ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun_terbit" => 1980],
        ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun_terbit" => 2009],
        ["judul" => "Filosofi Kopi", "pengarang" => "Dewi Lestari", "tahun_terbit" => 2006]
    ];
}

// ====================================
// 2️⃣ CONTROLLER
// ====================================
// Mengambil data dari Model dan mengirim ke View
function controllerTampilkanBuku() {
    $data_buku = getDataBuku(); // Ambil data dari Model
    tampilkanView($data_buku);  // Kirim ke View
}

// ====================================
// 3️⃣ VIEW
// ====================================
// Menampilkan data ke browser (HTML)
function tampilkanView($buku) {
    echo "<h2>📚 Daftar Buku Perpustakaan</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
          </tr>";
    
    $no = 1;
    foreach ($buku as $data) {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>{$data['judul']}</td>";
        echo "<td>{$data['pengarang']}</td>";
        echo "<td>{$data['tahun_terbit']}</td>";
        echo "</tr>";
        $no++;
    }

    echo "</table>";
}

// ====================================
// 4️⃣ PANGGIL CONTROLLER
// ====================================
controllerTampilkanBuku();
?>
