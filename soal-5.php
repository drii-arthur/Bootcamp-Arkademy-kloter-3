<?php
    $jumlahOrang = 3;
        function jabatTangan($jumlahOrang){
            $totalHandshake = 0;
            for($i = 0; $i < $jumlahOrang; $i++){
                for($j = 1; $j < $jumlahOrang; $j++){
                    $totalHandshake += 1;
                }
            }
            return $totalHandshake/2;
        }
        echo jabatTangan($jumlahOrang);

?>
<!-- semoga lolos seleksi,semoga ada kebijakan karna saya baru belajar dan sangat berharap lolos seleksi -->