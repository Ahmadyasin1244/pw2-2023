<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data product dengan id tertentu
    $sql = "SELECT * FROM product WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data product dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Sku</td>
            <td><?=$row['sku']?></td>
        </tr>
        <tr>
            <td>Nama product</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><?=$row['purchase_price']?></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><?=$row['sell_price']?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><?=$row['stock']?></td>
        </tr>
        <tr>
            <td>Minimum Stok</td>
            <td><?=$row['min_stock']?></td>
        </tr>
        <tr>
            <td>Jenis product</td>
            <td><?=$row['product_type_id']?></td>
        </tr>
        <tr>
            <td>Id Restok</td>
            <td><?=$row['restock_id']?></td>
        </tr>
    </tbody>
</table>
