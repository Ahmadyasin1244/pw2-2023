<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data order dengan id tertentu
    $sql = "SELECT * FROM order WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data order dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nomor Order</td>
            <td><?=$row['order_number']?></td>
        </tr>
        <tr>
            <td>Tanggal Order</td>
            <td><?=$row['date']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['qty']?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><?=$row['total_price']?></td>
        </tr>
        <tr>
            <td>ID Customer</td>
            <td><?=$row['customer_id']?></td>
        </tr>
        <tr>
            <td>ID Produk</td>
            <td><?=$row['product_id']?></td>
        </tr>
    </tbody>
</table>
