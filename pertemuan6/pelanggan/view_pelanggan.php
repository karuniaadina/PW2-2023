<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?=$row['kode']?></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?=$row['jk']?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?=$row['tmp_lahir']?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?=$row['tgl_lahir']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$row['email']?></td>
        </tr>
        <tr>
            <td>Kartu</td>
            <td><?=$row['kartu_id']?></td>
        </tr>
    </tbody>
</table>
