<?php
// fungsi ganti angka menjadi tulisan
function ConfAngka($x){ 
	$abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"); 
	if ($x < 12){
		return " " . $abil[$x]; 
	}
	elseif ($x < 20) {
		return ConfAngka($x - 10) . " belas"; 
	}
	elseif ($x < 100) {
		return ConfAngka($x / 10) . " puluh" . ConfAngka($x % 10); 
	}
	elseif ($x < 200) {
		return " seratus" . ConfAngka($x - 100); 
	}
	elseif ($x < 1000) {
		return ConfAngka($x / 100) . " ratus" . ConfAngka($x % 100); 
	}
} 
// fungsi menentukan kembalian
function kembalian($kembalian,$uang){
    for ($x=0; $x < count($uang) ; $x++) { 
        $y = 0;
        while($kembalian >= $uang[$x]){
            $kembalian = $kembalian-$uang[$x];
            $y++;
        }
        if($y>0){
            echo "<li>".ConfAngka($y)." lembar pecahan ".number_format($uang[$x],0,",",".")."</li>";
        }
    }
}
$uang = [50000,20000,10000,5000,2000,1000,500]; // list kembalian
$tunai = 50000; // uang tunai
$belanja = 15500; // total belanja
$kembalian = $tunai-$belanja; // menghitung kembalian
?>

<table>
	<tr>
		<td>Total Belanja</td>
		<td>:</td>
		<td>Rp.<?=number_format($belanja,0,",",".")?>,-</td>
	</tr>
	<tr>
		<td>Tunai</td>
		<td>:</td>
		<td>Rp.<?=number_format($tunai,0,",",".")?>,-</td>
	</tr>
	<tr>
		<td>Kembalian</td>
		<td>:</td>
		<td>Rp.<?=number_format($kembalian,0,",",".")?>,-</td>
	</tr>
</table>

<h3>Daftar Kembalian</h3>
<ul style="list-style-type:disc">
	<?=kembalian($kembalian,$uang) ?>
</ul>
<!-- semoga lolos seleksi,semoga ada kebijakan karna saya baru belajar dan sangat berharap lolos seleksi -->