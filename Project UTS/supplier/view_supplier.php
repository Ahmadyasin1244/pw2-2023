<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data supplier dengan id tertentu
    $sql = "SELECT * FROM supplier WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data supplier dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>Id</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nama supplier</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><?=$row['phone']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?=$row['address']?></td>
        </tr>
        <tr>
            <td>Nama kontak</td>
            <td><?=$row['contact_name']?></td>
        </tr>
    </tbody>
</table>
