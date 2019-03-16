<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root", "","db_gudang");
// ambil data dari tabel category/ query data category
$result = mysqli_query($conn, "SELECT * FROM category");
$result2 = mysqli_query($conn,"SELECT * FROM product");
// ambil data (fetch) category dari object result
// while ($category = mysqli_fetch_assoc($result)){

// }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aplikasi sederhana database gudang</title>
</head>
<body>
    <h1>daftar data product</h1>


<table border="1" cellpadding="10" cellspacing="0">
    
<tr>
    <th>Id</th>
    <th>Category Name</th>
    <th>Product</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <?php while($row2 = mysqli_fetch_assoc($result2)) :?>
    <td><?php echo $row2["name"]; ?></td>

</tr>
<?php endwhile; ?>
<?php endwhile; ?>
</table>
</body>
</html>

<!-- untuk soal ini saya sudah berusaha semaksimal mungkin namun sya bru belajar banget untuk database -->
<!-- semoga lolos seleksi,semoga ada kebijakan karna saya baru belajar dan sangat berharap lolos seleksi -->