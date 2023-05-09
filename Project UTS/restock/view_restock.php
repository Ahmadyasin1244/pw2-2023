<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data restock dengan id tertentu
    $sql = "SELECT * FROM restock WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data restock dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>Id</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nomor Restock</td>
            <td><?=$row['restock_number']?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><?=$row['date']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['qty']?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?=$row['price']?></td>
        </tr>
        <tr>
            <td>Id Supplier</td>
            <td><?=$row['supplier_id']?></td>
        </tr>
    </tbody>
</table>
