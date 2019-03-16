<?php
$koneksi = mysqli_connect('localhost','root','');
$database = "db_gudang";

$pilihdatabase = mysqli_select_db($koneksi,$database);
?>
<h2 style="margin-left:30px; margin-top:80px;">Jawaban Soal 7 (Aplikasi Sederhana)</h2>

<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">
        <?php
        $sql = "SELECT categories.id AS idcategory, categories.name AS namakategori, GROUP_CONCAT(products.name) AS namaproduk FROM products INNER JOIN categories ON categories.id = products.categories_id GROUP BY categories.name ORDER BY categories.id";
        $query = mysqli_query($koneksi,$sql);

        ?>
        <table align="center" class="table table-bordered table-hover">
      		<thead>
      			<th style="text-align:center;">Id</th>
      			<th style="text-align:center;">Kategori</th>
      			<th style="text-align:center;">Produk</th>
      		</thead>
          <tbody>
      		<?php while ($list = mysqli_fetch_assoc($query)) : ?>
      		<tr>
            <form action="" method="POST">
                <td align="center"><?php echo $list['idcategory']; ?></td>
      			<td align="center"><?php echo $list['namakategori']; ?></td>
      			<td align="center"><?php echo $list['namaproduk']; ?></td>
            </form>
      		</tr>
      		<?php endwhile; ?>
        </tbody>
      	</table>
        </div>
</div>
</div>
<!-- khusus soal ini saya hanya meniru tutorial yang ada di google -->
<!-- semoga lolos seleksi,semoga ada kebijakan karna saya baru belajar dan sangat berharap lolos seleksi -->

