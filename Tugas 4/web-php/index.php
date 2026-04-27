<!-- <?php
        echo "Selamat datang di Pemrograman PHP!";
        ?> -->

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Contoh PHP</title>
</head>

<body>
    <h1>
        <?php
        echo "Halo, dunia!";
        ?>
    </h1>
</body>

</html> -->

<!-- <?php
        $nama = "Andi";
        echo $nama;
        ?> -->

<!-- <?php
        $nilai1 = 80;
        $nilai2 = 90;
        $jumlah = $nilai1 + $nilai2;
        echo $jumlah;
        ?> -->

<!-- <?php
        $nilai = 75;
        if ($nilai >= 70) {
            echo "Lulus";
        } else {
            echo "Tidak lulus";
        }
        ?> -->

<!-- <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "Data ke-" . $i . "<br>";
        }
        ?> -->

<!-- <?php
        $daftar = ["Andi", "Budi", "Citra"];
        foreach ($daftar as $nama) {
            echo $nama . "<br>";
        }
        ?> -->

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        <?php
        $daftar = ["Andi", "Budi", "Citra"];
        $no = 1;
        foreach ($daftar as $nama) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $nama . "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html> -->

<!-- <?php
        $koneksi = mysqli_connect("localhost", "root", "", "blog");
        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        } else {
            echo "Koneksi berhasil!";
        }
        ?> -->

<!-- <?php
        $query = "SELECT judul, tanggal, gambar, isi FROM artikel";
        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        } else {
            $hasil = mysqli_query($koneksi, $query);
            echo "Ada " . mysqli_num_rows($hasil) . " artikel.<br><br>";
        }

        ?> -->

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Daftar Artikel</title>
</head>

<body>
    <h2>Daftar Artikel</h2>
    <?php
    while ($row = mysqli_fetch_assoc($hasil)) {
        echo "<div style='margin-bottom:20px;'>";
        echo "<h3>" . $row['judul'] . "</h3>";

        echo "<p><em>" . $row['tanggal'] . "</em></p>";
        echo "<img src='images/" . $row['gambar'] . "' width='200'><br>";
        echo "<p>" . $row['isi'] . "</p>";
        echo "</div>";
    }
    ?>
</body>

</html> -->


<?php
// 1. Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "blog"; // ganti sesuai database
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// 2. Ambil data artikel
$sql = "SELECT * FROM artikel ORDER BY tanggal DESC";
$result = mysqli_query($conn, $sql);
$artikelList = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $artikelList[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Blog Dinamis dengan PHP dan JavaScript</title>
</head>

<body>
    <h2>Navigasi Konten</h2>
    <?php
    // 3. Tombol navigasi sesuai jumlah artikel

    for ($i = 0; $i < count($artikelList); $i++) {
        echo "<button onclick='tampilkanArtikel($i)'>" . ($i + 1) . "</button> ";
    }
    ?>
    <hr>
    <!-- 4. Div tunggal untuk menampilkan konten -->
    <div id="konten">
        <h3><?php echo $artikelList[0]['judul'] ?? ''; ?></h3>
        <p><em><?php echo $artikelList[0]['tanggal'] ?? ''; ?></em></p>
        <?php if (!empty($artikelList[0]['gambar'])): ?>
            <img src='images/<?php echo $artikelList[0]['gambar']; ?>' width="200"><br>
        <?php endif; ?>
        <p><?php echo $artikelList[0]['isi'] ?? ''; ?></p>
    </div>
    <script>
        // 5. Konversi data PHP ke array JavaScript
        const artikel = <?php echo json_encode($artikelList, JSON_HEX_TAG); ?>;
        // 6. Fungsi menampilkan artikel sesuai index
        function tampilkanArtikel(index) {
            const kontenDiv = document.getElementById("konten");
            kontenDiv.innerHTML = "<h3>" + artikel[index].judul + "</h3>" +
                "<p><em>" + artikel[index].tanggal + "</em></p>" +
                (artikel[index].gambar ? "<img src='images/" +
                    artikel[index].gambar + "' width='200'><br>" : "") +
                "<p>" + artikel[index].isi + "</p>";
        }
    </script>
</body>

</html>